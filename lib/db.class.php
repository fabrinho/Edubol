<?php

class conexionDB {
    
    var $hostname_logon = 'localhost';      //Database server LOCATION
    var $database_logon = 'eva';       //Database NAME
    var $username_logon = 'root';       //Database USERNAME
    var $password_logon = '';       //Database PASSWORD

    //conectar

    function conectar() {
        $connections = mysql_connect($this->hostname_logon, $this->username_logon, $this->password_logon) 
                or die('Error al conectar con la base de datos');
        mysql_select_db($this->database_logon) or die('Error al seleccionar la base de datos');
        return;
    }

    //funcion para realizar una sentencia a la base de datos
    public function consulta($sentenciaSql) {

        //pg_query(conexion a base, la sencia a ejecutar)
        $query = mysql_query($sentenciaSql, $this->conectar());
        return $query;
    }

}
