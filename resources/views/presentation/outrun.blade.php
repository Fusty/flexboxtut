<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield("title")</title>

    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <style>
        .page {
            font-family:arial,verdana,helvetica,sans-serif;
            color:#FF073A;
            background-color: #181818;
            min-height:100vh;

            display:flex;
            flex-direction:column;
        }

    </style>

    @yield("head")
</head>
<body>
<div class="page">
    @yield("content")
</div>
</body>
</html>