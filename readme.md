# Kirby Image Upload Shrink Plugin

A plugin for [Kirby 2 CMS](http://getkirby.com) to shrink images on *upload* and *replace* to max size.

## Installation

Copy or link the `image-shrink` directory to `site/plugins/` **or** use the [Kirby CLI](https://github.com/getkirby/cli):

```
kirby plugin:install schnti/kirby-image-shrink
```

### Config Variables

* ka.image.shrink.maxDimension: Integer of max dimension (Default: `1000`)


```php
c::set('ka.image.shrink.maxDimension', 2000);
```

## How to use it

Nothing required. Plugin is using the `panel.file.upload` and `panel.file.replace` [Hooks from Kirby](https://getkirby.com/docs/developer-guide/advanced/hooks)
