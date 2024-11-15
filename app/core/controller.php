<?php

Class Controller{

  public function view($path, $data = []){ //pagetitle or what
    if(file_exists("../app/views/" . THEME . $path . ".php")){
      include "../app/views/" . THEME . $path . ".php";
    }else {
      include "../app/views/" . THEME . "404.php";
    }
  }

  public function load_model($model){ //pagetitle or what
    if(file_exists("../app/models/" . strtolower($model) . ".class.php")){
      include "../app/models/" . strtolower($model)  . ".class.php";
      return $myModel = new $model();
    }
    return false;
  }

}



 ?>
