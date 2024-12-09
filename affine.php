<?php
if(isset($_POST["chiffrer"])) 
{
    $message=htmlspecialchars($_POST['message']);
    $cle1=htmlspecialchars($_POST['cle1']);
    $cle2=htmlspecialchars($_POST['cle2']);
    $alphabet=range('A', 'Z');
    $resultat="";

    foreach(str_split($message) as $mot) {
        $lettre=strtoupper($mot);
        $position= array_search($lettre, $alphabet);
        $position_chiffrer=(($cle1*$position)+$cle2)%26;
        $resultat.=$alphabet[$position_chiffrer];
    }
    echo $resultat;
    header("location:affine.php?resultat=$resultat");
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
                <label for="" class="form-label">Clé1</label>
                <input type="number"
                    class="form-control" name="cle1" id="" aria-describedby="helpId" placeholder="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Clé2</label>
                <input type="number"
                    class="form-control" name="cle2" id="" aria-describedby="helpId" placeholder="" required>
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