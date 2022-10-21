<?php 
//connect to the dad
$con=mysqli_connect('localhost','root','','simple');


    // to check error
// if(!$con){
//   echo "error".mysqli_connect_error();
// }

//select name of the cell from the table
$sqli="SELECT * FROM formdata WHERE id=6 ";

// injuction the connection and cell name in ID variable
$ID=$con->query($sqli);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get data from the dadabase</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
   <style>
    .img-resp{
      width: 100%;
    }
   </style>
</head>
<body>

<div class="container">
<!-- 
 fetch all the datas include  -->
  <?php 

  // connected dabase all the cells stored in product variable
  while ($product=mysqli_fetch_assoc($ID)):
  // $product=mysqli_fetch_assoc($ID); 
  ?>
<div class="card mx-auto" style="width: 18rem;">

<!-- call db cell using box notation -->
  <img src="<?php echo $product['url'];?>" class="card-img-top img-fluid" alt="<?= $product['Name'];?>">
  <div class="card-body">
    <h5 class="card-title"><?= $product['Name'];?></h5>
    <p class="card-text"><?= $product['Email'];?></p>
    <a href="#" class="btn btn-primary"><?= $product['Code'];?></a>
  </div>
</div>
<?php endwhile; ?>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>