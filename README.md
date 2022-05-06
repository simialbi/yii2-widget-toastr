# Yii2 Toastr - Simple flash toastr notifications for Yii2

[![Latest Stable Version](https://poser.pugx.org/simialbi/yii2-toastr/v/stable?format=flat-square)](https://packagist.org/packages/simialbi/yii2-toastr)
[![Total Downloads](https://poser.pugx.org/simialbi/yii2-toastr/downloads?format=flat-square)](https://packagist.org/packages/simialbi/yii2-toastr)
[![License](https://poser.pugx.org/simialbi/yii2-toastr/license?format=flat-square)](https://packagist.org/packages/simialbi/yii2-toastr)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ php composer.phar require --prefer-dist simialbi/yii2-toastr
```

or add

```
"simialbi/yii2-toastr": "^1.0.0"
```

to the ```require``` section of your `composer.json`

## Demo
* Demo can be found at http://codeseven.github.io/toastr/demo.html
* [Demo using FontAwesome icons with toastr](http://plnkr.co/edit/6W9URNyyp2ItO4aUWzBB?p=preview)

## Plugin docs
All options and events can be found on the [plugins repository page](https://github.com/CodeSeven/toastr).

## Example Usage

```php
<?php
    use simialbi\yii2\Toastr;
    
    Toastr::widget([
        'type' => Toastr::TYPE_SUCCESS,
        'title' => 'This is a toast',
        'message' => 'Example toast message',
        'closeButton' => true,
        'debug' => false,
        'newestOnTop' => false,
        'position' => Toastr::POSITION_BOTTOM_RIGHT,
        'progressBar' => true
        // [...]
    ]);
```


## License

**yii2-toastr** is released under MIT license. See bundled [LICENSE](LICENSE) for details.

## Acknowledgements
* [die-coding's toastr widget](https://github.com/die-coding/yii2-toastr)
* [Code Seven](https://github.com/CodeSeven/toastr)
