<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button id="btn_prize">抽奖</button>


    <script src="/js/jquery-3.3.1.min.js"></script>
    <script>
        $("#btn_prize").click(function(){

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/prize',
                type: 'post',
                dataType:'json',
                success:function(d){
                    console.log(d);
                }
            });
        });
    </script>

</body>
</html>
