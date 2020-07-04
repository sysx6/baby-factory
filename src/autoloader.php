<?php
spl_autoload_register(function ($class_name) {
    $path = "/Applications/MAMP/htdocs/Training/evelon/src/";
    include $path . strtolower($class_name) . '.class.php';
});
?>