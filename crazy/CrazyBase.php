<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/6
 * Time: 11:19
 */

namespace crazy;


class CrazyBase
{
    protected $_config = array();

    protected static $_coreMap = array();

    /**
     *
     */
    public static function application($config = array())
    {
        self::initConfig($config);
        return new self();
    }

    public function run()
    {
        $this->initConfig();
    }

    public static function initConfig()
    {
        echo "initconfig";
    }

    public static function autoload($classNmae, $path="")
    {
        if (isset(self::$_coreMap[$classNmae])){
            include self::$_coreMap[$classNmae];
        }else{
            throw new \Exception("文件不存在");
        }
    }

    public static function init()
    {
        function_exists('date_default_timezone_set') && date_default_timezone_set('Etc/GMT+0');
        if (function_exists('spl_autoload_register')) {
            spl_autoload_register(['Crazy','autoload'], true, true);
        }

        self::_loadCore();
    }

    public static function _loadCore()
    {
        self::$_coreMap = [

        ];
    }
}