<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
<!-- Bootstrap CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  >
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
    <div class="h4 text-center  alert alert-success mb-4 mt-4  " role="alert"> เพิ่มข้อมูลสมาชิก </div>   
    <form method="POST" action="insert_member.php">
    <label>ชื่อ:</label>
    <input type="text" name="fname" class="form-control" placeholder="...ชื่อ"  required > <br>
    <label>นามสกุล:</label>
    <input type="text" name="lname" class="form-control"placeholder="...นามสกุล" required  ><br>
    <label>เบอร์โทรศัพท์:</label>
    <input type="number" name="telephone" class="form-control"placeholder="...เบอร์โทรศัพท์" required  ><br>
    <input type="submit" value="submit" class="btn btn-success" >
    <a href="show_member.php"  class="btn btn-danger">Cancel</a>
</form>

</div>
 </div>

</body>
</html>
by tiger

