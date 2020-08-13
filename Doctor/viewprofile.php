<?php include "header.php"; ?>
<?php
$id = $_SESSION['id'];
$str = "select * from user_master where u_id = $id";
$result = mysqli_query($conn,$str);
$data = mysqli_fetch_array($result);
$cnid = $data['country_id'];
$sid = $data['state_id'];
$cid = $data['city_id'];
$path = $data['u_pic'];
$str = "SELECT country_name FROM country_master where country_id = '$cnid' UNION SELECT state_name FROM state_master WHERE state_id = '$sid' UNION SELECT city_name FROM city_master WHERE city_id = '$cid'";
$result1 = mysqli_query($conn,$str);
$data1 = mysqli_fetch_array($result1);
 ?>
<body style="background-color: #E5E5E5;">
      <main class="app-content"  style="width:=900px; ">
        <div class="container">
        	 <table class="table">
            <tr>
              <td rowspan ="12"> <img  class="rounded-circle" src="../Profilepics/<?= $path ?>" height=160 width=160 style="margin-left:100px;" >

              <br>
              <br>
              <br>
              </td>
            </tr>
          <tr>
          <td><b>Name: </b><?php echo $data['u_name']; ?></td>
          </tr>
          <br>
          <tr>
          <td><b>Email: </b><?php echo $data['email']; ?></td>
          </tr>
             <tr>
          <td><b>Gender: </b><?php echo $data['gender']; ?></td>
          </tr>
             <tr>
          <td><b>Phone: </b> <?php echo $data['u_phone']; ?></td>
          </tr>
               <tr>
          <td><b>Language: </b><?php echo $data['language']; ?></td>
          </tr>
          <tr>
          <td><b>Username: </b><?php echo $data['username']; ?></td>
          </tr>
          <tr>
          <td><b>Country: </b><?php echo $data1['0']; ?></td>
          </tr><?php $data1 = mysqli_fetch_array($result1); ?>
          <tr>
          <td><b>State: </b><?php echo $data1['0']; ?></td>
          </tr>
          <tr><?php $data1 = mysqli_fetch_array($result1); ?>
          <td><b>City: </b><?php echo $data1['0']; ?>	</td>
          </tr>
         

        </table>
    </div>
</main>
</body>
 <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
</body>
</html>