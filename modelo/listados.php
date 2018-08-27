<select name="ciudad" id="selectCiudad">
<option value="elige" selected>Elige una ciudad</option>
<?php
$data = file_get_contents("data-1.json");

$propiedades = json_decode($data);
$ciudades = [];
foreach ($propiedades as $key => $json) {
$ciudades[] = $json->Ciudad;
}
$ciudades = array_unique($ciudades);
foreach ($ciudades as $ciudad) {

echo "<option";
echo " value='";
echo $ciudad;
echo "'>";
echo $ciudad."</option>";
}
?>
</select>
