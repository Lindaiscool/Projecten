
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="css/welkom1.css">
            <title>Welkom</title>
            <style>
                .welkom{
                    color: green;
                    font-family:'Courier New', Courier, monospace;
                    font-size: 1.47em;
                }
                .naam{
                    font-family:'Courier New', Courier, monospace;
                    font-size: 1.50em;
                }
                .verder{
                    font-family:'Courier New', Courier, monospace;
                }
                .uitloggen{
                    font-family:'Courier New', Courier, monospace;
                }
                input{
                    font-family:'Courier New', Courier, monospace;
                    font-size: 25px;
                    float: left;
                }
            </style>
        </head>
        <body> 
        </body>
    </html>
<?php
    session_start();
        $mijnSession = session_id();
            if(isset($_SESSION['ID']) && $_SESSION['ID'] ===$mijnSession){
                $gebruiker= $_SESSION['NAME'];
                echo "
                <form action='' method= 'post'>
                    <p class='welkom'>Welkom</p> 
                    <p class='naam'>$gebruiker</p> 
                    <p class='uitloggen'>
                        <a href='loguit.php'>
                            <input type='button' name='terug' value='<- Uitloggen' />
                        </a> </p>
                        <p class='posten'>
                            <a href='blog.html'> 
                            <input type='button' name='posten' value='<- post direct een blog ->' /> </a> </p>
                            <p class='verder'>
                        <a href='blog.php'>
                            <input type='button' name='verder_gaan' value='Verder gaan ->' />
                        </a> </p>

                </form> " 
               ;
            } else{
                echo "<br> Je moet eerst inloggen.<br>";
            }
            ?>