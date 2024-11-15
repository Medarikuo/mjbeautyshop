<?php

  Class Signup extends Controller { //get the methods of class controller
    public function index(){
                 //we can also make folder "folder/home.view"
      $data['page_title'] = "SIGNUP";

      if($_SERVER['REQUEST_METHOD'] == "POST"){
        show($_POST);
        $user = $this->load_model("user");
        //show(print_r($user));
        $user->signup($_POST);
      }
      $this->view("signup", $data);
    }

  }



?>
