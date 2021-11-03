<?php include ('header.php');?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>REPUESTOS:</h1>
			</div>

			<div class="articulo">
			<html>
   
   <head>
      <p>Llena el siguiente formulario para encontrar la pieza o acude a tu sucursal mas cercana:</p>
   </head>
   
   <body>

   
      <form method = "post" action = "/php/php_form_introduction.htm">
         <table>
            
               <td>Selecciona la <br> marca de tu automovil:</td>
               <td>
                  <select name = "subject[]" size = "4" multiple>
                     <option value = "Android">Nissan</option>
                     <option value = "Java">Volkswagen</option>
                     <option value = "C#">Toyota</option>
                     <option value = "Data Base">KIA</option>
                     <option value = "Hadoop">Mazda</option>
                     <option value = "VB script">Honda</option>
                     <option value = "VB script">Ford</option> 
                  </select>
               </td>
            </tr>
            
            
            <tr>
               <td>Especifica que repuesto requieres:</td>
               <td><input type = "text" name = "website"></td> 
            </tr>
            
			<tr>
               <td>Selecciona el año de tu vehiculo:</td>
               <td>
                  <select name = "subject[]" size = "4" multiple>
                     <option value = "Android">2010</option>
                     <option value = "Java">2011</option>
                     <option value = "C#">2012</option>
                     <option value = "Data Base">2013</option>
                     <option value = "Hadoop">2014</option>
                     <option value = "VB script">2015</option>
                     <option value = "VB script">2016</option>
                     <option value = "VB script">2017</option>
                     <option value = "VB script">2018</option>
                     <option value = "VB script">2019</option>
                     <option value = "VB script">2020</option>
                     <option value = "VB script">2021</option> 
                  </select>
               </td>
            </tr>
         
            
            <tr>
               <td>Detalles:</td>
               <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td> 
            </tr>
         
            <tr>
               <td>
                  <input type = "submit" name = "submit">
               </td>
            </tr>
            
         </table>
      </form>
      <p>Te enviaremos un correo con la actualizacion del producto deseado.</p>
   </body>
</html>
	</div>
		<center> <img src="imagen4.jpg"></center>
		</div>
	</section>
<?php include('footer.php'); ?>
</body>
</html> 