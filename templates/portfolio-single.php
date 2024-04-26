<?php
include('partials/header.php');
?> 
        <main>
             
              <section class="container">
              <?php
                $portfolio_object = new Portfolio();
                $portfolio_single = $portfolio_object->select_single();

                for ($i=0;$i<count($portfolio);$i++){
                  $temp_i = $i+1;
                  if($temp_i%4==1){
                      echo '<div class="row">';
                      echo '<div class="col-25 portfolio text-white text-center" style = "background-image: url(\''.$portfolio[$i]->image.'\');"'.'>';
                      echo '<a href="E:\Xampp\htdocs\sj_7_2024\templates\portfolio-single.php?id'.$portfolio[$i]->id.'">'portfolio[$i]->name.</a>';
                      echo '</div>';

                  }else{
                    echo '<div class="col-25 portfolio text-white text-center" style = "background-image: url(\''.$portfolio[$i]->image.'\');"'.'>';
                    echo '<a href="">'.$portfolio[$i]->name.'</a>';
                    echo '</div>';
                    echo'</div>';
                  }
                }
                ?>

               
            </section>   

        </main>
<?php
  include_once('partials/footer.php')
?> 