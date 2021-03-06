<?php
    include 'view/header.php';
    
    if (!isset($pageTitle)) $pageTitle = "LamerDaniel - Site";
    if (!isset($viewHead)) $viewHead = "";
    if (!isset($viewStyle)) $viewStyle ="";
    if (!isset($viewFooter)) $viewFooter = "";
    if (!isset($viewContent)) $viewContent = "";
    
    $stylesBundle = "";
    if (file_exists("view/stylesBundle.html"))
        $stylesBundle = file_get_contents("view/stylesBundle.html");
    $scriptsBundle = "";
    if (file_exists("view/scriptsBundle.html"))
        $scriptsBundle = file_get_contents("view/scriptsBundle.html");

    $localScript = "";
    if (!isset($viewScript)) {
        $viewScript = "";
    } else {
        if (file_exists($viewScript))
            $localScript =  "<script>".file_get_contents($viewScript)."</script>";
    }
    echo <<< HTML
    <!DOCTYPE html>
    <html>
    <header>
        <title>$pageTitle</title>
        $stylesBundle
        $viewStyle
    </header>
    <body>
        $viewHead
        $viewContent
        $viewFooter	
        $scriptsBundle
        $localScript
    </body>
    </html>
HTML;
?>