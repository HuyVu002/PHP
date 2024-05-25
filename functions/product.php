<?php 
require_once("database.php");
function list_p(){
    $sql = "select * from list_phone";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
// die("aaaaa");

// function categories_all(){
//     $sql = "select * from categories";
//     $result = query($sql);
//     $list = [];
//     while($row = $result->fetch_assoc()){
//         $list[] = $row;
//     }
//     return $list;
// }

// function category_detail($category_id){
//     $sql_cat = "select * from categories where id = $category_id";
//     $result = query($sql_cat);
//     if($result->num_rows > 0){
//         $category = $result->fetch_assoc();
//         $sql_product = "select * from products where category_id = $category_id";
//         $result = query($sql_product);
//         $list = [];
//         while($row = $result->fetch_assoc()){
//             $list[] = $row;
//         }
//         $category["products"] = $list;
//         return $category;
//     }
//     return null;
    
// }

function product_detail($id)  {
    $sql = "select * from products where id = $id";
    $result = query($sql);
    if($result->num_rows > 0){
        return $result->fetch_assoc();// 1 product
    }
    return null;
}