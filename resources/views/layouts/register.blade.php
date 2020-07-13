<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Muballigh - Mengaji kapan saja di mana saja dari mana saja....">
        <meta name="author" content="muballigh of the world">
        <title>@yield('title')</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="<?= asset('/tpl') ?>/img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="<?= asset('/tpl') ?>/img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= asset('/tpl') ?>/img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= asset('/tpl') ?>/img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= asset('/tpl') ?>/img/apple-touch-icon-144x144-precomposed.png">

        <!-- BASE CSS -->
        <link href="<?= asset('/tpl') ?>/css/bootstrap_customized.min.css" rel="stylesheet">
        <link href="<?= asset('/tpl') ?>/css/style.css" rel="stylesheet">

        <!-- SPECIFIC CSS -->
        <link href="<?= asset('/tpl') ?>/css/account.css" rel="stylesheet">

    </head>

    <body id="register_bg">
        @yield('content')

        <!-- /login -->
        
        <!-- COMMON SCRIPTS -->
        <script src="<?= asset('/tpl') ?>/js/common_scripts.min.js"></script>
        <script src="<?= asset('/tpl') ?>/js/common_func.js"></script>
        <script src="assets/validate.js"></script>

        <!-- SPECIFIC SCRIPTS -->
        <script src="<?= asset('/tpl') ?>/js/pw_strenght.js"></script>	
        @yield('scripts')
    </body>
</html>