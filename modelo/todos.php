<?php $data=file_get_contents("../data-1.json");
$propiedades=json_decode($data,true); ?>

<?php 
for ($i = 0; $i <= count($propiedades); $i++) {

 $dir=$propiedades[$i]["Direccion"];
 $ciudad=$propiedades[$i]["Ciudad"];
 $tel=$propiedades[$i]["Telefono"];
 $postal=$propiedades[$i]["Codigo_Postal"];
 $tipo=$propiedades[$i]["Tipo"];
 $precio=$propiedades[$i]["Precio"];
?> 

<div class="item">
<?php
echo $dir."<br>";
echo $ciudad."<br>";
echo $postal."<br>";
echo $tel."<br>";
echo $tipo."<br>";
echo $precio."<br>";
?>

</div>
<?php } ?>