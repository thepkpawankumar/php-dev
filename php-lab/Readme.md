# PHP Lab

Use header method to redirect to other page

```php 
header("Location: ./other-page.php")
```

PHP is a case-sensitive language for variables and constants, but function names, class names and class methods are not case-sensitive.

You can start php server using 
```php
 php -S localhost:8080 -t your-folder/
 ```

 standalone type declaration ```string $name = "PHP Lab";``` are not supported in PHP

 Type hint is not allowed on forloop
 ```php
 for (int $i = 0; $i < 10; $i++) {
    echo "Loop iteration: $i\n";
}
```