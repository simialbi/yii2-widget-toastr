# Yii2 Toastr - Simple flash toastr notifications for Yii2



## Cara Memasang

Melalui console:

```
composer require --prefer-dist diecoding/yii2-toastr "*"
```

atau tambahkan:

```
"diecoding/yii2-toastr": "*"
```

pada baris `require` yang terdapat di berkas `composer.json`. Kemudian jalankan

```
composer update
```


## Cara Menggunakan

1. Tambahkan di `views\layouts\main.php`

```php
\diecoding\toastr\ToastrFlash::widget();
```

2. Set Session Flash
  * Cara Basic

```php
\Yii::$app->session->setFlash('error', 'Message');

\Yii::$app->session->setFlash('error', ['Message 1', 'Message 2', 'Message 3']);
```

  * Cara Advanced

```php
\Yii::$app->session->setFlash('error', [['Title', 'Message']]);

\Yii::$app->session->setFlash('error', [['Title 1', 'Message 1'], ['Title 2', 'Message 2'], ['Title 3', 'Message 3']]);
```
