<?php

class vendingMachine{

    public $price = 0;
    public $item_name;
    public $change_rem = 0;
    public $paid = 0;

    function __construct($price, $item_name, $paid){

        $this->price = $price ;
        $this->$item_name = $item_name;
        $this->$paid = $paid;

    }
    function transaction(){

        $this->$change_rem = $this->paid - $this->$price;

        echo "Here's your $item_name Change Remaining : $change_rem " ;

    }


}


?>