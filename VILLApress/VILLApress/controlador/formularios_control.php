<?php
    class Frms
    {
        function frm_lsogin()
        {
            $isLoginPage = true;
            
            include('./Vista/login/frm_login.php');
        }
        function frm_login()
        {
            $isLoginPage = true;
            
            include('./Vista/login/loginView.php');
        }
    }
?>