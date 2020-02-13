# laravel-videoable

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status](https://img.shields.io/travis/nWidart/laravel-videoables/master.svg?style=flat-square)](https://travis-ci.org/nWidart/laravel-videoable)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/coverage/g/nWidart/laravel-videoable.svg?style=flat-square)](https://scrutinizer-ci.com/g/nWidart/laravel-videoable/?branch=master)
[![Quality Score](https://img.shields.io/scrutinizer/g/nWidart/laravel-videoable.svg?style=flat-square)](https://scrutinizer-ci.com/g/nWidart/laravel-videoable)
[![Total Downloads][ico-downloads]][link-downloads]

| **Laravel**  |  **laravel-videoable** |
|---|---|
| <= 5.4  | ^1.0 |
| 5.5  | ^2.0  |
| 5.7  | ^3.0  |
| 6.15  | ^4.0  |

**Laravel Videoable** is a quick and easy way to add a video to your Eloquent Models. It also features a way to generate the embed code directly.

``` php
$product = Product::create(['product_name' => 'something']);

$product->addVideo([
   'source' => 'youtube',
   'code' => '123',
   'title' => 'my video',
   'width' => 50,
   'height' => 150,
]);

// Get the embeddable code
$product->video->getEmbed();

// Returns
<div>
    <div class="video">
        <iframe id="ytplayer" type="text/html" width="100%" height="100%"
                src="https://www.youtube.com/embed/123?rel=0"
                frameborder="0" allowfullscreen></iframe>
    </div>
</div>
```

## Install

Via Composer

``` bash
$ composer require nwidart/laravel-videoable
```

Next add the following service provider in `config/app.php`.

``` php
'providers' => [
  Eonlab\LaravelVideoable\LaravelVideoableServiceProvider::class,
],
```

Publish the package's migrations files by running :

```bash
php artisan vendor:publish --provider="Eonlab\LaravelVideoable\LaravelVideoableServiceProvider" --tag=migrations
```

After the migrations have been published you can create the `laravel_videoables` table by running the migrations

```bash
php artisan migrate
```

(optional) Publish the package's configuration file by running :

``` bash
php artisan vendor:publish --provider="Eonlab\LaravelVideoable\LaravelVideoableServiceProvider" --tag=config
```

(optional) Publish the package's view files by running :

``` bash
php artisan vendor:publish --provider="Eonlab\LaravelVideoable\LaravelVideoableServiceProvider" --tag=views
```


## Documentation

You'll find installation instructions and full documentation on https://nwidart.com/laravel-videoable/.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email n.widart@gmail.com instead of using the issue tracker.

## Credits

- [Nicolas Widart][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/nwidart/laravel-videoable.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/nwidart/laravel-videoable/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/nwidart/laravel-videoable.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/nwidart/laravel-videoable.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/nwidart/laravel-videoable.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/nwidart/laravel-videoable
[link-travis]: https://travis-ci.org/nWidart/laravel-videoable
[link-scrutinizer]: https://scrutinizer-ci.com/g/nwidart/laravel-videoable/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/nwidart/laravel-videoable
[link-downloads]: https://packagist.org/packages/nwidart/laravel-videoable
[link-author]: https://github.com/nwidart
[link-contributors]: ../../contributors
