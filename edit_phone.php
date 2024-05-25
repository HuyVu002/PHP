<?php 
    // code lay data từ database cho vào form để update
    $id = $_GET["id"];

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "book_phone";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
      die("Connect database failed");
    }

    $sql = "SELECT * FROM list_phone WHERE id= $id"; // trả về 1 sản phảm hoặc ko có
    $result = $conn->query($sql);
    $product = null;
    while($row = $result->fetch_assoc()){
        $product = $row;
    }
    if($product == null){
        header("Location: /notfound.php");
        return;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Phone Number</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Edit phone number</h1>
    <form action="/update_phone.php?id=<?php echo $id;?>" method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input value="<?php echo $product["name"]; ?>" type="text" name="name" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Phone number</label>
            <input value="<?php echo $product["phone_number"]; ?>"  type="tel" name="phone_number" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input value="<?php echo $product["address"]; ?>"  type="text" name="address" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input value="<?php echo $product["email"]; ?>"  type="email" name="email" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>