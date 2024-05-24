<?php 
    include_once("html/styles.php");
    require_once("functions/product.php");
    $newest_products = newest_products();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thông tin sản phẩm</title>
</head>
<body>
    
<div class="container mt-5">
  <h1 class="text-center mb-4">Thông tin sản phẩm</h1 class="">
  <table class="table table-bordered">
    <?php foreach($newest_products as $item):?>
        <tbody>
        <tr>
            <th class="col-2">Customer name</th>
            <!-- <td><?php echo $item["name"] ?></td> -->
        </tr>
        <tr>
            <th class="col-2">Adress</th>
            <td>Quần jean nữ</td>
        </tr>
        <tr>
            <th class="col-2">Status</th>
            <td>Giày thể thao</td>
        </tr>
        </tbody>
    <?php endforeach;?>    
    </table>
  
</div>

</body>
</html>
