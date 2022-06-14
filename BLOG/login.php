<?php

    $email= htmlspecialchars($_POST['e-mail']);
    $wachtwoord= htmlspecialchars($_POST['wachtwoord']);
    $bestand=fopen("gebruiker.txt","r");
    if(!$bestand)
    {
        echo "kon geen bestand openen.";
    }
    while(!feof($bestand))
    {
        $account= fgets($bestand);
        $account= explode("*", $account);
            if($account[1] == $email && $account[2] == $wachtwoord){
                session_start();
                    $_SESSION["USER"] = $email;
                    $_SESSION["STATUS"] = 1;
                    $_SESSION["ID"] = $_COOKIE["PHPSESSID"];
                    $_SESSION["PIC"] = "uploads/".$account[3];
                    $_SESSION["NAME"] = $account[0];
                    echo "
                        <script>
                        alert('U bent ingelogd als $email.');
                        location.href='welkom1.php';
                        </script>
                        ";
            }
    }
    echo "<script> alert ('Wachtwoord of gebruikersnaam ongeldig.');
    location.href='login.html';
    </script> ";
    ?>