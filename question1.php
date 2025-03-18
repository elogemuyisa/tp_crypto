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
    
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          </div>

          <div class="row">
            <div class="col-xl-12 mt-3">
              <form action="traitement_question1.php" method="POST" class="shadow p-3">
                <h4 class="text-center">Déchiffrement César</h4>
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-3">
                    <label for="ciphertext">Texte chiffré<span class="text-danger">*</span></label>
                    <input required type="text" id="ciphertext" name="ciphertext" class="form-control" placeholder="Entrez le texte chiffré">
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 mt-10 col-sm-12 p-3 aling-center">
                    <input type="submit" class="btn btn-primary w-100" value="Déchiffrer">
                  </div>
                </div>
              </form>

              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-3">
                <label for="">Résultats<span class="text-danger">*</span></label>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>cle</th>
                      <th>Texte déchiffré</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (isset($_GET['results'])) {
                      $results = json_decode(urldecode($_GET['results']), true);
                      foreach ($results as $result) {
                        echo "<tr><td>{$result['cle']}</td><td>{$result['text']}</td></tr>";
                      }
                    }
                    ?>
                  </tbody>
                </table>
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