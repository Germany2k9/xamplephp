<?php  
if (isset($_COOKIE['pais'])) {
    
    setcookie("pais", $pais, time() -1);
    header('Location: index.php');
}
?>