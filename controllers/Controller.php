<?php
/**
 * Created by PhpStorm.
 * User: Mario Hugo CF
 * Date: 2017-08-09
 * Time: 12:19 AM
 */
namespace controllers;
use \classes\Config as Config;
use \classes\Db as Db;
class Controller
{
    protected $model, $page, $view, $get, $post, $viewable, $proccessable;
    protected $calculatetable, $hasModel, $dBase;

    function __construct()
    {
        $this->_sanitizeInputs($_GET, $_POST);
        $this->setup();
    }
    private function _sanitizeInputs($get = array(), $post = null)
    {
        foreach($get as $getKey => $getVal)
        {
            $getKey = escape($getKey);
            $getVal = escape($getVal);
            unset($get[$getKey]);
            $get[$getKey] = $getVal;
        }

        foreach($post as $postKey => $postVal)
        {
            $postKey = escape($postKey);
            $postVal = escape($postVal);
            unset($post[$postKey]);
            $post[$postKey] = $postVal;
        }
        unset($_GET);
        unset($_POST);
        $this->get = $get;
        $this->post = $post;
    }
    private function setup()
    {
      $this->page = new \ReflectionClass($this);
      $this->view = $this->page->getShortName();
      $this->viewable = file_exists(__VIEW__.$this->view.".php");
      $this->proccessable = file_exists(__PROCESS__.$this->view.".php");
      $this->calculatetable = file_exists(__CALCULATE__.$this->view.".php");
      //$this->dBase = Db::getInstance()->rawPDO();
    }
    private function loadView()
    {
      if($this->calculatetable)
      {
        require_once(__CALCULATE__.$this->view.".php");
      }
      require_once(HEAD);
      require_once(HEADER);
      if($this->viewable)
      {
        require_once(__VIEW__.$this->view.".php");
      }
      else
      {
        require_once(_404);
      }
      require_once(FOOTER);
      require_once(FOOT);
    }
    protected function loadModel($model = false)
    {
      $model_name = ($model)? $model: $this->view;
      if($this->hasModel = file_exists(__MODEL__.$model_name.".php"))
      {
        $modelInit = "\\".__MODELS__.$model_name;
        return new $modelInit();
      }
      return false;
    }
    protected function postProcess($process = false)
    {
      $process_name = ($process)? $process: $this->view;
      include(__PROCESS__.$process_name.".php");
      unset($this->post);
    }
    protected function run()
    {
      if(!empty($this->post) && $this->proccessable)
      {
        $this->postProcess();
      }
      $this->loadView();
    }
    protected function loadPartial($view = "")
    {
      if(file_exists(__CALCULATE__.$view.".php"))
      {
        require_once(__CALCULATE__.$view.".php");
      }
      if(file_exists(__VIEW__.$view.".php"))
      {
        require_once(__VIEW__.$view.".php");
      }
      else
      {
        require_once(_404);
      }
    }
}
