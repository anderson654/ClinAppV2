<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    use Notifiable;
    protected $fillable = ['user_id', 'phone'];


    public static function  formatPhone($phone)
	{

		$novo = preg_replace("/[^0-9]/", '', $phone);
		//$chars = array("+"," ",".","/","-","*","(",")"); /* aqui indico os caracteres que desejo remover */
		//$novo = str_replace($chars, "", $numero); /* através de str_replace insiro somente os números invés de caracteres */

		//verifica se tem o 55 na frente
		$primeirosdigitos = substr($novo, 0, 2);

		if ($primeirosdigitos == 55) { //verifica se tem o 55 na frente
			$ddd_cliente = substr($novo, 2, 2);
			$numero_cliente = substr($novo, 4);
			$novo = $ddd_cliente . $numero_cliente;
		}


		if (strlen($novo) == 10) {

			$firstNumber = substr($novo, 0, 1);	//Recupera o primeiro numero


			if ($firstNumber == 0) { //verifica se o primeiro numero é igual a zero

				$ddd_cliente = substr($novo, 1, 2); // se for igaukl a zero pega somento o ddd do numero
				$numero_cliente = substr($novo, 3);	//pega o telefone se o 55 e sem o ddd
				$number = $ddd_cliente . $numero_cliente; // monta o novo numero zem o zero

			}

			$ddd_cliente = substr($novo, 0, 2); // se primeiro numero não for igual a zero , pega o ddd
			$numero_cliente = substr($novo, 2); // pega o numero
			$number = $ddd_cliente . $numero_cliente;

			$firstNumber = substr($numero_cliente, 0, 1);	//pega o primeiro digiro do numero de telefone sem o ddd


			if ($firstNumber == 1 || $firstNumber == 2 || $firstNumber == 3 || $firstNumber == 4 || $firstNumber == 5 || $firstNumber == 6) {
				// se for entre 1 e 6, não é celuar, não precisa adicionar o 9 na frente
				//dd($novo, $ddd_cliente,  $numero_cliente, $firstNumber);

			} else { // se o numeor inicial for entre 7 e 9, numero de celular.. deve-se adicionar o nove na frente
				$ddd_cliente = substr($novo, 0, 2);
				$numero_cliente = substr($novo, 2);

				$cellphone = substr_replace($numero_cliente, '9', 0, 0);
				$novo = $ddd_cliente . $cellphone;
			}
		} else {

			$firstNumber = substr($novo, 0, 1);


			if ($firstNumber == 0) {

				$ddd_cliente = substr($novo, 1, 2);
				$numero_cliente = substr($novo, 3);
				$novo = $ddd_cliente . $numero_cliente;
			}
		}

		return $novo;
	}
}
