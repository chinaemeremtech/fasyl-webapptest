<?php

  // Current page
  $currentPage = "index";

  // Include system settings
  include 'site-info.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS CDN --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="customcss.css">

    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Title -->
    <title>
      <?php

        if (basename($_SERVER['PHP_SELF']) == 'index.php') {
          echo $siteBrandName ." - ".$siteTagline;
        } else {
          echo ucwords($currentPage);?> - <?php echo $siteBrandName;
        }
        
      ?>
    </title>
  </head><!-- close head -->


  <!-- Body -->
  <body class="sticky-footer">

    <!-- Navbar menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3">

      <div class="container">
        <!-- Brand or logo -->
        <a class="navbar-brand" href="index.php"><?php echo $siteBrandName;?></a>

      </div><!-- close container -->
    </nav><!-- close navbar -->
  	
    
    <!-- Main -->
    <main>

      <!-- Page content -->
      <section id="section1">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-8 offset-md-2">

            <div class="card">
              <div class="card-header">
                <h6>WebApp to count the number of vowels, consonants, words & characters</h6>
              </div><!-- close card header -->
              <div class="card-body">

                <form id="form1" method="post">
                  <!-- Input text box that can contain over 1000 characters -->
                  <div class="form-group">
                    <label for="title" class="font-weight-bold">Enter any number of characters</label>
                    <textarea class="form-control" name="1kChar" id="1kChar" rows="5" placeholder="Eg: Lorep Ipsum"></textarea>
                  </div>

                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <!-- Button vowels and consonants -->
                      <!-- Show result -->
                      <small id="countVowConsoRes" class="form-text pb-1"></small>
                      <button type="submit" name="btnVowConso" id="btnVowConso" class="btn btn-primary">Count Vowels & Consonants</button>
                    </li>

                    <li class="list-inline-item">
                      <!-- Button words -->
                      <!-- Show result -->
                      <small id="countWordRes" class="form-text pb-1"></small>
                      <button type="submit" name="btnWords" id="btnWords" class="btn btn-warning">Count Words</button>
                    </li>

                    <li class="list-inline-item">
                      <!-- Button characters -->
                      <!-- Show result -->
                      <small id="countCharRes" class="form-text pb-1"></small>
                      <button type="submit" name="btnCharacters" id="btnCharacters" class="btn btn-success">Count Characters</button>
                    </li>
                  
                  </ul><!-- close list inline -->

                </form><!-- close form -->

                <!-- Show result -->
                <div id="result" class="pt-4"></div>

              </div><!-- close card body -->
            </div><!-- close card -->

          </div><!-- close col -->
        </div><!-- close row -->
      </div><!-- close container -->
      </section><!-- close section -->
    
    </main><!-- close main -->


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pt-3">
                    
                    <p>&copy; <?php echo date('Y');?> Website by <a href="<?php echo $siteDevLink;?>" target="_blank"><?php echo $siteDev;?></a>
                    </p>

                </div><!-- close col -->
            </div><!-- close text-center -->
        </div><!-- close container -->
    </footer><!-- close footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="customjs.js"></script>

  </body>
</html>
    