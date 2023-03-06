<?php


    function loaderThird($classname) {
        $fileDir = './testik/' . $classname  . '.php';
        if (!file_exists($fileDir)) {
            return;
        }
        include_once $fileDir;
    }

    function loaderTest($classname) {
        $fileDir = './' . $classname . '.php';
        if (!file_exists($fileDir)) {
            return;
        }
        include_once $fileDir;
    }

    spl_autoload_register('loaderThird');
    spl_autoload_register('loaderTest');

    $testObj = new TestClass();
    $testObj->secondFunc();

    $testObj = new ThirdClass();
    $testObj->secondFunc();
?>
