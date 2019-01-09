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
h1{
    color:white;
}
input[type=file]{
    width: 300px !important;
    height: 120px;
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
                <h1>Ajouter</h1>
                <div class="forms">
            <div class="form-group">
                <form action="ajouter.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="inputText3" class="col-sm-2 col-form-label">Nom :</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nom" placeholder="Nom">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group row">
                            <label for="inputText3" class="col-sm-2 col-form-label">Prenom :</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="prenom" placeholder="Prenom">
                            </div>
                        </div>
                    <br/>
                    
                    
                    <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Date de naissence :</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" name="daten">
                            </div>
                        </div>
                    <br/>
                    <div class="form-group row">
                    <label for="inputText3" class="col-sm-2 col-form-label">Ville :</label>
                    <select class="form-control" id="select" name="ville">
                            <option value="Tanger">Tanger</option>
                            <option value="Rabat">Rabat</option>
                            <option value="Casa">Casa</option>  
                        </select>
                    </div>
                    <br/>
                    
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">image</label>
                            <div class="col-sm-10">
                            <input type="file" class="custom-file-input" name="pho" value=""/>
                            </div>
                        </div>
                    
                    <br>
                   
                    
                        <input type="submit" class="btn btn-success" value="enregistrer" name="act1" />
                        <input type="reset" class="btn btn-danger" value="annuler" />
                </form>
            </div>
        </div>
        </center>
        <?php
        include('traitment.php');

        if(!empty($_POST['act1'])){
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];  
            $daten=$_POST['daten'];
            $ville=$_POST['ville'];
            $photo=$_FILES['pho']['name'];
        ajouter($nom,$prenom,$daten,$ville,$photo);

       img();
    }
    
        ?>

    
</body>
</html>