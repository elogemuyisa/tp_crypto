<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Affichage du Message Binaire</title>
  <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css"> 
</head>

<body id="page-top">
  <div id="wrapper">
   
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          </div>

          <div class="row">
            <div class="col-xl-12 mt-3">
              <div class="shadow p-3">
                <h4 class="text-center">Message Clair (Binaire)</h4>
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-3">
                    <label for="message">Message décodé <span class="text-danger">:</span></label>
                    <?php
                                $message_binaire = "01000011 01000101 00100000 01010001 01010101 01001001 00100000 01000101 01010011 01010100 00100000 01010110 01010010 01000001 01001001 00101100 00100000 01010010 01001001 01000101 01001110 00100000 01001110 00100111 01000101 01010011 01010100 00100000 01000111 01000001 01010010 01000001 01001110 01010100 01001001";
                                $liste = explode(" ", $message_binaire);
                                $message = "";
                                foreach ($liste as $mess) {
                                    $message .= chr(bindec($mess));
                                }
                                echo $message;
?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->
      </div>
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>