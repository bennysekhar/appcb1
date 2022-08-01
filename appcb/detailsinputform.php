<?php
require_once ('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Proforma for resume of a Professional/Experts as Member of the CFE/CFO Committee</title>
</head>
<body>
      <?php
      if(isset($_POST['create'])){
          $first_name     = $_POST['first_name'];
          $last_name      = $_POST['last_name'];
          $address        = $_POST['address'];
          $mobile         = $_POST['mobile'];
          $email          = $_POST['email'];
          $date_of_birth  = $_POST['date_of_birth'];

          $sql = "INSERT INTO proforma(first_name, last_name, address, mobile, email, date_of_birth) 
                   values (?,?,?,?,?,?)";
          $stmtinsert = $db->prepare($sql);
          $result = $stmtinsert->execute(array($first_name,$last_name,$address,$mobile,$email,$date_of_birth));
          if($result){
              echo "Successful Upload.";
          }else{
              echo "There was error while saving the data.";
          }
      }
      ?>

     <div>
         <form action="detailsinputform.php" method="post">
             <div class="container"

                 <div class="row1">
                 <h1>Personal Details</h1>
                 <p>Please enter your details in full</p>
                 <label for="first_name"><b>First Name</b></label>
                 <input type="text" name="first_name" required>

                 <label for="last_name"><b>Last Name</b></label>
                 <input type="text" name="last_name" required>

                 <label for="address"><b>Address</b></label>
                 <input type="text" name="address">

                 <label for="mobile"><b>Mobile/Telephone</b></label>
                 <input type="number" name="mobile">

                 <label for="email"><b>Email</b></label>
                 <input type="email" name="email" >

                 <label for="date_of_birth"><b>Date of Birth</b></label>
                 <input type="date" name="date_of_birth" >
             <input class="btn btn-primary" name="create" type="submit" value="Submit">
             </div>

        </div>
      </form>
      </div>
</body>

</html>