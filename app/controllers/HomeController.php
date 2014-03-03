<?php

class HomeController extends BaseController {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $qb = Model::getEM()->createQueryBuilder();
        
        //busqueda de productos
        $qb->select("p")
            ->from("Publication", "p")
            ->andWhere("p.novelty = 'true' ");
        $this->data["title"] = "inmobiliaria - novelty";
        $this->data["publications"] = $qb;
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
        $qb = Model::getEM()->createQueryBuilder();
        
        //busqueda de publicaciones de casas en venta
        $qb->select("h")
            ->from("Publication", "p")
            ->andWhere("p.category = 'housing'")
            ->andWhere("p.reason = 'sale'");
        $this->data["title"] = "Inmobiliaria - housings for sale";
        $this->data["publications"] = $qb;
        $this->data["message"] = "No housings for sale";
        $this->return_full("home.tpl");
    }

	function showHousingForRental(){
        $qb = Model::getEM()->createQueryBuilder();
        
        //busqueda de publicaciones de casas en alquiler
        $qb->select("h")
            ->from("Publication", "p")
            ->andWhere("p.category = 'housing'")
            ->andWhere("p.reason = 'rental'");

        $this->data["title"] = "Inmobiliaria - housings for Rental";
        $this->data["publications"] = $qb;
        $this->data["message"] = "No housings for rental";
        $this->return_full("home.tpl");
    }

    function showDepartamentsForSale(){
        $qb = Model::getEM()->createQueryBuilder();
        
        //busqueda de departamentos
        $qb->select("d")
            ->from("Publication", "p")
            ->andWhere("p.category = 'departaments' ")
            ->andWhere("p.reason = 'sale'");
        $this->data["title"] = "Inmobiliaria - Departaments for sale";
        $this->data["publications"] = $qb;
        $this->data["message"] = "No departaments for sale";
        $this->return_full("home.tpl");
    }

    function showDepartamentsForRental(){
        $qb = Model::getEM()->createQueryBuilder();
        
        //busqueda de departamentos
        $qb->select("d")
            ->from("Publication", "p")
            ->andWhere("p.category = 'departaments' ")
            ->andWhere("p.reason = 'rental'");
        $this->data["title"] = "Inmobiliaria - Departaments for rental";
        $this->data["publications"] = $qb;
        $this->data["message"] = "No departaments for rental";
        $this->return_full("home.tpl");
    }

    function showFieldsForSale(){
        $qb = Model::getEM()->createQueryBuilder();
        
        //busqueda de campos
        $qb->select("d")
            ->from("Publication", "p")
            ->andWhere("p.category = 'fields' ")
            ->andWhere("p.reason = 'sale'");
        $this->data["title"] = "Inmobiliaria - fields for sale";
        $this->data["publications"] = $qb;
        $this->data["message"] = "No fields for sale";
        $this->return_full("home.tpl");
    }

    function showFieldsForRental(){
        $qb = Model::getEM()->createQueryBuilder();
        
        //busqueda de campos
        $qb->select("d")
            ->from("Publication", "p")
            ->andWhere("p.category = 'fields' ")
            ->andWhere("p.reason = 'rental'");
        $this->data["title"] = "Inmobiliaria - fields for Rental";
        $this->data["publications"] = $qb;
        $this->data["message"] = "No fields for rental";
        $this->return_full("home.tpl");
    }

    function search($housing,$departaments,$fields,$sale,$rental,$lowestPrice,$higherPrice){
         $qb = Model::getEM()->createQueryBuilder();
        //obtengo las publicaciones comprendidas entre los precios minimos y maximos
        $qb->select("b")
            ->from("Publication", "p")
            ->andWhere(":hPrice <= b.price")
            ->andWhere("b.price <= :lPrice");
        //seteo los precios pasados por parametro
        $qb->setParameter('lPrice', $lowestPrice);
        $qb->setParameter('hPrice', $higherPrice);
        //determino las categorias incluidas en la consulta
        if($housing and $departaments and $fields){
            $qb->expr()->orX(
                $qb->expr()->where("p.category = 'housing'"),
                $qb->expr()->orX(
                    $qb->expr()->andWhere("p.category = 'departaments'"),
                    $qb->expr()->andWhere("p.category = 'fields'")
                )
           );
        }elseif ($housing and $departaments) {
            $qb->expr()->orX(
                $qb->expr()->where("p.category = 'housing'"),
                $qb->expr()->andWhere("p.category = 'departaments'")
            );
        }elseif ($housing and $fields) {
            $qb->expr()->orX(
                $qb->expr()->where("p.category = 'housing'"),
                $qb->expr()->andWhere("p.category = 'fields'")
            );
        }elseif ($departaments and $fields) {
            $qb->expr()->orX(
                $qb->expr()->where("p.category = 'departaments'"),
                $qb->expr()->andWhere("p.category = 'fields'")
            );
        }elseif ($housing) {
            $qb->expr()->where("p.category = 'housing'");
        }elseif ($departaments) {
            $qb->expr()->where("p.category = 'departaments'");
        }elseif ($fields) {
            $qb->expr()->where("p.category = 'fields'");
        }
        if($sale and !$rental)
        	$qb->andWhere("p.reason = 'sale'");
        if(!$sale and $rental)
        	$qb->andWhere("p.reason = 'rental'");

        $this->data["title"] = "Inmobiliaria - Search";
        $this->data["publications"] = $qb;
        $this->data["message"] = "No results found";
        $this->return_full("home.tpl");
    }

    function searchTo(){
    	$this->return_html("search.tpl");
    }
}

?>