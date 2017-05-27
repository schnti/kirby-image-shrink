# Kirby Image Upload Shrink Plugin

A plugin for [Kirby 2 CMS][1] to shrink images on *upload* and *replace* to max size.

## Installation

Copy or link the `image-shrink` directory to `site/plugins/` **or** use the [Kirby CLI][2]:

```
kirby plugin:install schnti/kirby-image-shrink
```

### Config Variables

* ka.image.shrink.maxDimension: Integer of max dimension (Default: `1000`)
* ka.image.shrink.customConfig: Additional config for [$file->thumb()][3]


```php
c::set('ka.image.shrink.maxDimension', 2000);
c::set('ka.image.shrink.customConfig', array(
    'imagekit.lazy' => false // e.g. for use with https://github.com/fabianmichael/kirby-imagekit
));
```

## How to use it

Nothing required. Plugin is using the `panel.file.upload` and `panel.file.replace` [Hooks from Kirby][4]

[1]: https://getkirby.com
[2]: https://github.com/getkirby/cli
[3]: https://getkirby.com/docs/cheatsheet/file/thumb
[4]: https://getkirby.com/docs/developer-guide/advanced/hooks
