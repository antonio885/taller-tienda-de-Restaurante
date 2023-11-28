<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <div>
        <div>
         <h1>pedidos</h1>
        </div>
        <div>
            <select onclick="productPrecio()" name="" id="selectProduct">
                <option value="seleccionar" selected disabled >seleccionar</option>
                <option value="Hamurguesa">Hamurguesa</option>
                <option value="Pizza">Pizza</option>
            </select>

        </div>
        <div>
            <input type="number" id="cantidadProducts" placeholder="cantidad">
         
            <h1 id="totalProduct"></h1>
        </div>
        <div>
           <h2 id="precioProducto"></h2>
        </div>
        <div>
        <table id="tablerol" class="table table-dark ">
      <thead>
        <tr>

          <th scope="col" width="30%">ingrediente</th>
          <th scope="col" width="20%">precio</th>
      
        </tr>
      </thead>
      <tbody id="tableBOdypoke">

      </tbody>
    </table>
        </div>
        <div>
            <button onclick="pedidocompleto()">enviar</button>
        </div>
    </div>
</body>
</html>
<script src="../view/assets/js/pedido.js"></script>