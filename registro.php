<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Departamento de Cultura y Deportes </title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="fonts.css">
	<style type="text/css">
	body {
	background-color: #ccff99;
}
    </style>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Departamento de Actividades Culturales y Deportivas</a>
		</div>

		<nav>
			<ul>
				<li><a href="#"><span class="#">Cultura y Deportes</span></a></li>
				<li><a href="index.html"><span class="icon-home2"></span>Inicio</a></li>
				<li><a href="informacion.php"><span class="icon-books"></span>Informacion</a></li>
				<li><a href="registro.php"><span class="icon-pencil"></span>Registro</a></li>
				<li><a href="login.php"><span class="icon-user"></span>Login</a></li>
				


			</ul>
		</nav>
	</header>

	<section>

<head>
     <meta charset="uft-8">
     <link rel="stylesheet" href="bootstrap/css/bootstrap-css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
     <link rel="stylesheet" type="text/css" href="estilos/estilos.css"><center><h1>Bievenidos al Sistema de Actividades Culturales y Deportivas /h1></center>
     
</section>
<center>
	<script src="http://code.jquery.com/jquery-latest.js"></script><script src="menu.js"></script>


<html lang=es-BO>
<head>
<title></title>
<link href="css/keyquotes_formulario_flat_design/keyquotes_formulario_flat_design/style/index_style.css" rel="stylesheet" type="text/css">
<link href="css/boton.css" rel="stylesheet" type="text/css">

<?php
include("conexion.php");
?>

<style media="screen">
	form 
	{
		width: 25%;
		margin: 0 auto;
	}

	form label
	{
		display: block;
	}
	form input[type="submit"]
	{
		float: right;
	}
</style>
<script>
	function validacion (id){
		var elem=document.getElementById(id);
		if (elem.checkValidity())
			elem.style.borderColor="blue";
		else
			elem.style.borderColor="red;";
	}
	function enviado()
	{
		var nValido=document.getElementById('n').checkValidity();
		var apValido=document.getElementById('ap').checkValidity();
		var amValido=document.getElementById('am').checkValidity();
		var maValido=document.getElementById('ma').checkValidity();
		var caValido=document.getElementById('ca').checkValidity();
		var edValido=document.getElementById('ed').checkValidity();
		var seValido=document.getElementById('se').checkValidity();
		var sValido=document.getElementById('s').checkValidity();
		if(nValido, apValido, amValido, maValido, caValido, edValido, seValido, sValido)
			alert("La informacion fue enviada exitosamente");
		else
			alert("Hay campos incompletos o no cumplen con el formato solicitado");

	}

</script>
</head>
<body>


<title>Registro</title>


<body>
	
	
		<input type="text" name="no" placeholder="Nombre" id="no" oninput="validacion('no')" required pattern="([A-Z ]{4,20})" maxlength="20"/>	

		<input type="text" name="ap" placeholder="Apellido Paterno" id="ap" oninput="validacion('ap')" required pattern="([A-Z ]{5,20})" maxlength="20"/>

		<input type="text" name="am" placeholder="Apellido Materno"  id="am" oninput="validacion('am')" required pattern="([A-Z ]{5,20})" maxlength="20"/>

		<input type="text" name="ed" placeholder="Edad"  id="ed" oninput="validacion('ed')" required pattern="([0-9 ]{2,2})" maxlength="2"/>

		<input type="text" name="se" placeholder="Genero" id="se" oninput="validacion('se')" required pattern="([0-9 ]{5,6})" maxlength="6"/>

		<input type="text" name="ca" placeholder="Carrera" id="ca" oninput="validacion('ca')" required pattern="([A-Z ]{15,50})" maxlength="50"/>

		<input type="text" name="ma" placeholder="Matricula"  id="ma" oninput="validacion('ma')" required pattern="([0-9 ]{9,9})" maxlength="9"/>

		<input type="text" name="s" placeholder="Semestre"  id="s" oninput="validacion('s')" required pattern="([0-9 ]{1,1})" maxlength="1"/>

		<div>
		<br /><label for=""> Seleccione la actividad que desea realizar </label>
		<select name= "Actividades Complementarias"> 
			<OPTION value="act">  ----- Actividad Complementaria -----  </OPTION>
			<OPTION value="act">Futbol</OPTION>
			<OPTION value="act">Baloncesto</OPTION>
			<OPTION value="act">Taebo</OPTION>
			<OPTION value="act">Taewkondo</OPTION>
			<OPTION value="act">Zumba</OPTION>
			<OPTION value="act">Ajedrez</OPTION>
			<OPTION value="act">Rubik</OPTION>
			</select>
			</div>

		<input type="submit" value="Enviar"/>


		</section>
	</fieldset>
	</form>
</body>
</html>

<?php
 
 if($_POST){

$nom=$_POST['no'];
$ap=$_POST['ap'];
$am=$_POST['am'];
$ed=$_POST['ed'];
$ma=$_POST['ma'];
$ca=$_POST['ca'];
$s=$_POST['s'];
$se=$_POST['se'];


$q1="INSERT INTO alumnos (nombre_a, apellido_paterno, apellido_materno, edad, matricula, carrera, semestre, sexo) 
VALUES ('$no', '$ap', '$am', '$ed', '$ma', '$ca', '$s', '$se')";
$resultados=$link->query($q1);

echo "<center><h2>Dato Guardado</h2></center>";

 }

 ?>


<footer>
        <div class='define'>

        <center><font color="gray"><p>Tecnologico de Estudios Superiores de Ixtapaluca</p></font></center>            

            <center><font color="gray"><p>CKm. 7 de la carretera Ixtapaluca-Coatepec s/n San Juan, Distrito de Coatepec, Ixtapaluca, Estado de México C.P.56580, Tel. ( 055 ) 13148152 ext. 129.</p></font></center>


        </div>
    </footer>