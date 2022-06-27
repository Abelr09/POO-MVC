<?php
//Clase:
//Es un modelo que se utiliza para crear obejetos 
//que comparten un mismo comportamiento, estado e identidad

class Automovil{
//Propiedades: 
public $marca;
public $modelo;

//Metodo
 public function mostrar(){
    echo "<p>Hola soy un $this->marca, modelo $this->modelo</p>";


 }
}
//Objeto

$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "Hyundai";
$b -> modelo = "Accen Vision";
$b -> mostrar();

$c = new Automovil();
$c -> marca = "Toyota";
$c -> modelo = "Bitz";
$c -> mostrar();
 

?>