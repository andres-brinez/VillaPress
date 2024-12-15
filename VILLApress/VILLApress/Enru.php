<!-- Llamar controlador e iniciador-->
<?php
    //validar inicio de pagina
    if(isset($_GET['clase']) && isset($_GET['funcion'])){
        //Llamar informacion de la pagina inicial
        $clase = $_GET['clase'];
        $funcion = $_GET['funcion'];
        //enviar datos a funcion llamar
        llamar($clase,$funcion);
    }
    else{
      $clase = 'paginas';
      $funcion = 'principal';
      //enviar datos a funcion llamar
      llamar($clase,$funcion);
    }

    function llamar($clase,$funcion)
    {
        //llamar carpeta controlador y archivo
        require_once("controlador/".$clase."_control.php");
        switch ($clase) 
        {
            case 'paginas':
                # instancia
                $control = new home();
                break;
            case 'formularios':
                # instancia
                $control = new Frms();
                break;
            case 'empleados' : $control = new EmpleadosControl();
		        break;
        }
        //lamar a funcion
        $control->{$funcion}();
    }
?>