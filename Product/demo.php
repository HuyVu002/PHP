<?php
echo "DEMO <br/>";

$arr = [];
$arr[] = 5;
$arr[] = "XYZ";
$arr[] = 18;
for($i=0;$i<3;$i++){
    echo $arr[$i]."<br/>";
}
for($i=0;$i<count($arr);$i++){
    echo "vi tri thu ".$i." = ". $arr[$i]."<br/>";
}
echo "cách này tiện và đa dạng hơn<br/>";
foreach($arr as $key => $item){
    echo "vi tri thu ".$key."=".$item."<br/>";
}
echo "ví dụ một mảng có chỉ mục là string<br/>";

$student = [];
$student["name"] = "Trương Mỹ Lan";
$student["tel"] = "09999999999";
$student["age"] = 68;
foreach ($student as $key => $data) {
    echo $key .":". $data."<br/>";
}

$product = [
    "name" => "Iphone 15",
    "price"=> 1000,
    "qty"  => 5,
    "description" => "san pham dang hot"
];
foreach ($product as $key => $value) {
    echo $key." => ".$value."<br/>";
}

