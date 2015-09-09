<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/principal.css">
        <title>Plataforma de Apredizaje</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <h1>EDUBOL</h1>
                <h4>Plataforma Virtual de Aprendizaje</h4>
            </div>
            <div id="content"></div>
            <div id="form-main">
                <div id="form-div">
                    <form class="form" id="form1" action="login.php" method="POST">

                        <p class="name">
                            <input name="username" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nombre de Usuario" id="name" />
                        </p>

                        <p class="email">
                            <input name="password" type="password" class="validate[required,custom[email]] feedback-input" id="email" placeholder="***********" />
                        </p>

                        <div class="submit">
                            <input type="submit" value="Ingresar" id="button-blue"/>
                            <div class="ease"></div>
                        </div>
                    </form>
                </div>
                <div id="footer">
                    <p>© 2015 Edubol Version 1.0 | EduSoft.</p>
                </div>
            </div>
        </div>
    </body>
</html>
