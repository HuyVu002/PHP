<?php 
    // code lay data từ database cho vào form để update
    $id = $_GET["id"];
   
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "t2311e_php";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
      die("Connect database failed");
    }

    $sql = "SELECT * FROM categories WHERE id= $id"; // trả về 1 sản phảm hoặc ko có
    $result = $conn->query($sql);
    $category = null;
    while($row = $result->fetch_assoc()){
        $category = $row;
    }
    if($category == null){
        header("Location: /Category/notfound.php");
        return;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Edit categories</h1>
    <form action="/Category/up_cate.php?id=<?php echo $id;?>" method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input value="<?php echo $category["name"]; ?>" type="text" name="name" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>