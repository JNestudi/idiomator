# idiomator
simle php snippet 
Just add a folder named "lang" and all the lang (iso code + ".php" unless you want to change the iso code as I did with catalan language).
The lang string substitution will work like this:
At the index.php (or other accesible file)
```php
<?=$l['somestring'];?>
```
At the "en.php" (or other language file inside the folder langs)
```php
<?php $l['somestring'] = "Some string"; ?>
```
