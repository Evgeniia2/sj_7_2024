<?php
include('partials/header.php');
?>

        <main>
             <?php include('partials/banner.php'); ?>
            <section class="container">
              <?php
                $portfolio_object = new Portfolio();
                $portfolio = $portfolio_object->select_single();
                    
                if($portfolio_single) {
                  echo '<h2>'.$portfolio_single->name.'</h2>';
                  echo '<img src="'.$portfolio_single->image.'" width="600"/>';
                  echo '<br><br>';
                  echo '<p>'.$portfolio_single->text.'</p>';
              } else {
                  // If $portfolio_single is null, handle the case here (e.g., display an error message)
                  echo 'Portfolio item not found.';
              }
              ?>
              
            </section>


        </main>

<?php
    include_once('partials/footer.php')
?>