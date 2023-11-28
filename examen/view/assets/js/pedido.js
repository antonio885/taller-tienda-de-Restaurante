const pedidoss = []
const total = []
function readtable(){
    let tabla = ""
    fetch("../controllers/pedidocontroller.php")
    .then(response => response.json())
    .then(data =>{
// console.log(data);
data.forEach(element => {
    tabla += `<tr>`;
    tabla += `<td>${element.topping}</td>`;
    tabla += `<td>${element.precio}</td>`; 
    tabla += `<td>  
    <div class="form-check form-switch">
    <input onclick="pedidoCustoms(${element.id})" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
    <label class="form-check-label text-white" for="flexSwitchCheckDefault"></label>
  </div>
  </td>`;
    tabla += `</tr>`;
});
document.getElementById("tableBOdypoke").innerHTML = tabla;
    })
}


function pedidoCustoms(id){
fetch(`../controllers/guardartopping.php?id=${id}`)
.then(response => response.json())
.then(data =>{
console.log(data)
data.forEach(element =>{
    const topping =  element.topping
    const precio = parseInt(element.precio)
    
    pedidoss.push({
       "toppings": topping,
        "precio": precio
    })
})

// let topping = data[0].toppings
// let precio = data[0].precio

})

}


function cantidadProduct(){
  if(pedidoss.length >= 5){
    let suma = 0
  
    pedidoss.forEach(element =>{  
      
        suma +=  element.precio
        
        
   
});

let cantidad = document.getElementById("cantidadProducts").value 
    let totals =  parseInt((precioProducto.innerHTML * cantidad)+suma)
    total.push({
        "price":  totals   
    })
  document.getElementById("totalProduct").innerHTML = totals
  }
   

//        arreglo.forEach(arreglo =>{
// suma += parseInt(arreglo.precio + precioProducto.innerHTML)
// total.push(suma)
//        })

}

const dat = []
function pedidocompleto(){
    cantidadProduct()
let totales = 0
if (pedidoss.length >= 5) {
    dat.push( pedidoss.map(element => element.toppings))
    const toppings = dat.concat()
    const precio = pedidoss.reduce((totals, element) => totals + element.precio, 0);

total.forEach(element =>{
     totales +=parseInt(element.price)

    let datos = `producto=${selectProduct.value}&precioProducto=${precioProducto.innerHTML}&topping=${toppings}&precio=${precio}&total=${totales}`;
    const options = {
        method: "POST",
        body: datos,
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        }
    };
    fetch("../controllers/subirProducto.php", options)
    .then(response => response.json())
    .then(data => {
        console.log(data);
       
})
  
 
});
}else{
    alert("contenido invalido")
  
}




    // let datos = new URLSearchParams();
    // datos.append("producto", selectProduct.value);
    // datos.append("precioProducto", precioProducto.innerHTML);
    // datos.append("topping", topping);
    // datos.append("precio", precio);
   
  
    
   
    
}

function productPrecio(){
    if(selectProduct.value === "Hamurguesa"){
        document.getElementById("precioProducto").innerHTML = "5000"
    }else if(selectProduct.value === "Pizza"){
        document.getElementById("precioProducto").innerHTML = "4000"
    
    }
    
}

// cantidadProduct()
productPrecio()
readtable()
