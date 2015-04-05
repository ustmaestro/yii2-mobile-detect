### MobileDetect Yii2 Extension
> This Extension based on [Mobile_Detect class](https://github.com/serbanghita/Mobile-Detect) writed by Serban Ghita and Victor Stanciu

### Install
The preferred way to install this extension is through <a href="http://getcomposer.org/download/">composer</a>.

Either run
```php
php composer.phar require --prefer-dist ustmaestro/yii2-mobile-detect "dev-master"
```
or add
```php
"ustmaestro/yii2-mobiledetect": "dev-master"
```
to the require section of your composer.json file.

Add your component inside the config/web.php file eg:

```php
'components' => [
    ...

    'mobileDetect' => [
        'class' => 'ustmaestro\mobiledetect\MobileDetect'
    ],
    
    ...
];
```

### Usage
```php
  $detect = Yii::$app->mobileDetect;
  // call methods
  $detect->isMobile();
  $detect->isTablet();
  $detect->isIphone();
  ...
```

