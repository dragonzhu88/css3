<?php
//
////require 'test1.php';
////require 'test2.php';
//
//spl_autoload_register('autoload1');
//spl_autoload_register('autoload2');
//
//function autoload1($class){
//    require __DIR__.'/'.$class.'.php';
//}
//
//function autoload2($class){
//    require __DIR__.'/'.$class.'.php';
//}
//
//c
//Test1::test();
//Test2::test();
$slat = 'zzz';

//echo $slat.pack("N",80808080);

echo bin2hex(pack("N",80808080));