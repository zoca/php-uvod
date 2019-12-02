<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $pageTitle;  ?> - Cubes School</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- @todo: fill with your company info or remove -->
    <meta name="description" content="">
    <meta name="author" content="Cubes School">
    <!-- Bootstrap CSS -->
    <link href="/theme/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="/theme/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link href="/theme/css/theme-style.css" rel="stylesheet">
    <!-- Your custom override -->
    <link href="/theme/css/custom-style.css" rel="stylesheet">
    <!-- @option: Colour skins, choose from: 1. colour-blue.css 2. colour-red.css 3. colour-grey.css 4. colour-purple 5. colour-green.css Uncomment line below to enable -->
    <link href="/theme/css/colour-blue.css" rel="stylesheet" id="colour-scheme">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
		<script src="/theme/plugins/html5shiv/dist/html5shiv.js"></script>
		<script src="/theme/plugins/respond/respond.min.js"></script>
		<![endif]-->
    <!-- Le fav and touch icons - @todo: fill with your icons or remove -->
    <link rel="shortcut icon" href="/theme/img/favicons/96x96.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/theme/img/favicons/114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/theme/img/favicons/72x72.png">
    <link rel="apple-touch-icon-precomposed" href="/theme/img/favicons/96x96.png">
    <link href='https://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
</head>

<!-- ======== @Region: body ======== -->

<body class="has-navbar-fixed-top has-highlighted">

    <!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
        <!--Branding & Navigation Region-->
        <div class="navbar navbar-fixed-top" id="top">
            <div class="navbar-inner">
                <div class="inner">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <a class="navbar-brand" href="/index.php" title="Home">
                                <h1>
                                    Kurs PHP
                                </h1>
                                <span>Cubes School</span>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-right" id="main-menu">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/all-news.php">All News</a>
                                </li>
                                <li>
                                    <a href="/students.php">All students</a>
                                </li>
                                <li>
                                    <a href="#">Link 4 active</a>
                                <?php if(!empty($_SESSION['loggedin_user'])) { ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-user"></i> <?php echo htmlspecialchars($_SESSION['loggedin_user']['name']);  ?>
                                    </a>
                                    <!-- Dropdown Menu -->
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="portfolio-drop">
                                        <li role="menuitem">
                                            <a href="/profile1.php">My profile</a>
                                        </li>
                                        <li role="menuitem">
                                            <a href="/logout.php">
                                                <i class="fa fa-sign-out"></i>
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <?php } else { ?>
                                <li>
                                    <a href="/login.php"><i class="fa fa-user"></i> Login</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======== @Region: #highlighted ======== -->
    <div id="highlighted">
        <div class="container">
            <div class="header">
                <h2 class="page-title">
                    <span><?php echo $pageTitle; ?>
                    </span>
                    <small><?php echo isset($pageDescription) ? $pageDescription : ''; ?></small>
                </h2>
            </div>
        </div>
    </div>
    <div id="content" class="demos">