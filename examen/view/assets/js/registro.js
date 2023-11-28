function registrardatos(){
    let variables = `nombre=${nombre.value}&apellido=${apellido.value}&correo=${correo.value}&contrasena=${contraseña.value}&rol=${rol.value}`
    const datas = {
        method: "POST",
        body: variables,
        headers:   {
            "Content-Type": "application/x-www-form-urlencoded"
        } 

    }
    fetch("../controllers/registrocontroller.php",datas)
    .then(response => response.json())
    .then(data => {
        console.log(data)
    })
}