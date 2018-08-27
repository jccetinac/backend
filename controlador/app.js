function filtrarInformacion(FiltroCiudad, FiltroTipo, FiltroMinimo, FiltroMaximo ){



	var parametrosfiltro = {
	"FiltroCiudad" : FiltroCiudad,
	"FiltroMinimo" : FiltroMinimo,
	"FiltroMaximo" : FiltroMaximo,
	"FiltroTipo" : FiltroTipo
};



$.ajax({
url: 'modelo/Filtrados.php',
type: 'post',
data:parametrosfiltro,
beforesend: function(){ $('#resultado').html ("en proceso por favor espere"); },
success: function (respuesta){
$('#resultado').html(respuesta);
}


});


}

