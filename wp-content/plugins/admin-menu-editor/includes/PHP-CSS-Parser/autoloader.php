<<<<<<< HEAD
<?php

spl_autoload_register(function($class)
{
    $file = __DIR__.'/lib/'.strtr($class, '\\', '/').'.php';
    if (file_exists($file)) {
        require $file;
        return true;
    }
=======
<?php

spl_autoload_register(function($class)
{
    $file = __DIR__.'/lib/'.strtr($class, '\\', '/').'.php';
    if (file_exists($file)) {
        require $file;
        return true;
    }
>>>>>>> 676c6ed3ea2781a8ef08b445789c78df38727548
});