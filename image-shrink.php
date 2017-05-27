<?php

// Shrink large images on upload
kirby()->hook('panel.file.upload', 'shrinkImage');
kirby()->hook('panel.file.replace', 'shrinkImage');
function shrinkImage($file)
{

	$maxDimension = c::get('ka.image.shrink.maxDimension', 1000);
	$customConfigArray = c::get('ka.image.shrink.customConfig', array());

	try {
		if ($file->type() == 'image' and ($file->width() > $maxDimension or $file->height() > $maxDimension)) {

			$config = [
				'width' => $maxDimension,
				'height' => $maxDimension
			];

			$config = array_merge($config, $customConfigArray);

			// Get original file path
			$originalPath = $file->dir() . '/' . $file->filename();
			// Create a thumb and get its path
			$resized = $file->thumb($config);
			$resizedPath = $resized->dir() . '/' . $resized->filename();
			// Replace the original file with the resized one
			copy($resizedPath, $originalPath);
			unlink($resizedPath);
		}
	} catch (Exception $e) {
		return response::error($e->getMessage());
	}
}