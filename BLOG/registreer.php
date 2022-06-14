<?php
    if(isset($_POST["submit"])) {
        $fotoNaam = basename($_FILES["foto"]["name"]);
        global $uploadsMap;
        function upload(){
            global $uploadsMap;
            $uploadsMap = "uploads/";
            $uploadsMap = $uploadsMap . basename($_FILES["foto"]["name"]);
            $fototype = pathinfo($uploadsMap,PATHINFO_EXTENSION);
            if (file_exists($uploadsMap)) {
                echo "Deze foto bestaat al.";
                return false;
            }
            if ($_FILES["foto"]["size"] > 500000) {
                echo "Deze foto is te groot.";
                return false; 
            }
            if ($fototype != "jpg" &&
            $fototype != "png" &&
            $fototype != "jpeg" &&
            $fototype != "gif" ) {
                echo "Foto moet jpg, jpeg, png of gif zijn.";
                return false;
            }
            return true;
        }
        try{
            if (upload()) {
                if (move_uploaded_file($_FILES["foto"]["tmp_name"], 
                $uploadsMap)) {
                    echo "Foto is geupload.";
                    $bestand=fopen("gebruiker.txt","ab");
                    if(!$bestand)
                    {
                        echo "Kon geen bestand openen!";
                    }
                    $naam = htmlspecialchars($_POST['naam']);
                    $email = htmlspecialchars($_POST['e-mail']);
                    $wachtwoord = htmlspecialchars($_POST['password']);
                    $profielFoto = $fotoNaam;
                    $profiel =
                    $naam . "*" .
                    $email . "*" .
                    $wachtwoord . "*" .
                    $profielFoto."\n";
                    fwrite($bestand,$profiel,strlen($profiel));
                    if(fclose($bestand)) {
                        echo "Account is aangemaakt.";
                    }else {
                        echo "Kon bestand niet afsluiten.";
                    }
                } else {
                    echo "Foto niet ge-upload.";
                }
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
    }
    ?>
    <a href="registreer.html"><input type="button"
        name="terug" value=" Terug " />
    </a>