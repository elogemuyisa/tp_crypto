<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vigenerer</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
</head>
<body>
<?php include("menu.php")?>
<div class="row">
          <div class="col-xl-12 mt-3">
                            <form action="traitement_vigenere.php" method="POST" class="shadow p-3">
                                <h4 class="text-center">Vigenere</h4>
                                <div class="row">
                                     <div class="col-xl-12 col-lg-12 col-md-12  col-sm-12 p-3">
                                        <label for="">Choisir l'operation<span class="text-danger">*</span></label>
                                        <select class="form-control" name="operation" id="">
                                          <option value="1">Chiffrer</option>
                                          <option value="2">Dechiffrer</option>
                                        </select>
                                        
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12  col-sm-12 p-3">
                                        <label for="">Message<span class="text-danger">*</span></label>
                                        <input required type="text" name="message" class="form-control" placeholder="Entrez le nessage"
                                        >
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12  col-sm-12 p-3">
                                        <label for="">Cle<span class="text-danger">*</span></label>
                                        <input required type="text" name="cle" class="form-control" placeholder="Entrez la cle"
                                        >
                                    </div>

                                   

                                    <div class="col-xl-12 col-lg-12 col-md-12 mt-10 col-sm-12 p-3 aling-center">
                                        <input type="submit" name="chiffrer" class="btn btn-outline-primary w-100" value="Chiffrer">
                                    </div>
                                  
                                </div>
                            </form>

                            <div class="col-xl-12 col-lg-12 col-md-12  col-sm-12 p-3">
                                        <label for="">Resultat<span class="text-danger">*</span></label>
                                        <?php if(isset($_GET['resultat']) ){?>
                                            <input required type="text" name="resultat" class="form-control" value=<?=$_GET['resultat']?>>
                                        <?php }?>
                                    </div>
                        </div>
            
          </div>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>          
</body>
</html>