ClassLoader
===========

簡単なクラスローダー

使い方

```php5:bootstrap.php
<?php
require_once __DIR__ . '/ClassLoader.php';
$loader = new ClassLoader();
$loader->registerDir(__DIR__ . '/hoge');
$loader->register();
```
