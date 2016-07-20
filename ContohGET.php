<?php
/**
 * Created by PhpStorm.
 * User: putuguna
 * Date: 7/19/2016
 * Time: 4:32 PM
 */

class ContohGET {
    function getName(){
        $name = $_GET['name'];
        echo "Nama saya adalah : " . $name;
    }
}
$get = new ContohGET();
$get->getName();