<?php
/**
* practica-cabeza.php
*
* Este script PHP implementa una calculadora simple con funciones para realizar operaciones de suma y resta.
*
* @package Calculadora
* @author Juan Antonio Cabeza Guisado
* @version 1.0
*/

/**
* Suma dos números.
* 
* Esta función recibe dos números como parámetros y devuelve la suma de ambos.
*
* @param float $a El primer número a sumar.
* @param float $b El segundo número a sumar.
* @return float La suma de los dos números.
* @internal Este es un comentario interno que solo debería ser visible en la documentación para desarrolladores. Segunda version 
*/
function sumar(float $a, float $b) {
return $a + $b;
}

/**
* Resta dos números.
*
* Esta función recibe dos números como parámetros y devuelve la diferencia entre el primero y el segundo.
* 
* @param float $a El número del cual se restará el segundo número.
* @param float $b El número que se restará del primer número.
* @return float La diferencia entre los dos números.
*/
function restar(float $a, float $b) {
return $a - $b;
}

?>