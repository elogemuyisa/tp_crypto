<?php
if(isset($_POST["chiffrer"])) 
{
    $message=htmlspecialchars($_POST['message']);
    $cle=htmlspecialchars($_POST['cle']);
    $alphabet=range('A', 'Z');
    $resultat="";

    foreach(str_split($message) as $mot) {
        $lettre=strtoupper($mot);
        $position= array_search($lettre, $alphabet);
        $position_chiffrer=($position+$cle)%26;
        $resultat.=$alphabet[$position_chiffrer];
    }
    echo $resultat;
    header("location:cesar1.php?resultat=$resultat");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css"> 
</head>
<?php include("menu.php")?>
<body>
    <div class="col-6">
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Message</label>
                <input type="text"
                    class="form-control" name="message" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Clé</label>
                <input type="number"
                    class="form-control" name="cle" id="" aria-describedby="helpId" placeholder="" required>
            </div>
            <div class="mb-3">
              
              <input type="submit"
                class="btn btn-outline-primary" name="chiffrer" id="" value="Chiffrer">
            </div>
        </form>
    </div>
    
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>