<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PolyFood</title>
    
</head>
<body>
        <?php
            // autoload className
            spl_autoload_register(function($class) {         
                include_once './libs/'.$class.'.php';
            });
            include_once './config/config.php';
            $loadApp = new app();
   
            // $controller -> productDetail();
            // $controller -> postDetail();

            // echo '<preg>';
            // print_r($url);
            // echo '<pre>';
            // echo 'class:'.$url[0].'<br>';
            // echo 'methods:'.$url[1].'<br>';
            // echo 'param:'.$url[2].'<br>';
            // echo 'id:'.$url[3].'<br>';
        ?>
</body>
</html>