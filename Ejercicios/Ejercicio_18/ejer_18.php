<?php
require "ejer_17.php";

class Garage
{
    private string $_razonSocial;
    private float $_precioPorHora;
    private array $_autos;

    public function __construct()
    {
		$params = func_get_args();
		$num_params = func_num_args();
		$funcion_constructor ='__construct'.$num_params;
		if (method_exists($this,$funcion_constructor)) 
        {
			call_user_func_array(array($this,$funcion_constructor),$params);
		}
    }

    function __construct1($razonSocial)
    {
        $this->__construct2($razonSocial,0);
    }
    function __construct2($razonSocial, $precioPorHora)
    {
        $this->_razonSocial = $razonSocial;
        $this->_precioPorHora = $precioPorHora;
        $this->_autos = array();
    }

    /*
    Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
    que mostrará todos los atributos del objeto
    */

    public function MostrarGarage()
    {
        echo("Razon Social: ".$this->_razonSocial.".<br/>");
        echo("Precio por Hora: ".$this->_precioPorHora.".<br/>");
        foreach($this->_autos as $item)
        {
            Auto::MostrarAuto($item);
        }
    }

    /*
    Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
    objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
    */

    public function Equals(Auto $auto)
    {
        $retorno = false;
        if(count($this->_autos) > 0)
        {
            foreach($this->_autos as $item)
            {
                if($item == $auto)
                {
                    $retorno = true;
                    break;
                }
            }
        }
        return $retorno;
    }

    /*
    Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
    (sólo si el auto no está en el garaje, de lo contrario informarlo).
    Ejemplo: $miGarage->Add($autoUno);
    */

    public function Add(Auto $auto)
    {
        if( !($this->Equals($auto)) )
        {
            $index = count($this->_autos);
            $this->_autos[$index] = $auto;
        }
        else
        {
            echo("El auto ya se encuentra en el Garage.");
        }
    }

    /*
    Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
    “Garage” (sólo si el auto está en el garaje, de lo contrario informarlo).   
    Ejemplo: $miGarage->Remove($autoUno);
    */

    public function Remove(Auto $auto)
    {
        if($this->Equals($auto))
        {
            $auxiliar = array_search($auto, $this->_autos);
            unset($this->_autos[$auxiliar]);
        }
        else
        {
            echo("El auto no se encuentra en el Garage.");
        }
    }

}


?>