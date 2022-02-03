<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            html{line-height:1.15;-webkit-text-size-adjust:100%}
            body{
                margin:0;
            }
            a{
                background-color:transparent;
                text-decoration: none;
            }
        </style>
    </head>
    <body class="container-fluid">
        <div class="col-md-6">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-xs-6 blk  mobile_block">
                    <a href="https://www.issuewire.com/editorial-guideline" target="_blank">
                        <div class="col-md-12" id="blk5" style="min-height: 106px;border-radius:10px;">
                            <div class="col-md-12 fa-block text-center" style="padding: 20px;">
                                <i class="fa fa-info-circle fa-5x"></i>
                            </div><br>
                            <div class="col-md-12 text-center no-pad" style="text-decoration: none;font-size: 14px;">Guidelines</div>
                            <div class="clearfix"></div><br>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
