<?php 

include("DB/conexion.php");

/* AQUI SE ATRAPAN LOS DATOS */
if(isset($_POST['addreserva'])){

/* AQUI ATRAPAMOS LOS DATOS */  
$nroPlaca = $_POST['nroPlaca'];
$horaIngreso= $_POST['horaIngreso'];
$nroCono = $_POST['nroCono'];
$totalPlan = $_POST['totalPlan'];

/* AQUI SE VERIFICA POR MEDIO DE UN SELECT SI EL CELULAR (DATO UNICO) NO SE ENCUENTRA YA ASIGNADO A OTRO CLIENTE REGISTRADO EN LA BASE DE DATOS */
$query="SELECT nroPlaca FROM usuarios WHERE nroPlaca = $nroPlaca";


if ($result = $con->query($query)) {

  /* fetch associative array */
  while ($row = $result->fetch_assoc()) {

  }
  /* free result set */
  $result->free();
}
/* if($row>0){
  echo "<script>alert('La placa $nroPlaca ya se encuentra registrada');window.location='reservar.html'</script>";
}else{ */
  /* AQUI CREAMOS Y EJECUTAMOS EL QUERY PARA INSERTAR AL NUEVO CLIENTE/DUEÑO */
  $query = "INSERT INTO usuarios (nroPlaca,horaIngreso,nroCono,totalPlan)
  VALUES ('$nroPlaca', '$horaIngreso', '$nroCono', '$totalPlan')";

$query2 = "INSERT INTO usuarios (tipoPlan)
VALUES ('Basico') WHERE totalPlan = '5.000'";
$query3 = "INSERT INTO usuarios (tipoPlan)
VALUES ('Sencillo') WHERE totalPlan = '7.000'";
$query4 = "INSERT INTO usuarios (tipoPlan)
VALUES ('Completo') WHERE totalPlan = '10.000'";
  $ResultadoAgregarReserva = $con->query($query);

if($ResultadoAgregarReserva){
  echo "<script>alert('La reserva del vehiculo $nroPlaca se ha agregado satisfactoriamente');window.location='index.html'</script>";
/* } else{
  echo "<script>alert('Los datos no se han podido guardar correctamente');window.location='index.html'</script>"; */
} 
}
?>
