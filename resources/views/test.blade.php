<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        echo $data1,$data2,$data3;
    ?>

    <h1>安安安{{$data1}}安{{$data2}}安{{$data3}}安安</h1>


    <?php
        $data1='000';
    ?>
    {{$data1}}<br>
    <?php
        $data1='999';
    ?>
    {{$data1}}<br>
    <?php
        $data1='123';
    ?>
    {{$data1}}

</body>
</html>
