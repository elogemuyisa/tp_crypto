<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>admin</title>
  <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css"> 

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          </div>

          <div class="row">
            <div class="col-xl-12 mt-3">
              <form action="traitement_question2.php" method="POST" class="shadow p-3">
                <h4 class="text-center">Chiffrement/Déchiffrement AES</h4>
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-3">
                    <label for="operation">Choisir l'opération<span class="text-danger">*</span></label>
                    <select class="form-control" name="operation" id="operation" required>
                      <option value="encrypt">Chiffrer</option>
                      <option value="decrypt">Déchiffrer</option>
                    </select>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-3">
                    <label for="mode">Choisir le mode AES<span class="text-danger">*</span></label>
                    <select class="form-control" name="mode" id="mode" required>
                      <option value="ecb">ECB</option>
                      <option value="cbc">CBC</option>
                      <option value="ctr">CTR</option>
                      <option value="ofb">OFB</option>
                      <option value="cfb">CFB</option>
                    </select>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-3">
                    <label for="key">Clé de chiffrement<span class="text-danger">*</span></label>
                    <input required type="text" id="key" name="key" class="form-control" placeholder="Entrez la clé de chiffrement">
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-3">
                    <label for="text">Texte<span class="text-danger">*</span></label>
                    <input required type="text" id="text" name="text" class="form-control" placeholder="Entrez le texte">
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 mt-10 col-sm-12 p-3 aling-center">
                    <input type="submit" class="btn btn-success w-100" value="Soumettre">
                  </div>
                </div>
              </form>

              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-3">
                <label for="result">Résultat<span class="text-danger">*</span></label>
                <?php
                if (isset($_GET['result'])) {
                  $result = json_decode(urldecode($_GET['result']), true);
                  echo "<input type='text' id='result' name='result' class='form-control' value='{$result['text']}' readonly>";
                }
                ?>
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