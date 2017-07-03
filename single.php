<?php include("header.php");?>

<?php
$csv = array_map('str_getcsv', file('data/datos.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
$la_url = $_GET['url'];
?>

<header class="intro-header" style="background-image: url('http://lorempixel.com/1320/720/abstract/')">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <div class="site-heading">
                <p align="justify">
                  <h1><FONT color="white"><?php echo($csv[$la_url]["titulo"])?></font></h1>
                  <p align="justify">
                  <hr class="small">
                  <span class="subheading"><FONT color="white"><?php echo($csv[$la_url]["apa"]);?></font></span>
              </div>
          </div>
      </div>
  </div>
</header>



<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="site-heading">
                <h1>Abstract</h1>

            </div>
        </div>
    </div>
</div>
</header>


    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">


                  <?php echo($csv[$la_url]["abstract"])?>



                  <p><a href="<?php echo $csv[$la_url]['vinculo'];?>">Chequear este articulo en línea</a></p>
              </div>
            </div>
        </div>
    </article>

    <hr>

    <?php include("footer.php");?>
