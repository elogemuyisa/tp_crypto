<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
</head>
<body>
<?php include("menu.php")?>
    
<div class="row">
          <div class="col-xl-12 mt-3">
                            <form action="hill_post.php" method="POST" class="shadow p-3">
                                <h4 class="text-center">Hill</h4>
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
                                    <div class="col-xl-3 col-lg-3 col-md-3  col-sm-3 p-3">
                                        <label for="">Valeur de a<span class="text-danger">*</span></label>
                                        <input required type="text" name="a" class="form-control" placeholder="Entrez la valeur de a"
                                        >
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3  col-sm-3 p-3">
                                        <label for="">valeur de b<span class="text-danger">*</span></label>
                                        <input required type="text" name="b" class="form-control" placeholder="Entrez la valeur de b"
                                        >
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3  col-sm-3 p-3">
                                        <label for="">valeur de c<span class="text-danger">*</span></label>
                                        <input required type="text" name="c" class="form-control" placeholder="Entrez la valeur de c"
                                        >
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3  col-sm-3 p-3">
                                        <label for="">Valeur de d<span class="text-danger">*</span></label>
                                        <input required type="text" name="d" class="form-control" placeholder="Entrez la valeur de d"
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