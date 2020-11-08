<?php 

include("dbh.inc.php");
include("db.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Medal Gained</title>

  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

  <table class="table">
    <tr>
      <th>SOLDIER ID</th>
      <th>SOLDIER NAME</th>
      <th>SOLDIER RANK</th>
      <th>SOLDIER DOB</th>
      <th>SOLDIER DOJ</th>
      <th>SOLDIER DOR</th>
      <th>BATTALION NAME</th>
      <th>BATTALION YEAR</th>
      <th>BIRTH PLACE PINCODE</th>
      <th>HEIGHT</th>
      <th>WEIGHT</th>
      <th>SEX</th>
      <th>CHEST</th>
    </tr>

    <?php
    $query = "SELECT * FROM soldier inner join sol_status on soldier.sol_id = sol_status.sol_id where sol_status.alive = 0";
    $query_run=mysqli_query($conn,$query);
    while($data = mysqli_fetch_array($query_run)){​​
        ?>
        <tr>
            <td><?php echo $data['sol_id']?> </td>
            <td><?php echo $data['sol_name'] ?> </td>
            <td><?php echo $data['sol_rank'] ?> </td>
            <td><?php echo $data['sol_dob'] ?> </td>
            <td><?php echo $data['sol_doj'] ?> </td>
            <td><?php echo $data['sol_dor'] ?> </td>
            <td><?php echo $data['b_name'] ?> </td>
            <td><?php echo $data['b_year'] ?> </td>
            <td><?php echo $data['birth_place_pincode'] ?> </td>
            <td><?php echo $data['height'] ?> </td>
            <td><?php echo $data['weight'] ?> </td>
            <td><?php echo $data['sex'] ?> </td>
            <td><?php echo $data['chest'] ?> </td>
        </tr>
       <?php  
    }​​
    ?>
  </table>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>