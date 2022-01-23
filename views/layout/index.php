<?php
include_once 'header.php';
include_once 'menu.php';
if (!isset($_GET['view']) || $_GET['view'] == 'home'){
    include $c['base']['path'].'views/home.php';
} else{
    include $c['base']['path'].'views/'.$_GET['view'].'.php';
}


include_once 'footer.php';