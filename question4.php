<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Affichage du Message Base64</title>
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
                <h4 class="text-center">Message Clair (Base64)</h4>
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-3">
                    <label for="message">Message décodé <span class="text-danger">:</span></label>
                    <?php

                        $encodedMessage = "UkVTVEVSIENIQUNIySwgSUxTIE9OVCBEyUNPVVZFUlQgVk9UUkUgSVA=";

                    
                        $decodedMessage = mb_convert_encoding(base64_decode($encodedMessage), "UTF-8", "ISO-8859-1");


                        echo "<p> " . htmlspecialchars($decodedMessage, ENT_QUOTES, 'UTF-8') . "</p>";
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