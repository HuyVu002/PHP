<?php
  // query to DB 
  //1. connect db
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "book_phone";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
      die("Connect database failed");
    }
  //2. query SQL
     // 2.1. Lấy tham số
     $limit = isset($_GET["limit"]) && $_GET["limit"]!= "" ?$_GET["limit"]:20;
     $search = isset($_GET["search"])?$_GET["search"]:"";

     //2.2. áp dụng giá trị tham số vào truy vấn
    $sql = "SELECT * FROM list_phone WHERE name LIKE '%$search%' LIMIT $limit";
    $result = $conn->query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
      $list[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
  <div class="container mt-2">
    <form action="/" method="GET">
        <div class="row">
          <div class="col">
          <input value="<?php echo $search; ?>" name="search" placeholder="Search" type="text" class="form-control"/>
          </div>
          <div class="col">
            <input value="<?php echo $limit; ?>" name="limit" placeholder="Limit" type="number" class="form-control"/>
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
    </form>
  </div>
  <div class="container mt-3">
    <a style="color:blueviolet;" href="/create_number.php">Create a new phone number</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($list as $item):?>
    <tr>
      <th scope="row"><?php echo $item["id"];?></th>
      <td><?php echo $item["name"];?></td>
      <td><?php echo $item["phone_number"];?></td>
      <td><?php echo $item["address"];?></td>
      <td><?php echo $item["email"];?></td>
      <td><a href="/edit_phone.php?id=<?php echo $item["id"]; ?>">Edit</a></td>
      <td><a onclick="return confirm('Are you sure delete product?')" 
          class="text-danger" href="/delete_number.php?id=<?php echo $item["id"]; ?>">
          Delete</a></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
    </div>
</body>
</html>