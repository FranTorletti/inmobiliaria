<?php

class HomeController extends BaseController {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->return_html("createUser.tpl");
    }

    function login(){
    	$this->return_html("login.tpl");
    }

    function privacy(){
    	$this->return_html("privacy.tpl");
    }

	function terms(){
    	$this->return_html("terms.tpl");
    }    

}

?>