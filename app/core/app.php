<?php
  //MVC
  //url ex. home/index/product1/lipstick
  // 0 - controller ex. home
  // 1 - method
  // the rest is value for use
  Class App {
    protected $controller = "home";
    protected $method = "index";
    protected $params;

  public function __construct(){
    $url = $this->parseURL();
    //show($url);
    //---------FOR ROUTING---------
    if(file_exists("../app/controllers/" . strtolower($url[0]) . ".php")){
      //replace the default controller(home)
      $this->controller = strtolower($url[0]);
      unset($url[0]); //to remove controllername from array
    }

    require "../app/controllers/" . $this->controller . ".php";
    $this->controller = new $this->controller;
    //show($url);

    if(isset($url[1])){
      $url[1] = strtolower($url[1]);
      if(method_exists($this->controller, $url[1])){
        $this->method = $url[1];
        unset($url[1]); //to remove methodname from array
      }
    }

    $this->params = (count($url) > 0) ? $url : ["home"];
    //call the method of class(ex.home) with given parameter if there is
    call_user_func_array([$this->controller, $this->method], $this->params);
    //show(array_values($url));
    //-------------END OF ROUTING-------
  }

  private function parseURL(){
    $url = isset($_GET['url']) ? $_GET['url'] : "home";
    //sanitize the url and return as array
    //trim to remove last / so we don't get empty element
    return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    //return $url;
  }

}





?>
