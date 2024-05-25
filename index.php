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
    <?php include_once("html/styles.php")?>
</head>
<body>
    <div style="background-color: #79a6d2; padding: 30px; border-radius:20px" class="container mt-2">
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
                <button type="submit" class="btn btn-secondary "><i class="bi bi-search"></i></button>
            </div>
            </div>
        </form>
    </div>
    <div class="container text-center mt-3">
            <h1>Phonebook</h1>
    </div>
    <div class="container mt-3">
            <table class="table table-primary table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
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
            <form class="text-center" action="/create_number.php">
                <button type="submit" class="btn btn-dark">Add new contact</button>
            </form>
        </div>
    </div>
</body>
</html>