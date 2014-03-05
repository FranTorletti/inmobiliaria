<?php

class HomeController extends BaseController {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data["title"] = "inmobiliaria - novelty";
        $this->data["publications"] = Model::getEM()->getRepository("Publication")->novelties();
        $this->data["message"] = "No News";
        $this->return_html("home.tpl");
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

    function showHousingForSale(){
        $this->data["title"] = "Inmobiliaria - housings for sale";
        $this->data["publications"] = Model::getEM()->getRepository("Publication")->housingForSale();
        $this->data["message"] = "No housings for sale";
        $this->return_full("home.tpl");
    }

	function showHousingForRental(){
        $this->data["title"] = "Inmobiliaria - housings for Rental";
        $this->data["publications"] = Model::getEM()->getRepository("Publication")->housingForRental();
        $this->data["message"] = "No housings for rental";
        $this->return_full("home.tpl");
    }

    function showDepartamentsForSale(){
        $this->data["title"] = "Inmobiliaria - Departaments for sale";
        $this->data["publications"] = Model::getEM()->getRepository("Publication")->departamentsForSale();
        $this->data["message"] = "No departaments for sale";
        $this->return_full("home.tpl");
    }

    function showDepartamentsForRental(){
        $this->data["title"] = "Inmobiliaria - Departaments for rental";
        $this->data["publications"] = Model::getEM()->getRepository("Publication")->departamentsForRental();
        $this->data["message"] = "No departaments for rental";
        $this->return_full("home.tpl");
    }

    function showFieldsForSale(){
        $this->data["title"] = "Inmobiliaria - fields for sale";
        $this->data["publications"] = Model::getEM()->getRepository("Publication")->fieldsForSale();
        $this->data["message"] = "No fields for sale";
        $this->return_full("home.tpl");
    }

    function showFieldsForRental(){
        $this->data["title"] = "Inmobiliaria - fields for Rental";
        $this->data["publications"] = Model::getEM()->getRepository("Publication")->fieldsForRental();
        $this->data["message"] = "No fields for rental";
        $this->return_full("home.tpl");
    }

    function search($housing,$departaments,$fields,$sale,$rental,$lowestPrice,$higherPrice){
        $this->data["title"] = "Inmobiliaria - Search";
        $this->data["publications"] = Model::getEM()->getRepository("Publication")->searchPublications();
        $this->data["message"] = "No results found";
        $this->return_full("home.tpl");
    }

    function searchTo(){
    	$this->return_html("search.tpl");
  	}
}
?>