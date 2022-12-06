<?php

/**
 * @name Bootstrap
 * @author jcbbhe
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */

use Illuminate\Pagination\Paginator;
use utils\route\Route;
use utils\SmartyAdapter;
use Yaf\Application;
use Yaf\Dispatcher;
use Yaf\Registry;
use Yaf\Loader;

class Bootstrap extends Yaf\Bootstrap_Abstract {


    public function _initVendor() {
//        require_once APPLICATION_PATH . '/utils/util.php';
//        Loader::getInstance()->registerNamespace("utils", APPLICATION_PATH . "/utils");
//        Loader::getInstance()->registerNamespace("Admin\Model", APPLICATION_PATH . "/modules/Admin/models");
    }


    public function _initRouter(Dispatcher $dispatcher) {
//        $router = $dispatcher->getRouter();
//        $route = new Route();
//        $router->addRoute('_default', $route);
    }


    public function _initConfig() {
//        $iniConfig = Application::app()->getConfig()->toArray();
//        Registry::set('config', $iniConfig);
    }

    public function _initDefine() {
        // 定义当前请求的系统常量
        define('NOW_TIME', $_SERVER['REQUEST_TIME']);
        define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);
        define('IS_GET', REQUEST_METHOD == 'GET');
        define('IS_POST', REQUEST_METHOD == 'POST');
        define('IS_PUT', REQUEST_METHOD == 'PUT');
        define('IS_DELETE', REQUEST_METHOD == 'DELETE');
        define('IS_OPTIONS', REQUEST_METHOD == 'OPTIONS');
        define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
        define('IS_AJAX_GET', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttpget');
        define('IS_AJAX_POST', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttppost');
    }

    public function _initView(Dispatcher $dispatcher) {
        // 禁用视图渲染
        $dispatcher->disableView();
    }

    public function _initDatabase(Dispatcher $dispatcher) {
//        $configureDatabaseConfigure = [
//            "driver" => "sqlite",
//            "database" => APPLICATION_PATH . "/config.db",
//        ];


//        $config = C("database");
//
//        $capsule = new Illuminate\Database\Capsule\Manager();
//        $capsule->addConnection($config);
//        $capsule->addConnection($configureDatabaseConfigure, 'configure');
//        $capsule->setAsGlobal();
//        $capsule->bootEloquent();
//
//
//        class_alias('Illuminate\Database\Capsule\Manager', 'DB');
//
//        $siteConfigObject = DB::connection("configure")->table('site')->get()->toArray();
//        $siteConfig = [];
//        foreach ($siteConfigObject as $value) {
//            $siteConfig[$value->key] = $value->value;
//        }
//        define("SITE_CONFIG", $siteConfig);

    }


    public function _initPageResolver() {
//        Paginator::currentPageResolver(function () {
//            if (isset($_GET['pageIndex'])) {
//                return $_GET['pageIndex'];
//            }
//            return 1;
//        });
//
//        $pageSize = 10;
//        if (isset($_GET['pageSize'])) {
//            $pageSize = $_GET['pageSize'];
//        }
//        define('PAGE_SIZE', $pageSize);
    }

}
