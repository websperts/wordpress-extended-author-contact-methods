# Extended Author Contact Methods

Extends author contact methods in WordPress (Facebook, Twitter, Google+, LinkedIn, Pinterest, Flattr).

## Installation

1. Download the ZIP
2. Install the plugin in WordPress by either uploading the unzipped plugin folder via (S)FTP or uploading the ZIP directly via the Plugins page in the WordPress back-end
3. Activate the plugin

## Changelog

* 0.0.2
	* Add Flattr
* 0.0.1
	* Initial version

## What it looks like

![Back-end screenshot](https://picpig.com/6j5ata2jjs.png)

## Usage in templates

### Facebook

```php
<?php the_author_meta('facebook') ?>
```

### Twitter

```php
<?php the_author_meta('twitter') ?>
```

### Google+

```php
<?php the_author_meta('google_plus') ?>
```

### LinkedIn

```php
<?php the_author_meta('linkedin') ?>
```

### Pinterest

```php
<?php the_author_meta('pinterest') ?>
```

### Flattr

```php
<?php the_author_meta('flattr') ?>
```

## Examples

### Authorship with Google+

```php
<a href="https://plus.google.com/<?php the_author_meta('google_plus') ?>" rel="author">
	<?php the_author() ?>
</a>
```

### Facebook

```php
<a href="http://fb.com/<?php the_author_meta('facebook') ?>">
	<?php the_author() ?> on Facebook
</a>
```

### Twitter

```php
<a href="https://twitter.com/<?php the_author_meta('facebook') ?>">
	<?php the_author() ?> on Facebook
</a>
```

### Flattr

```php
<a href="https://flattr.com/submit/auto?url=<?php echo rawurlencode(get_permalink()) ?>&amp;user_id=<?php the_author_meta('flattr') ?>&amp;category=text&amp;title=<?php echo rawurlencode(get_the_title()) ?>" target="_blank">Flattr this!</a>
```

## License

Copyright (c) 2015 [websperts](http://websperts.com/)  
Licensed under the MIT license.

See LICENSE for more info.