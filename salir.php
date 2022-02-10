<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="style.css" rel="stylesheet">
<link href="assets/img/EL-CONO-AMIGO.ico" rel="icon">
</head>
<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="assets/img/EL CONO AMIGO.png" alt=""/>
               
                <p></p>
                <!-- <input type="submit" name="" value="Login"/> --><br/>
            </div>
    <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading"></h3>
                    <div class="row register-form">
    <?php
    include("DB/conexion.php");
    $nroPlaca = $_REQUEST['nroPlaca'];
    $query="SELECT * FROM usuarios WHERE nroPlaca = '$nroPlaca'";
    $resultado= $con->query($query);
    $row=$resultado->fetch_assoc();
  ?>
    <div class="row">
      <div class="col">
          <label class="fw-bold">Placa:</label> <?php echo $row['nroPlaca']; ?>
      </div>
      <div class="col">
          <label class="fw-bold">Hora de ingreso:</label> <?php echo $row['horaIngreso']; ?>
      </div>
      <div class="col">
          <label class="fw-bold">Numero de Cono:</label> <?php echo $row['nroCono']; ?>
      </div>
      <div class="col">
          <label class="fw-bold">Tipo plan:</label> <?php echo $row['tipoPlan']; ?>
      </div>
      <div class="col">
          <label class="fw-bold">Total:</label> 
      </div>
    </div>
      
                        <div class="row">
                    <div class="col">
                        <input type="submit"class="btnRegister" value="Pagar" onclick="window.location.href='paginafinal.html'">
                        <input type="button"class="btnVolver"value="Volver" onclick="history.back();">
                    </div>
                </div>

                    </div>
                </div>
            </div>
            
  

   
                        
                       
                       



    <scripts src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
        <script src="script.js"></script>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        
        
      </script>
</body>
</html>