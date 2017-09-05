<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/5
 * Time: 17:09
 */

namespace Crazy;


class Crazy
{

    protected $_config = array();

    protected static $_coreMap = array();

    /**
     *
     */
    public static function application($config = array())
    {
        self::initConfig($config);
    }

    public function run()
    {
        $this->initConfig();
    }

    public function initConfig()
    {

    }

    public static function autoload($classNmae, $path="")
    {
        if (isset(self::$_coreMap[$classNmae])){
            include self::$_coreMap[$classNmae];
        }else{
            throw new Exception("文件不存在");
        }
    }

    public static function init()
    {
        function_exists('date_default_timezone_set') && date_default_timezone_set('Etc/GMT+0');
        if (function_exists('spl_autoload_register')) {
            spl_autoload_register('Crazy:autoload', true, true);
        }

        self::_loadCore();
    }

    public static function _loadCore()
    {
        self::$_coreMap = [

        ];
    }

}


Crazy::init();