  <?php
  //if (isset($_POST['submit'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "whimsywillow";

    $con = mysqli_connect($server,$username,$password,$database);

    if(!$con){
      die("Connection failed" . mysqli_connect_error());
    }
    else{
      echo "Connection successful <br> ";
    }

        //DATABASE CREATE

      /*$sql = "CREATE DATABASE whimsywillow";

      if($result){
        echo "Database created successfully!";
      }
      else{
        echo "Can not connect" . mysqli_error($con);
      }*/

        //TABLE CREATE

      /* $sql = "CREATE TABLE `customer` ( `id` INT(3) AUTO_INCREMENT PRIMARY KEY, `name` VARCHAR(30) NOT NULL,`email` VARCHAR(50),`phone` INT(11),
      `address` TEXT,`district` TEXT, `date` TIMESTAMP)";

      $result = mysqli_query($con,$sql);

      if($result){
        echo "Successfully created table <br>";
      }
      else{
        echo "failed to create table <br>" . mysqli_error($con);
      }*/

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $total = $_POST['total'];
    $district = $_POST['district'];
    $sql = "INSERT INTO `whimsywillow`.`customer`( `name`, `email`, `phone`, `address`,`district`, `total`, `date`) 
    VALUES ('$name','$email','$phone','$address','$district','$total',current_timestamp());";

    if($con->query($sql)==true){
      if( !empty($name) or!empty($email) or!empty($phone) or !empty($address) or!empty($district) or!empty($total)){
      echo "Successful insertion <br>";
      echo "<font size=10px>Hello," . "<b>" . ucfirst($name) . "</b>" . " Please take a screenshot of this page </font><br>";
       echo '<body style="background-color: burlywood;font-size:30px;">' . "<b>Name :</b>" . ucfirst($name) . "<br>";
       echo "<b>Phone : </b>" . $phone . "<br>";
       echo "<b>Address : </b>" . ucfirst($address);
       echo ", " . ucfirst($district) . "<br>";
       echo "<b>Bill : </b>" . $total . "<br>" . "</body>";
      }
      else{
        return;
      }
   
      
    }
    else{
      echo "Error: $sql <br> $con->error";
    }
  
    $con->close();
  //}
  
  ?>