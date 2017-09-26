<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/6
 * Time: 10:52
 */



require dirname(__DIR__)."../crazy/Crazy.php";

$config=array();

Crazy::application($config)->run();

//new \crazy\Test();
//$str_one = "@abcabcabc";
//$str_two = "@abcabc";
//$compile = strncmp( $str_one, $str_two, 1);
//
//var_dump($compile);