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

<div class="container">
<a class="btn btn-info" id="bt" href="index.php">Retour</a>
<center>
<h1>Liste des admins et Non admins</h1>
<form method="post" class="form-horizontal text-center" style="margin-bottom:2%;">            
        <input type="submit" name="act2" value="nombre athlete par discipline" class="btn btn-md btn-info">
        </form>
</center>
</div>

</body>
</html>


<?php
      include('traitment.php');     
            //triatement d'afficher list des admins
            
            if(!empty($_POST["act2"]))
            {
                $cur3= lst_adm();      
                $nbr3=mysqli_num_rows($cur3); 
                 if($nbr3!=0){
                echo "<table class='table table-bordered'>";
              echo   "<tr>";
               while ($finfo = mysqli_fetch_field($cur3)) {
             echo "<th>&nbsp;{$finfo->name}</th>";
                    }
                     echo "<th>Admin/Redouble</th>";
                echo  "</tr>";
  
            while ($row = mysqli_fetch_row($cur3))
                    {
                     echo '<tr>';
                      
                       echo "  <td>$row[0]</td>";
                      echo "  <td>$row[1]</td> ";
                       echo "  <td>$row[2]</td>";
                        echo "  <td>$row[3]</td>";
                         echo "  <td>$row[4]</td>";
                          echo "  <td>$row[5]</td>";
                        if($row[5]>=10)
                        {
                             echo "  <td>Admin</td>";
                        }
                        else
                        {
                             echo "<td>Redoubler</td>";
                        }
                      echo ' </tr>';
                                  
                    }
            }
                     else
                    {
                     echo '</table>';
                            echo "<p class='alert alert-info'> <strong>list vide !!!</strong></p>";

                    }
                    
            }
   
        ?>