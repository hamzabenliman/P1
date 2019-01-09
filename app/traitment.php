<?php
$host='localhost';
$login='root';
$pass='';
$bd='app';
//function ajouter
function ajouter($nom,$prenom,$daten,$ville,$photo){
    global $host,$login,$pass,$bd;

    $cn=mysqli_connect($host,$login,$pass,$bd);
    $req="insert into athlete(noma,prenoma,datea,villea,photo) values('$nom','$prenom','$daten','$ville','$photo')";
    $nb=mysqli_query($cn,$req) or die(mysqli_error($cn));
    mysqli_close($cn);
    return $nb;
}
//note
function note($note){
    global $host,$login,$pass,$bd;
    $cn=mysqli_connect($host,$login,$pass,$bd);
    $re="INSERT into notes(note) values ($note) ";
    $nb = mysqli_query($cn,$re);
    mysqli_close($cn);
    return $nb;
}
//liste
/*function list(){
    global $host,$login,$pass,$bd;
    $cn=mysqli_connect($host,$login,$pass,$bd);
    $re="SELECT * from athlete";
    $nb = mysqli_query($cn,$re) or die(mysqli_error($cn));
    mysqli_close($cn);
    return $nb;
}*/
//function image file
function img(){
    global $host,$login,$pass,$bd;

    $cn=mysqli_connect($host,$login,$pass,$bd);

    $nf="images/".$_FILES['pho']['name'];
    $tmp_file=$_FILES['pho']['tmp_name'];
    $bol = move_uploaded_file($tmp_file,$nf);
    
}

//function mise a joure
function mise_a_jour($num,$nom,$prenom,$daten,$ville,$photo){
    global $host,$login,$pass,$bd;
    $cn=mysqli_connect($host,$login,$pass,$bd);
    $req="UPDATE athlete SET noma='$nom',prenoma='$prenom',datea='$daten',villea='$ville',photo='$photo' WHERE numa=$num";
    
    $nb=mysqli_query($cn,$req) or die(mysqli_error($cn));
    //$row=mysqli_num_rows($nb);

    mysqli_close($cn);
    return $nb;
}
//rechercher
function recherchev($ville_r){
    
    global $host,$login,$pass,$bd;

    $cn=mysqli_connect($host,$login,$pass,$bd);
    $reqs = "SELECT * from athlete where villea='$ville_r'";
    $nbr = mysqli_query($cn,$reqs) or die(mysqli_error($cn));
        mysqli_close($cn);
        return $nbr;
}
//nombre des al

function cal(){

    global $host,$login,$pass,$bd;

    $cn=mysqli_connect($host,$login,$pass,$bd);

    $reqc = "SELECT d.nomd as nom_discipline , count(a.numa) as Nombre_athlete from athlete a , discipline d , notes n where n.numa=a.numa and n.numd = d.numd group by(d.nomd)";

    $nbc = mysqli_query($cn,$reqc);
    mysqli_close($cn);
    return $nbc;
}

// list admin et non admin

function lst_adm(){
    global $host,$login,$pass,$bd;
    $cn=mysqli_connect($host,$login,$pass,$bd);
    $reqc="SELECT a.numa as Nombre_athlete , a.noma as Nom , a.prenoma as Prenom , a.datea as Date_Naissance , a.villea as Ville , ROUND(avg(n.note),2) as Moyenne from notes n,athlete a where n.numa=a.numa group by (n.numa)";

    $nb = mysqli_query($cn,$reqc);
    mysqli_close($cn);
    return $nb;
}


?>