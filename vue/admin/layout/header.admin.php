<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Bagpackers </title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/1-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php 
		if (isset($_SESSION["user"]))
		{
?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?cat=admin&module=bagpackers&action=admin">The Bagpackers</a>
            </div>
            <?php if (isset($_SESSION["user"])){?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="?cat=admin&module=pays&action=lire_pays">Gérer les Pays</a>
                        <ul>
                            <li><a href="?cat=admin&module=pays&action=ajout_pays">Ajouter un Pays</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="?cat=admin&module=hotels&action=lire_hotels">Gérer les Hôtels</a>
                        <ul>
                            <li><a href="?cat=admin&module=hotels&action=ajouter_hotel">Ajouter un Hôtel</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="?cat=admin&module=voyages&action=lire_voyages">Gérer les Voyages</a>
                        <ul>
                            <li><a href="?cat=admin&module=voyages&action=ajout_voyage">Ajouter un voyage</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="?cat=admin&module=messages&action=lire_messages">Gérer les Messages</a>
                    </li>
                    <li>
                        <a href="?cat=admin&module=propositions&action=lire_propositions">Gérer les Propositions</a>
                    </li>
                </ul>
            </div> <? }?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<?php }
else{?>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		        <div class="container">
		            <div class="navbar-header">
		            	   <a class="navbar-brand" href="#">The Bagpackers</a>
		           	</div>
		        </div>
		</nav>
<?php
}
?>