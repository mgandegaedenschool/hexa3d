<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Questionnaire d'intérêts professionnels</title>

    <link rel="stylesheet" href="/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="/css/lib/fontawesome.min.css">
    <link rel="stylesheet" href="/css/style.min.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/header_irmr3.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/register.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/espace_membre.css">
    <link rel="stylesheet" href="/css/espace_pro.css">
    <link rel="stylesheet" href="/css/irmr3_pdf.css">
    <link rel="stylesheet" href="/css/irmr3.css">
    <link rel="stylesheet" href="/css/style.css">


</head>
<body class="<?php echo $bgc??''; ?>">
    @yield('content')
    <script src="/js/formEnable.js"></script>
    <script src="/js/dragNdrop.js"></script>
    <script src="/js/selectAutoSubmit.js"></script>
    <script src="/js/chart-test.js"></script>
    <script src="/js/copyToClipboard.js"></script>
    <script src="/js/lib/jquery-3.3.1.min.js"></script>
    <script src="/js/lib/popper.min.js"></script>
    <script src="/js/lib/bootstrap.min.js"></script>
    <script src="/js/lib/chart.js/auto.auto.js"></script>
    <script src="/js/utils/fullscreen.js"></script>
    <script src="/js/app/dashboard/dashboard.js"></script>
    @yield('script')
</body>
</html>
