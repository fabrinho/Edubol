<?php

//For security reasons, don't display any errors or warnings. Comment out in DEV.
error_reporting(0);
//start session
session_start();

class ClaseLogin {

    var $user_table = 'usuario';          //Users table name
    var $user_column = 'nombre_usuario';     //USERNAME column (value MUST be valid email)
    var $pass_column = 'contrasenia_usuario';      //PASSWORD column

    var $encrypt = false;       //set to true to use md5 encryption for the password

    //login function
    function login($table, $username, $password) {
        //conect to DB
        $this->dbconnect();
        //make sure table name is set
        if ($this->user_table == "") {
            $this->user_table = $table;
        }
        //check if encryption is used
        if ($this->encrypt == true) {
            $password = md5($password);
        }
        //execute login via qry function that prevents MySQL injections
        $result = $this->qry("SELECT * FROM " . $this->user_table . " WHERE " . $this->user_column . "='?' AND " . $this->pass_column . " = '?';", $username, $password);
        $row = mysql_fetch_assoc($result);
        if ($row != "Error") {
            if ($row[$this->user_column] != "" && $row[$this->pass_column] != "") {
                //register sessions
                //you can add additional sessions here if needed
                $_SESSION['loggedin'] = $row[$this->pass_column];
                //userlevel session is optional. Use it if you have different user levels
//                $_SESSION['userlevel'] = $row[$this->user_level];
                return true;
            } else {
                session_destroy();
                return false;
            }
        } else {
            return false;
        }
    }

    //logout function
    function logout() {
        session_destroy();
        return;
    }
}
