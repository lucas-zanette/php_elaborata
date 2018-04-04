<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->   
<?php
// put your code here

@session_start();

$sTitle = "CURSO PHP - 10558";

$iLoad = 0;
if (isset($_GET["load"])) {  //isset = está definido
    $iLoad = $_GET["load"];
}

$bLogged = false;
if (isset($_SESSION["bLogged"]) && $_SESSION["bLogged"]) {
    $bLogged = true;
}

$sStatus = "";
if (isset($_GET["msg"])) {
    $sStatus = $_GET["msg"];
}

require_once "menus.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>        
        <link rel="stylesheet"
              type="text/css"
              href="css/style.css" />

        <link rel="stylesheet"
              type="text/css"
              href="css/menus.css" />

        <link rel="stylesheet"
              type="text/css"
              href="css/forms.css" />

        <?php
        // put your code here
        ?>
    </head>
    <body>
        <div id="divWrapper">
            <header id="hdrHeader">                
            </header>

            <nav id="navMainMenu">
                <?php
                echo buildMainMenu();
                ?>
            </nav>      

            <nav id="navLeftMenu">
                <?php
                echo buildLeftMenu();
                ?>
            </nav>

            <br />  
            <section id="sctWorkspace"> 
                <div id="divStatus"
                     style="background-color:#45a049">
                    <span><?php echo $sStatus ?></span>               
                </div>

                <?php
                if ($iLoad === "1") {
                    require_once "forms/form_login.php";
                } elseif ($iLoad === "2") {
                    require_once "forms/form_signup.php";
                } elseif ($iLoad === "3") {
                    require_once "forms/form_contact.php";
                }
                ?>        
            </section>

            <footer id="ftrFooter">                
            </footer>

        </div>
    </body>
</html>
