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
    label,h1,table{
    color: white;
}
#bt{
    width:80px !important;
    height:40px !important;
}
    </style>
</head>
<body style="background: url('image/h.jpg');">
<a class="btn btn-info" id="bt" href="index.php">Retour</a>
<div class="container">
<center>
<h1>Nombre des athletes par discipline :</h1>
<form method="post" class="form-horizontal text-center" style="margin-bottom:2%;">            
        <input type="submit" name="act" value="nombre athlete par discipline" class="btn btn-md btn-info">
        </form>
</center>
</div>
</body>
</html>
<?php
include('traitment.php');

if(!empty($_POST["act"]))
{
   $cur4= cal();      
    $nbr4=mysqli_num_rows($cur4); 
    if($nbr4!=0){
    echo "<table class='table table-bordered'>";
  echo   "<tr>";
   while ($finfo = mysqli_fetch_field($cur4)) {
 echo "<th>&nbsp;{$finfo->name}</th>";
        }
    echo  "</tr>";



while ($row = mysqli_fetch_row($cur4))
        {
         echo '<tr>';
          
           echo "  <td>$row[0]</td>";
          echo "  <td>$row[1]</td> ";
          
        }
          echo ' </tr>';
                      
        }
        else
            {           
        echo "<p class='alert alert-info'> <strong>list vide!!!</strong></p>";            
           }
        echo '</table>';

 

}       
?>