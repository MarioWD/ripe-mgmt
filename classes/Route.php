<?php
/**
 * Created by PhpStorm.
 * User: Mario Hugo CF
 * Date: 2017-08-08
 * Time: 11:59 PM
 */
namespace classes;
class Route
{
    private $_routes = array();
    private $_controller;
    private $_method;

    public function __construct()
    {
        $this->_routes = Config::get("routes");
        $this->_setController();
    }
    public function getRoutes()
    {
        return $this->_routes;
    }
    public function getController()
    {
        return $this->_controller;
    }
    public function getMethod()
    {
        return $this->_method;
    }
    private function _setController()
    {
        $potentialClass = (!$_GET["controller"])? "Home" : ucfirst(escape($_GET['controller']));
        $potentialSection = (file_exists(__CONTROLLER__.$potentialClass.".php") && file_exists(__VIEW__.$potentialClass.".php"));
        $this->_controller = ($_GET['controller'] && $potentialSection)? $potentialClass : "Home";
        unset($_GET['controller']);
    }
}
