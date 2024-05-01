<!-- ưu điểm 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
    $product = [
        "name" => "Iphone 15",
        "price"=> 1000,
        "qty"  => 5,
        "description" => "san pham dang hot"
    ];
    ?>
    
    <div class="card" style="width: 18rem;">
    <img src="https://img.lovepik.com/original_origin_pic/19/01/13/e256ccdfd3760725712e0fc96dcadaf2.png_wh860.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $product["name"]."<br/>";?>
            </h5>
            <p class="card-text"><?php echo $product["description"]."<br/>";?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    
        
</body>
</html>