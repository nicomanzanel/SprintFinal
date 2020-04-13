@include('header')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <title>Preguntas Frecuentes - Tecno Movil</title>
    </head>
<body>
    <h1>AGREGAR PRODUCTOS</h1>
    <ul>
       @foreach ($errores as $error) 
        <li>
            {{error}}
        </li> 
        @endforeach
    </ul>
   
        
    @endforeach
    
    <form class="agregarProducto" action="" method="post" enctype="multipart/form-data">  
        <input type="hidden" name="submitted" id="submitted" value="1">
                <div class="form-row">
                   <div class="form-group col-md-7 m-auto">
                       <label for="marca"> Marca:</label>
                       <input type="name" class="form-control" name="marca" id="marca" value="" placeholder="Marca" required>
                   </div>
                   <div class="form-group col-md-7 m-auto">
                    <label for="imagen"> Imagen:</label>
                    <br>
                    <input type="file" class="" name="imagen" id="marca" value=""  required>
                </div>
                <br><br>
                   <div class="form-group col-md-7 m-auto">
                       <label for="modelo"> Modelo:</label>
                       <input type="modelo" class="form-control" name="modelo" value=""  id="modelo" placeholder="Modelo" required>
                   </div>
                   <div class="form-group col-md-7 m-auto ">
                           <label for="exampleFormControlTextarea1">Caracteristicas</label>
                           <textarea class="form-control" name="caracteristicas" value=""  id="exampleFormControlTextarea1" rows="3" cols="80"></textarea>
                         </div>
                   <div class="form-group col-md-7 m-auto">
                    <label for="precio"> Precio:</label>
                    <input type="precio" class="form-control" name="precio" value=""  id="precio" placeholder="Precio">
                </div>
                <div class="form-group col-md-7 m-auto">
                    <label for="strock"> Stock:</label>
                    <input type="stock" class="form-control" name="stock" value=""  id="stock" placeholder="Stock">
                </div>
                   <br>
                   
                 <br><br>
                 
                 
               </div>
             <button type="submit" name="submit" class="boton1">Guardar</button>
           </form>
           <br> 
</body>
</html>
@include('footer')
