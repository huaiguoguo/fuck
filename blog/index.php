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