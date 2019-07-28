<!DOCTYPE html>
<html lang="en">

    <head>
        {!! meta_init() !!}
        <meta name="keywords" content="@get('keywords')">
        <meta name="description" content="@get('description')">
        <meta name="author" content="@get('author')">
    
        <title>@get('title')</title>
        
        <link rel="stylesheet" href="assets/uikit/css/uikit.min.css" />
        <script src="assets/uikit/js/uikit.min.js"></script>
        <script src="assets/uikit/js/uikit-icons.min.js"></script>
        @styles()

    </head>

    <body>
        @partial('header')

        @content()

        @partial('footer')

        @scripts()
    </body>

</html>
