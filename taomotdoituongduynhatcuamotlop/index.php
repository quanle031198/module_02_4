<?php
class Application
{
    private static $instance = 'hi';
    // private static $instance1 = 'hi';

    public static function getInstance()
    {
        if (self::$instance === 'hi') {
            self::$instance = new Application();
           
        }
        return self::$instance = 'My name is qle';
    }
    public static function getInstance1() {
        if(self::$instance === null) {
            self::$instance = new Application();
        }
        return self::$instance ='dao';
    }
}

$app1 = Application::getInstance();
echo $app1;
$app2 = Application::getInstance1();
echo $app2;

