 <?php
// Codigo imperativo o spagueti 

 $automovil1 = (object)["marca"=>"Toyota", "modelo"=>"Corolla"];
 $automovil2 = (object)["marca"=>"Hyundai", "modelo"=>"Accent Vision"];
 $automovil3 = (object)["marca"=>"Toyota", "modelo"=>"Premio"];


 function mostrar($automovil){

    echo "<p>Hola! Soy un $automovil->marca, modelo $automovil->modelo</p>";
 }

mostrar($automovil1);
mostrar($automovil2);
mostrar($automovil3);


 ?>