<?php include("header.php");?>

<header class="intro-header" style="background-image: url('http://lorempixel.com/1320/720/abstract/')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Análisis cromático en el cine de animación:</h1>
                    <hr class="small">
                    <span class="subheading">el color como medio autoral de significación y emocionalidad.
</span>
                </div>
            </div>
        </div>
    </div>
</header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

              <?php
              $csv = array_map('str_getcsv', file('data/datos.csv'));
              array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
              array_shift($csv);
              ?>

              <?php for($a = 0; $a < $total = count($csv); $a++){?>
              <!--esto es lo que repetiré-->
              <div class="col-lg-4"><img src="<?php echo $csv[$a]['img'];?>" class="img-responsive"></div>

              <div class="col-lg-8">
              <div class="post-preview">

                      <h2 class="post-title"><?php echo($csv[$a]["titulo"])?></h2>

                       <p><?php echo($csv[$a]["index"])?></p>

                       <p class="post-meta">Tags: <?php echo($csv[$a]["tags"]);?></p>
                       <h5><a href="single.php?url=<?php print($a)?>">Leer más sobre este articulo</a></h5>
                       <hr>
              </div>


              </div>
              <?php };?>
              <hr>


          </div>
      </div>
  </div>

 <hr>

 <?php include('footer.php') ?>
