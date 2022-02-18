<?php

//clase:
    //una clase es un modelo que se utilizo para crear objetos que comparen un mismo comportamiento, un mismo estado e identidad.

    class Automovil{

//propiedades:
        //son las caracteristicas que puede tener un objeto.

        public $marca; 
        public $modelo;    

        //Método:
            //es el algoritmo asociado a un objeto que indica la capacidad de lo que éste puede hacer. la única diferencia entre metodo y función, es que llamamos método a las funciones de una clase (en la POO), mientras que llamamos funciones, a los algoritmos de la programación estructurada. 



        public function mostrar(){

            echo "<p>Hola! soy un $this->marca, modelo $this->modelo</p>";


        }


    }

//objeto:
    //una entidad provista de métodos o mensajes a los cuales responde propiedades con valores concreyos.

    $a = new Automovil();
    $a ->marca ="toyota";
    $a ->modelo = "Corola";
    $a ->mostrar();

    $b = new Automovil();
    $b -> marca = "Hyundai";
    $b -> modelo = "Accent vision";
    $b -> mostrar();


?>