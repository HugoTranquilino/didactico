$(document).ready(function(){
    const url = $('#url').val();
    // console.log(url);
    $('#buscar').click(function(){
        var busca_cadena = $('#nombre_persona').val();        
        // console.log(busca_cadena);
        // return;
        $.ajax({
            // url: `http://127.0.0.1/proyecto/index.php/C_consulta/buscar/principal/`
            url: `${url}index.php/C_consulta/buscar/`,
            type: 'POST',
            data:{nombre:busca_cadena},
            // dataType:'html',
            success:function(respuesta){
                console.log('todo bien');
                alert(respuesta);
                // console.log(respuesta);
            },
            error:function(respuesta){
                console.log('algo salio mal');
                console.log(respuesta);
            }
        });
    });
}); 