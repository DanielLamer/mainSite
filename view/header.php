<?php
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (!isset($viewTitle)) $viewTitle = "Lamer Daniel - Site";
    $profilLink = "";
    $logoutIcon = "";
    $inventoryLink = "";
    $shoppingCartLink = "";
    $adminLink = "";
    $homeLink = "";
    $registerLink = '<a href="inscription.php">S\'enregistrer</a>';
    $loginLink = '<a href="login.php">Login</a>';

    
    $viewHead = <<< HTML
<div class='topnav'>


$loginLink
$registerLink
$logoutIcon
$shoppingCartLink
$inventoryLink
$profilLink
$adminLink
$homeLink


</div>
HTML;
?>