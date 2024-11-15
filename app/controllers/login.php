<?php

  Class Login extends Controller { //get the methods of class controller
    public function index(){
                 //we can also make folder "folder/home.view"
      $data['page_title'] = "LOGIN";
      $this->view("login", $data);
    }

  }



?>
