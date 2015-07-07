<?php
/**
 * Created by PhpStorm.
 * User: pradip
 * Date: 18-06-2015
 * Time: 00:31
 */

if(!isset($_SESSION)){

    session_start();
    echo $_SESSION["search_shop"];
    $_SESSION["search_shop"]="test";
    $likeVal=$_SESSION["search_shop"] ;
    echo $likeVal;
   $_SESSION["search_shop"]="pradip";
    unset ($_SESSION["search_shop"]);
    $_SESSION["search_shop"]="blank";

}

?>