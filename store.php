$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phone INT(11),
    address TEXT,
    district TEXT,
    date TIMESTAMP
    )";

   // echo "Succesful";
    
    //echo $sql;

    

    function addToCartClicked(event) {
                var button = event.target
                var shopItem = button.parentElement.parentElement
                var priceElement = shopItem.getElementsByClassName('cart-price')[0].innerText
                var price = parseInt(priceElement)
                var total = price + 120
                var tot_price = document.getElementById('total')
                tot_price.value = total 
        }
  
    //$name = $_POST['name'];
    //$email = $_POST['email'];
    //$phone = $_POST['phone'];
    //$address = $_POST['address'];
    //$total = $_POST['total'];
    
    //$conn = new mysqli('localhost','root','','shop');
    //if($conn->connect_error){
     //   die('connection failed : '.$conn->connect_error);
    //}
    //else{
      //  $stmt = $conn_prepare("insert into customer(name,email,phone,address,total) values(?,?,?,?,?)");
      //  $stmt -> bind_param("ssisi",$name ,$email,$phone,$address,$total);
      //  $stmt -> execute();
      //  echo "Order Successful";
      //  $stmt ->close();
      //  $conn ->close();
   // }
  
  ?>