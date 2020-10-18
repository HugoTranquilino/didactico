<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>source/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>source/css/principal.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
</head>
<body>
    <input type="text" value="<?php echo base_url();?>" hidden="true" id="url">
    <div class="container">
        <form id="buscador" method="POST">
            <div class="espacio">
                <label class="form-group" for="">Buscar datos</label>
                <input type="text" class="form-control" id="nombre_persona">
                <button type="button" class="btn btn-outline-warning esp" id="buscar"> Buscar</button>
            </div>
        </form>
    </div>
</body>

<script type="text/javaScript" src="<?php echo base_url("source/js/jquery-3.5.1.js")?>"></script>
<script type="text/javaScript" src="<?php echo base_url("source/js/jquery-3.5.1.slim.min.js")?>"></script>
<script type="text/javaScript" src="<?php echo base_url("source/js/jquery-3.2.1.min.js")?>"></script>
<script type="text/javaScript" src="<?php echo base_url("source/js/bootstrap.bundle.min.js")?>"></script>
<script type="text/javaScript" src="<?php echo base_url("source/js/acciones.js")?>"></script>
</html>