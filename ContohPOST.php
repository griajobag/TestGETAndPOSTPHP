<?php
/**
 * Created by PhpStorm.
 * User: putuguna
 * Date: 7/19/2016
 * Time: 4:35 PM
 */

class ContohPOST {
    function postName(){
        $name = $_POST['name'];
        echo "Nama Saya : ". $name;
    }
}
$post = new ContohPOST();
$post->postName();