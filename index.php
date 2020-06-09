<?php

  // Include header
  include 'inc/header.php';

  // Current page
  $currentPage = "index";

?>
  	
    
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


<!-- Include footer -->
<?php include 'inc/footer.php';?>
    