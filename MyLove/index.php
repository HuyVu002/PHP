<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="/Category/home.php" method="GET">
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
</body>
</html>