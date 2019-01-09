<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.sliphover.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="image/logo.png" />
    <style>
    label{
    color: white;
}
table,h1{
    color:white;
    text-align:center;
}
#bt{
    width:80px !important;
    height:40px !important;
}
    </style>
</head>
<body style="background: url('image/h.jpg');">
<a class="btn btn-info" id="bt" href="index.php">Retour</a>
     <center>
     <h1>Rechercher par ville</h1>
        <div class="container">
        <form action="rechercher.php" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
        
                            
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="ville" placeholder="Prenom">
                            </div>
                            <br/><br/>
                            
                            <input type="submit" class="btn btn-primary btn-round" value="recherche" name="action1" />
                            
                        </div>
                        </form>

        </div>
        </center>
</body>
</html>
<?php
include('traitment.php');
if (!empty ($_POST['action1']))
                {
                $a=$_POST['ville'];
                
              $c= recherchev($a);
               
          echo "<table class='table table-bordered' border='2'>";
          echo "<tr>";

          $cole = mysqli_fetch_fields($c);
              foreach ($cole as $value) {
                  echo "<th> $value->name</th>";
            
          } 
          
          
          echo "</tr>";
          
          $nbr = mysqli_num_fields($c);  
     
           while ($row = mysqli_fetch_row($c)){
               echo "<tr>";  
               for ($i = 0; $i <$nbr; $i++) {
                   echo "<td>$row[$i]</td>";
        
               }
               echo "</tr>"; 
 
           }
          echo "</table>"; 
    
      }
 else {
          echo ' vide';
              
                }
            

?>