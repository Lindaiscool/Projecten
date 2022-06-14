<?php
    session_start();

    if(isset($_SESSION["USER"])){
        echo "Tot ziens " .$_SESSION['USER'];
        session_destroy();
        echo'<script>
        alert("Tot Ziens '.$_SESSION["USER"].'");
        location.href="index.html";</script>';
    }else{
        echo'<script>location.href="index.html";</script>';
    }

?>