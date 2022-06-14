<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <script src="https://code.jquery.com/jquery-3.5.1.js">
            $(document).ready(function() {
            $('#example').DataTable();
        } );
            </script> 
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
            </script>
                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>
                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
                <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
         <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
         
         <link rel="stylesheet" href="schiphol.css">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
              <a class="navbar-brand" href="schipholmeldpunt.html">
                    <img height="10%" width="10%" src="schiphollogo.png" alt="x">
                  </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="schipholmeldpunt.html">Home
                          <span class="sr-only">(current)</span>
                        </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-active" href="klachtformulier.php">Klacht indienen</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="klachtlijst.php">Klachtenlijst</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">about</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

    <main>
        <form id="form" name="formulier" action="" method="post">
            <input required type="text" id="naam" name="naam" placeholder="naam">
            <br>
            <input required type="text" id="email" name="email" placeholder="email">
            <br>
            <input required type="text" id="mobiel" name="mobiel" placeholder="mobiel">
            <br>
            <input required type="text" id="postcode" name="postcode" placeholder="postcode">
            <br>
            <label for="man">Man </label> <br>
            <input type="radio" id="gsl" name="man"><br>
            <label for="vrouw">Vrouw </label> <br>
            <input type="radio" id="gsl" name="vrouw">
            <br>
            <p>Geboortedatum</p>
            <input required type="date" id="datum" name="datum">
            <br> <br>
            <select required name="soort" id="soort">
                <option value="0">Kies een klachtsoort</option>
                <option value="geluid">geluid</option>
                <option value="milieu">milieu</option>
                <option value="veiligheid">veiligheid</option>
            </select>
            <br>
            <p>Wat is uw klacht?</p>
            <textarea form="form" name="klacht" row="5"></textarea> <br>
            <input type="submit" id="verzend" name="verzend" value="Verzend">
        </form>
    </main>
</body>

</html>
<?php

$user = "root";
$pwd = "";
$host = "localhost";
$dbname = "schiphol";
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
} catch (PDOException $e) {
    echo "Geen verbinding" . $e->getMessage();
}
if (isset($_POST["verzend"])) {
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $mobiel = $_POST["mobiel"];
    $postcode = $_POST["postcode"];
   // $geslacht = $_POST["man"];
    $gsl =$_POST["vrouw"];
    $datum = $_POST["datum"];
    $soort = $_POST["soort"];
    $klacht = $_POST["klacht"];
    if(isset($_POST["man"])){
        $gsl = "man";
    }else{
        $gsl = "vrw";
    }
    $sql = "INSERT INTO gebruiker (id,naam,postcode,geslacht,geboortedatum,email) VALUES (null,?,?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->execute(array($naam,$postcode,$gsl,$datum,$email));
    $id = $db->lastInsertId();
    $sql = "INSERT INTO klacht (id, id_gebruiker,klachtsoort,postcode,bericht) VALUES (null,$id,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->execute(array($soort,$postcode,$klacht));

echo "verzonden";

}
?>