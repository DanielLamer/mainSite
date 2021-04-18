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
    <div class="dropdown">
        <button class="dropbtn">About Me</button>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Realisations</button>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Genius</button>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>
</div>
HTML;
?>