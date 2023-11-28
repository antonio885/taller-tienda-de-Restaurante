<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <div>
            <h1>Registro</h1>
        </div>
        <div>
            <input id="nombre" type="text" placeholder="nombre">
            <input id="apellido" type="text" placeholder="apellido">
            <input id="correo" type="text" placeholder="correo">
            <input id="contraseña" type="text" placeholder="contraseña">
         <select name="rol" id="rol">
            <option value="" selected disabled>seleccionar</option>
            <option value="Empleado" >Empleado</option>
            <option value="Administrador" >Administrador</option>
         </select>

           

             </div>
             <button onclick="registrardatos()" >registrar</button>
</body>
</html>
<script src="../view/assets/js/registro.js"></script>