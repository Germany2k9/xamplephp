<?php 
//recibimos desde un enlace 
if (isset($_GET)) {
    $pais= $_GET['pais'];
    setcookie("pais", $pais, time() + 60*60*24*365);
  // otra forma sin el switch solo la linea de abajo.  
//header('Location: inicio-'.$pais.'.php');

}
    switch ($pais) {
        case 'es':
            header('Location: inicio-es.php');
            break;
        case 'fr':
            header('Location: inicio-fr.php');
            break;
        case 'du':
            header('Location: inicio-du.php');
            break;
        
        default:
            header('Location: inicio-es.php');
            break;
    }


; ?>