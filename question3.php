<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Affichage du Message</title>
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
                <h4 class="text-center">Message Clair</h4>
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-3">
                    <label for="message">Message<span class="text-danger">*</span></label>
                    <?php
                    $code_ascci = [78, 79, 85, 83, 32, 89, 32, 65, 76, 76, 79, 78, 83, 32, 68, 69, 77, 65, 73, 78, 32, 77, 65, 84, 73, 78];
                    $message = '';
                    foreach ($code_ascci as $value) {
                      $message .= chr($value);
                    }
                    echo "<input type='text' id='message' name='message' class='form-control' value='{$message}' readonly>";
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