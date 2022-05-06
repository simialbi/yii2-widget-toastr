# Yii2 Toastr - Simple flash toastr notifications for Yii2

[![Latest Stable Version](https://poser.pugx.org/simialbi/yii2-widget-toastr/v/stable?format=flat-square)](https://packagist.org/packages/simialbi/yii2-widget-toastr)
[![Total Downloads](https://poser.pugx.org/simialbi/yii2-widget-toastr/downloads?format=flat-square)](https://packagist.org/packages/simialbi/yii2-widget-toastr)
[![License](https://poser.pugx.org/simialbi/yii2-widget-toastr/license?format=flat-square)](https://packagist.org/packages/simialbi/yii2-widget-toastr)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ php composer.phar require --prefer-dist simialbi/yii2-widget-toastr
```

or add

```
"simialbi/yii2-widget-toastr": "^1.0.0"
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

### Options
| Property            | Description                                                                                                                                  |
|---------------------|----------------------------------------------------------------------------------------------------------------------------------------------|
| `type`              | **required** The alert type. This is one of the *ALERT_TYPE_** constants.                                                                    |
| `title`             | **required** The title to render.                                                                                                            |
| `message`           | **required** The main message to render                                                                                                      |
| `closeButton`       | Whether or not to show the close button                                                                                                      |
| `debug`             | Is it debug mode?                                                                                                                            |
| `newestOnTop`       | Show the newest on top or at the end?                                                                                                        |
| `progressBar`       | Whether or not to show a progress bar                                                                                                        |
| `positionClass`     | The position of the toast. One of the *POSITION_** constants.                                                                                |
| `preventDuplicates` | Whether or not to show duplicate toasts.                                                                                                     |
| `onclick`           | A [\yii\web\JsExpression](https://www.yiiframework.com/doc/api/2.0/yii-web-jsexpression) with a js function which will be executed on click. |
| `showDuration`      | The animation duration in milliseconds until the toast appears                                                                               |
| `hideDuration`      | The animation duration in milliseconds until the toasts is hidden                                                                            |
| `timeOut`           | How long the toast will display without user interaction                                                                                     |
| `extendedTimeOut`   | How long the toast will display after a user hovers over it                                                                                  |
| `showEasing`        | The animation easing to use while showing. One of the *EASING_** constants.                                                                  |
| `hideEasing`        | The animation easing to use while hiding. One of the *EASING_** constants.                                                                   |
| `showMethod`        | The animation method to use while showing. One of the *ANIMATION_** constants.                                                               |
| `hideMethod`        | The animation method to use while hiding. One of the *ANIMATION_** constants.                                                                |
| `tapToDismiss`      | Whether or not to dismiss the toast on tap.                                                                                                  |
| `clientOptions`     | Manually override all client options here.                                                                                                   |


## License

**yii2-widget-toastr** is released under MIT license. See bundled [LICENSE](LICENSE) for details.

## Acknowledgements
* [die-coding's toastr widget](https://github.com/die-coding/yii2-toastr)
* [Code Seven](https://github.com/CodeSeven/toastr)
