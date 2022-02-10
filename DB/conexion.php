   <?php 
    $con = mysqli_connect("localhost","root","","db_prueba_tecnica");
     
    if(!$con){
        die("Connection error: " . mysqli_connect_error());	
    }
    ?>