<?php

require_once "../controllers/curl.controller.php";

class DeleteController{

	public $token;
    public $table;
    public $id;
    public $nameId;

    public function ajaxDelete(){

    	if($this->table == "admins" && base64_decode($this->id) == "1"){

			echo "no-borrar";
            return;	

    	}

    	$url = "admins?id=".base64_decode($this->id)."&nameId=".$this->nameId."&token=".$this->token."&table=admins&suffix=admin";
    	$method ="DELETE";
    	$fields = array();

        $delete= CurlController::request($url, $method, $fields);
        
    	echo $delete->status;

    }

}

if(isset($_POST["token"])){

    $Delete = new DeleteController();
    $Delete -> token = $_POST["token"];
    $Delete -> table = $_POST["table"];
    $Delete -> id = $_POST["id"];
    $Delete -> nameId = $_POST["nameId"];
    $Delete -> ajaxDelete();

}


