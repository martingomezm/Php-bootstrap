<!DOCTYPE html>
<html lang="es">
<?php

$title="Artículos
";
$description="el color como medio autoral de significación y emocionalidad.
";
$img = "http://lorempixel.com/1320/720/abstract/";
$author="Martín Gómez";
?>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Search Engine -->
<title><?php echo $title;?></title>
<meta name="description" content="<?php echo $description;?>">
<meta name="image" content="<?php echo $image;?>">
<meta name="author" content="<?php echo $author;?>">
<!-- Schema.org for Google -->
<meta itemprop="name" content="<?php echo $title;?>">
<meta itemprop="description" content="<?php echo $description;?>">
<meta itemprop="image" content="<?php echo $image;?>">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo $title;?>">
<meta name="twitter:description" content="<?php echo $description;?>">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:title" content="<?php echo $title;?>">
<meta name="og:description" content="<?php echo $description;?>">
<meta name="og:image" content="<?php echo $image;?>">
<meta name="og:url" content="<?php echo $url;?>">
<meta name="og:site_name" content="<?php echo $title;?>">
<meta name="og:locale" content="es_CL">
<meta name="og:type" content="website">


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"><?php echo $title;?></span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><?php echo ($title);?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                  <li<?php if((basename($_SERVER['PHP_SELF']))=='biblio.php'){?> class="active" <?php };?>><a href="biblio.php">Bibliografía</a></li>
                  <li<?php if((basename($_SERVER['PHP_SELF']))=='viz.php'){?> class="active" <?php };?>><a href="viz.php">Visualizaciones</a></li>
                  <li<?php if((basename($_SERVER['PHP_SELF']))=='refs.php'){?> class="active" <?php };?>><a href="refs.php">Antecedentes</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
