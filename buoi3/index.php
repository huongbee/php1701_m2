<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php

//include 'data.php';
//include 'data.php';
//include_once 'data.php';

//require 'data.php';
require_once 'data.php';
//print_r($arrSanpham);
?>


<body>
    <div class="header">

    </div>
    <div class="content">

        <?php foreach($arrSanpham as $sanpham):?>

        <div class="item">
            <div class="image">
                <img src="<?=$sanpham['image']?>" alt="OPPO F5">
            </div>
            <div class="info">
                <h3><?=$sanpham['name']?></h3>
                <p>Phiếu mua hàng trị giá 100.000đ khi mua online</p>
                <p>Phiếu mua hàng trị giá 100.000đ khi mua online</p>
                <p class="promotion">Khuyến mãi: ....</p>
                <p>Phiếu mua hàng trị giá 100.000đ khi mua online</p>
            </div>
            <div class="footer">
                <p class="name"><?=$sanpham['name']?></p>
                <p class="price"><?=number_format($sanpham['price'],2,'.',',')?> vnđ</p>
            </div>
        </div>
        <?php endforeach?>

        
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.footer').click(function(){
                var price = $(this).find('.price').html()
                console.log(price)
            })
        })
    </script>    
</body>

</html>