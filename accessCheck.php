<?php 
    include_once 'sessionTimeOut.php';
    session_start();
    set_Session_Timeout(1800,'index.php');

    function illegalAccessRedirection() {
        $_SESSION['illegalAccessOccured'] = true;
        unset($_SESSION["loggedUser"]);
        redirect('index.php');
    }

    if (!$_SESSION["validUser"]) {
        illegalAccessRedirection();
    }
 
function redirect($url) {
    header('location:'.$url); exit();
}
?>