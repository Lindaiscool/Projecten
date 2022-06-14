<?php
$user="root";
$pwd="";
$host="localhost";
$dbnaam="schiphol";
try{
    $database= new PDO("mysql:host=$host;dbname=$dbnaam",$user, $pwd);
}
catch(PDOException $e){
    echo $e->getMessage();
    echo"<br>verbinding niet gemaakt";
}

$query = "SELECT * FROM klacht WHERE 1";
$klacht = $database ->prepare($query);
try{
    $klacht->execute(array());
    $klacht->setFetchMode(PDO::FETCH_ASSOC);

}
catch (PDOException $e) {
    echo "<script> alert ('geen klachten beschikbaar.');<script/>";
}
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
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

            <style>
                body{
                    background-color:blueviolet;
                }
                #klachten
                {
                    position: relative;
                    padding-top: 20%;
                    padding-left: 15%;
                }
                td{
                    width: 25%;
                }
            </style>
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
          <a class="nav-link" href="klachtformulier.php">Klacht indienen</a>
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

        </body>
<body>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <td>Datum</td>
                <td>Klachtsoort</td>
                
                <td>bericht</td>
                <td>id_gebruiker</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($klacht as $klacht){
                echo "<tr><td>".$klacht["datum"]."</td> 
                <td> <br>" .$klacht["klachtsoort"]."</td>
                <td>".$klacht["bericht"]."</td>
                <td>".$klacht["id_gebruiker"]."<td>
                </tr>";
             
            }; ?>
        </tbody>

    </table>
</body>
    </html>