<?php
    class home
    {
        function principal()
        {
            include('Vista/Plantilla/Menu.php');
            include('Vista/Paginas/Home.php');
            include('Vista/Plantilla/Footer.php');
        }//fin funcion principal
        function nosotros()
        {
            include('Vista/Plantilla/Menu.php');
            include('Vista/Paginas/Nosotros.php');
            include('Vista/Plantilla/Footer.php');
        }//fin funcion nosotros
        function servicios()
        {
            include('Vista/Plantilla/Menu.php');
            include('Vista/Paginas/Servicios.php');
            include('Vista/Plantilla/Footer.php');
        }//fin funcion servicios
        
    }//fin clase home
?>