<?php 
session_start();
//include 'language/english.php';
//include 'language/german.php';
$language=array('english','german');
        if(isset($_GET['lang'])=== true && in_array($_GET['lang'], $language)=== true)
        {
          
            $_SESSION['lang']=$_GET['lang'];
        }
      
        else if(isset($_SESSION['lang'])===false)
            {
            
            $_SESSION['lang']='english';
        }
        include'language/'.$_SESSION['lang'].'.php';
          //print_r($_SESSION);
?>