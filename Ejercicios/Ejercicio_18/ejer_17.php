<?php
/*
Realizar una clase llamada “Auto” que posea los siguientes atributos privados:
_color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)

*/

class Auto
{
    private String $_color;
    private float $_precio;
    private String $_marca;
    private DateTime $_fecha;

    /*
    Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:
    i. La marca y el color.
    ii. La marca, color y el precio.
    iii. La marca, color, precio y fecha.
    */
    public function __construct()
    {
		//obtengo un array con los parámetros enviados a la función
		$params = func_get_args();
		//saco el número de parámetros que estoy recibiendo
		$num_params = func_num_args();
		//cada constructor de un número dado de parámtros tendrá un nombre de función
		//atendiendo al siguiente modelo __construct1() __construct2()...
		$funcion_constructor ='__construct'.$num_params;
		//compruebo si hay un constructor con ese número de parámetros
		if (method_exists($this,$funcion_constructor)) 
        {
			//si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
			call_user_func_array(array($this,$funcion_constructor),$params);
		}
    }

    function __construct2($marca, $color)
    {
        $this->__construct3($marca,$color,0);
    }
    function __construct3($marca, $color, $precio)
    {
        $fechaAux = date_create('1900/01/01');
        $this->__construct4($marca,$color,$precio,$fechaAux);
    }
    function __construct4($marca, $color, $precio, $fecha)
    {
        $this->_marca = $marca;
        $this->_color = $color;
        $this->_precio = $precio;
        $this->_fecha = $fecha;
    }

    /*
    Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por
    parámetro y que se sumará al precio del objeto.
    */
    public function AgregarImpuestos(float $impuesto)
    {
        $this->_precio += $impuesto;
    }

    /*
    Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
    por parámetro y que mostrará todos los atributos de dicho objeto.
    */
    public static function MostrarAuto(Auto $auto)
    {
        echo("Marca: "); echo($auto->_marca);
        echo(" - Color: "); echo($auto->_color);
        echo(" - Precio: "); echo($auto->_precio);
        echo(" - Fecha: "); echo($auto->_fecha->format('d/m/Y'));
        echo("<br/>");
    }

    /*
    Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
    devolverá TRUE si ambos “Autos” son de la misma marca.
    */ 

    public function Equals(Auto $auto2)
    {
        $retorno = false;
        if($this->_marca == $auto2->_marca)
        {   
            echo("$retorno");
            $retorno = true;
        }
        return $retorno;
    }

    /*
    Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
    de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
    la suma de los precios o cero si no se pudo realizar la operación.
    Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
    */
    public static function Add(Auto $auto1, Auto $auto2)
    {   
        $retorno = 0;
        if( $auto1->Equals($auto2) &&
            $auto1->_color == $auto2->_color)
        {
            $retorno = ($auto1->_precio + $auto2->_precio);
        }
        return $retorno;
    }

}


?>