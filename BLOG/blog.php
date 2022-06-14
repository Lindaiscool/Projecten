<?php
    session_start();
    if(!$_SESSION['USER']){
        echo "<script> 
        alert('U bent niet ingelogd.');
        location.href='login.php';
        </script>";}
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel='stylesheet' href="css/style.css">
            <style>
                #blogpost {
                    padding-left: 350px;
                    margin-right:40%;
                }
                .L{
                    background-color: rgb(41,41,41);
                    color: white;
                    position:relative;
                    border:none;
                    text-align:center;
                    margin: 4% 0%;
                    margin-left: -1%;
                    margin-top: -1%;
                    padding: 1% 10%;
                    justify-content: center;
                }
                input[type='button']{
                    position: relative;
                    background-color:  rgba(255, 123, 0, 0.884);;
                    border:none;
                    margin-top: 10%;
                    margin-bottom: -20%;
                    padding: 0.8% 20%;
                }
           
                #blogpost{
                    color: black;
                    font-style:oblique;
                    border: 1px solid black;
                    background-color:  rgba(255, 123, 0, 0.884);
                    margin: 0 auto;
                    width: 50%;
                }
                body{
                    background-position: center;
                    background-repeat: no-repeat;
                    background-attachment:fixed;
                    background-size: 100%;
                    width: 100%;
                    border:none;

                }
           </style>
            <title>Document</title>
        </head>
        <body>
            <form class='L'>
            <a href=blog.html><input type='button' name="verder" value="Post een blog"></a>
            <a href=loguit.php><input type="button" name="verder" value="Uitloggen"></a>
            </form>
        </body>
    </html>
    <?php
               $best=fopen("gebruiker.txt", "r");
            if(isset($_POST['submit'])){
                if(!$_SESSION['USER']){
                    echo "<script>alert('U bent niet ingelogd.');
                        location.href='login.php';</script>";
                }else{
                    $gebruikersnaam=$_SESSION['USER'];
                    $profielfoto=$_SESSION['PIC'];
                    $naamgebruik=$_SESSION['NAME'];
                    $bericht= $_POST['blog'];
                    $best=fopen('blog.txt','a');
                    $bericht= 
                        "<div id='blogpost'>
                            <div id='naam'>
                                <img src='$profielfoto' alt='' height='25px' width='25px'></img><br>
                                <p>$naamgebruik</p>
                            </div>
                            <div id='tekst'>" . 
                                htmlspecialchars($_POST['blog']) .
                            "</div>
                        </div><br>";
                        fwrite($best, $bericht);
                        if(fclose($best)){
                            echo'<script>
                            alert("Uw blog is gepost, '.$_SESSION["USER"].'");
                            location.href="blog.php";</script>';
                            unset($_POST["submit"]);
                        }
                    }
                }
                $blog_lees=fopen("blog.txt", "r");
                echo fread($blog_lees,filesize("blog.txt"));
                fclose($blog_lees);        
            ?>