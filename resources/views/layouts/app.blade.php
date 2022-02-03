<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/all.css') }}>
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @include('feed::links')
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

        #blk5 {
            color:black;
            min-height: 106px;
            border-radius:10px;
            box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%);
        }
        .blk {
            min-width: 240px;
        }

        #blk5:hover {
            background: gray;
        }

        .content-all{
            display: flex;
            justify-content: center;
            align-items: center
        }
        .form-horizontal{
            position: relative;
        }
        .btn-custom{
            border-radius: 30px;
            color: #222 !important;
            background: linear-gradient(to bottom, rgba(247, 231, 4, 1) 0%, rgba(255, 208, 3, 1) 100%);
        }

        .btn-custom:hover {
            color:#fff !important;
            background: #222;
        }
        .pay-container{
            display: flex;
            justify-content: center;
        }

        .writing-table{
            box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%);
        }
        .writing-container{
            padding:20px;
        }

        .writing-btn{
            padding:20px;
            display:flex;
            justify-content: flex-end;
        }
        .table-container{
            padding: 15px;
        }

        .writing-form{
            box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%);
            padding:25px;
        }
        .package-select{
            box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%);
            padding:15px;
        }

        .browse-btn {
            width: 125px;
            background: #460d88;
            line-height: 35px;
            text-align: center;
            font-size: 17px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        .post_pr_btn{
            display: flex;
            justify-content: center;
            align-self: auto;

        }
        .filter-container{
            display: flex;
            justify-content: flex-end;
        }
        .filter-form{
            display: flex;
        }

        .control-label{
            padding-left: 90px;
        }

        .industry {
            height: 150px;
            width: 90%;
            padding: 5px 10px;
            overflow: auto;
            border: 1px solid #CCCCCC;
            background: #fff;
        }

        .priview-btn{
            display: flex;
            justify-content: center;
        }

        .profile-button{
            display:flex;
            justify-content: space-around;
        }
        .view-blk{
            box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%);
        }
        .view-blk-left{
            margin-right: 20px;
        }
        .text-right{
            text-align: right;
        }
    </style>
</head>
<body>
    @include('inc.navbar')
    <div class="">
        @yield('content')
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
        function myFunction(){
            var e = document.getElementById("multipck_value1");
            document.getElementById('change_price1').innerHTML = e.value;
        }
        
        function tire1proChange(){
            var e = document.getElementById("multipck_value2");
            document.getElementById('change_price2').innerHTML = e.value;
        }

        function tire2Change(){
            var e = document.getElementById("multipck_value3");
            document.getElementById('change_price3').innerHTML = e.value;
        }

        function tire2proChange(){
            var e = document.getElementById("multipck_value4");
            document.getElementById('change_price4').innerHTML = e.value;
        }

        function changepack(){
            var e= document.getElementById("nopack");
            var epack= document.getElementById("pack");
            document.getElementById('price').innerHTML = Number(e.value) * Number(epack.value);
        }
    </script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace( 'summary-ckeditor' );
    </script>
      
</body>

</html>
