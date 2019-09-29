<!DOCTYPE html>
<html lang="en">

    <head>
        {!! meta_init() !!}
        <meta name="keywords" content="@get('keywords')">
        <meta name="description" content="@get('description')">
        <meta name="author" content="@get('author')">
    
        <title>@get('title')</title>
        
        <link rel="stylesheet" href="{{ url('assets/uikit/css/uikit.min.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />
        <script src="{{ url('assets/uikit/js/uikit.min.js') }}"></script>
        <script src="{{ url('assets/uikit/js/uikit-icons.min.js') }}"></script>
        @styles()

    </head>

    <body>
        @partial('header')

        @content()

        @partial('footer')

        @scripts()
    </body>

</html>
