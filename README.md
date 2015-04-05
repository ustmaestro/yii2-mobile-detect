### MobileDetect Yii2 Extension
> This Extension based on [Mobile_Detect class](https://github.com/serbanghita/Mobile-Detect) writed by Serban Ghita and Victor Stanciu

### Install
Add your component inside the config/web.php file eg:

```php
'components' => [
    ...

    'mobileDetect' => [
        'class' => 'ustmaestro\yii2-mobile-detect\MobileDetect'
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

