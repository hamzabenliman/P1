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
table{
    color:white;
}
#bt{
    width:80px !important;
    height:40px !important;
}
#img{
    border-radius: 80px;
}
    </style>
</head>
<body style="background: url('image/h.jpg');">
<a class="btn btn-info" id="bt" href="index.php">Retour</a>
<br/>
     <div class="container">
     <?php
     
     $host='localhost';
     $login='root';
     $pass='';
     $bd='app';

     
$link=mysqli_connect($host,$login,$pass,$bd);

if($link===false){
	die("ERROR : no connect". mysqli_error());
}
	$sql="select * from athlete";
	if($result = mysqli_query($link,$sql)){
		if(mysqli_num_rows($result)>0){
            echo "<table class='table table-bordered'>";
            echo "<thead class=' text-primary'>";
			echo "<tr scope='row'>";
			echo "<th scope='col'>Num</th>";
			echo "<th>Nom</th>";
			echo "<th>Prenom</th>";
			echo "<th>date Naissance</th>";
			echo "<th>Image</th>";
            echo "</tr>";
            echo "</thead>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>".$row['numa']."</td>";
				echo "<td>".$row['noma']."</td>";
				echo "<td>".$row['prenoma']."</td>";
				
				echo "<td>".$row['datea']."</td>";
				
				echo '<td> <img id="img" src="images/'.$row['photo'].'" whidth=50 height=50 ></td>';
				echo "</tr>";
			}
			echo "</table>";
			mysqli_free_result($result);
		}else{
			echo "No records";
		}
	}else{
		echo "ERROR : could not ..... $sql".mysqli_error($link);
	}
        mysqli_close($link);
        ?>
        </div>
</body>
</html>

