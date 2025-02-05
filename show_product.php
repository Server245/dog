
<?php
include 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
     <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
    <div class="alert alert-primary h4 text-center mb-4 mt-4  "  role="alert">
แสดงข้อมูลสินค้า
</div>
<a class="btn btn-success  mb-4" href="fr_product.php" role="button">Add+</a>
<table>
<table class="table table-striped table-hover">
    <th>รหัสสินค้า</th>
    <th>ชื่อสินค้า</th>
    <th>ประเภท</th>
    <th>ราคา</th>
    <th>จำนวน</th>
    <th>รูปภาพ</th>
    <th>แก้ไข</th>
</tr>
<?php
$sql="SELECT * FROM product ,type WHERE product.type_id =type .type_id  ";
$hand = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($hand)){
?>
<tr>
    <td><?=$row['pro_id']?> </td>
    <td><?=$row['pro_name']?> </td>
    <td><?=$row['type_name']?> </td>
    <td><?=$row['price']?> </td>
    <td><?=$row['amount']?> </td>
    <td><img src="image/<?=$row['image']?>" width="80px" height="100px" > </td>
    <td><a href="edit_product.php?id=<?=$row['pro_id']?>" class="btn btn-warning" > Edit</a></td>
</tr>

<?php
}
mysqli_close($conn);
?>

</table>


    </div>
    
</body>
</html>