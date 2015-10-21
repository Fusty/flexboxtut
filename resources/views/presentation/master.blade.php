<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield("title")</title>

    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <style>
        .page {
            /*Vertically layout items
              (Container Context)*/
            display:flex;
            flex-direction:column;

            min-height:100vh;
            background-color: rgb(226, 226, 226);
        }

        .page-content {
            /*Vertically layout items
              (Container Context)*/
            display:flex;
            flex-direction:column;

            /*Expand Page Content to help fill container if needed.
              Don't shrink page content if needed.
              (Item Context)*/
            flex-grow:1;
            flex-shrink:0;

            padding:20px;
        }

        .flex-ltr-wrap {
            /*Horizontally layout items ltr and stretch vertically.
              Allow wrap using Flexbox.
              (Container Context)*/
            display:flex;
            flex-direction:row;
            flex-wrap:wrap;
            justify-content: flex-start;
            align-items: stretch;
        }

        .header {
            /*Don't expand the header to fill container if needed.
              Don't shrink header if needed either.
              (Item Context)*/
            flex-grow:0;
            flex-shrink:0;

            min-height:3em;
            background-color: #1976d2;
            width:100%;
            border-bottom:2px solid rgb(232, 216, 88);

        }

        .header-item {
            /*Vertically align content using Flexbox
              (Container Context)*/
            display:flex;
            align-items:center;

            padding: 0px 20px;
            border-right:2px solid rgb(232, 216, 88);
            color: rgb(232, 216, 88);

        }

        .header-brand {
            font-size:2em;
            font-weight:bolder;
        }

        .footer {
            /*Don't expand the footer to fill container if needed.
              Don't shrink footer if needed either.
              (Item Context)*/
            flex-grow:0;
            flex-shrink:0;

            min-height:5em;
            background-color: #1976d2;
            width:100%;
            border-top:2px solid rgb(232, 216, 88);
        }

        .footer-item {
            /*Vertically align content using Flexbox
              (Container Context)*/
            display:flex;
            align-items:center;

            padding: 0px 20px;
            border-right:2px solid rgb(232, 216, 88);
            color: rgb(232, 216, 88);
        }

        .parent {
            background-color: rgb(196, 117, 106);
            border:2px solid rgb(85, 99, 196);
        }

        .child {
            background-color: rgb(225, 220, 106);
            border:2px solid rgb(36, 153, 25);
        }

        .child2 {
            background-color: rgb(51, 225, 135);
            border:2px solid rgb(216, 241, 68);
        }

        .child3 {
            background-color: rgb(225, 146, 44);
            border:2px solid rgb(196, 103, 176);
        }

        .expandable, .reorderable, .parent, .child, .child2 {
            transition: all 0.5s;
        }
    </style>

    @yield("head")
</head>
<body>
<div class="page">
    <div class="header flex-ltr-wrap">
        @yield("header")
    </div>

    <div class="page-content">
        @yield("content")
    </div>

    <div class="footer flex-ltr-wrap">
        @yield("footer")
    </div>
</div>
</body>
</html>