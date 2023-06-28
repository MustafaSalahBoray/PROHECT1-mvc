<?php
/**
 * Frontend Developer
 */
class App 
{
  protected $controller="HomeController";
  protected $action="index";
  protected $params=[];
  public function __construct()
  {
      $this->prepareUrl();
      $this->render();
  	  }
      /**
       * prepareUrl from =controller and  methods and prams
       * @
       * **/
  private function prepareUrl()
  {
    $url=$_SERVER['REQUEST_URI'];
       if (!empty($url)) {
               $url=trim($url,'/');
               $url=explode("/", $url);
                //define Controller;
              
               // $this->controller=isset($url[0]) ? ucwords($url[0]).'Controller':'HomeController';
               if ($this->controller=isset($url[0])) {
                           $this->controller=  ucwords($url[0]).'Controller';
                                }
               else{
                               $this->controller=  'HomeController';  
                                }
             //define Action
                if ($this->action=isset($url[1])) {
                             $this->action= $url[1];
                                }
               else{
                               $this->action='index';  
                                }
             //define params
               unset($url[0],$url[1]);
                   if ($this->params=!empty($url)) {
              $this->params=  array_values($url);                                }
               else{
                               $this->params=[];  
                                }
                
             }      
  }
  private function render()
  {
      if (class_exists($this->controller)) {
           $controller=new $this->controller;
           if (method_exists($controller,$this->action)) {
              call_user_func([$controller,$this->action],$this->params);
           }
           else
           {
            echo "Methods :".$this->action."NotExist";
           }
      }
     
      

  }

}
?> 