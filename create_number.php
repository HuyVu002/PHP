<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once("html/styles.php")?>
</head>
<body>
    <div style="width: 25%; background-color:#79a6d2; padding:20px; border-radius:10px" class="container mt-5">
        <h1>Add a new number</h1>
    <form action="/save_number.php" method="post">
        <div class="mb-3 mt-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="fully name">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="tel" name="phone_number" class="form-control" placeholder="your phone number" >
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="123 Main St, Apt 4B">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="example@example.com">
        </div>
        <button type="submit" class="btn btn-dark">Save</button>
    </form>
    </div>
</body>
</html>