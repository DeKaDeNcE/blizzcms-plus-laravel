<html>
<head>
        <meta charset="utf-8">
        <title>AquaFlameCMS Frontpage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A wow private server made with AquaFlameCMS">
        <meta name="author" content="AquaFlameCMS">
   
        <!-- Le styles -->
        
        <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}" />
        <link href="{{ url('themes/AquaFlameTribute/assets/css/main.css') }}" rel="stylesheet" type="text/css">
   
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
   
        <!-- Le javascripts -->
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('themes/AquaFlameTribute/assets/js/global.js') }}"></script>
        <script src="{{ url('themes/AquaFlameTribute/assets/js/login.js') }}"></script>
        <script src="{{ url('themes/AquaFlameTribute/assets/js/register.js') }}"></script>
        <script src="{{ url('themes/AquaFlameTribute/assets/js/jquery.flexslider-min.js') }}"></script>
</head>
    <body>

        @content()


        @scripts()
    </body>