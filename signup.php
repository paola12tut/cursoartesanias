<?php //Example 26-5: signup.php
  require_once 'header.php';

echo <<<_END
    <script>
        function checkUser(user) {
            if (user.value == '') {
                $('#used').html('&nbsp;')
                return
            }
            $.post ( 'checkuser.php', { user : user.value },
                function(data) {
                    $('#used').html(data)
                }
            )
        }
    </script>
_END;
    // Se inicializa las variables error, user y pass con vacío
     $error = $user = $pass = $correo = $curso = "";
        // Verifica si la variable user es nulo
        if (isset($_SESSION['user'])) destroySession();

        if (isset($_POST['user'])) {
            $user = sanitizeString($_POST['user']);
            $pass = sanitizeString($_POST['pass']);
            $correo = sanitizeString($_POST['correo']);
            $curso = sanitizeString($_POST['curso']);
            // Verifica si hay campos vacíos por medio del contenido de las variables user y pass
            if($user == "" || $pass == "" || $correo == "" || $curso == "")
                // En caso de haber campos vacíos se asigna el comentario correspondiente a la variable error
                $error = 'No se introdujeron todos los datos solicitados<br><br>';
            else {
                // En caso de que no esten vacíos entonces se realiza una búsqueda en la base de datos members y 
                // el resultado de la búsqueda se almacena en la variable result
                $result = queryMysql("SELECT * FROM members WHERE user='$user'");
                // Verifica si el contenido de la variable result tiene un número de registro 
                if ($result->num_rows)
                    // En caso de que la variable result contenga un número de registro se asigna un comentario
                    // a la variable error que indica que el usuario ya existe
                    $error = 'El usuario que ingreso ya existe <br><br>';
                else {
                    // En caso de que la variable no contenga un número de registro, entonces se agrega el registro
                    // a la base de datos members
                    queryMysql("INSERT INTO members VALUES('$user', '$pass', '$correo', '$curso')");
                    die('<h4>Cuenta creada</h4>Ahora por favor accese desde el menu de acceso.</div></body></html>');
                    }
                }
            }

echo <<<_END
    <form method='post' action='signup.php'>$error
        <div data-role='fieldcontain'>
            <label></label>
            Por favor ingrese sus datos para registrarse
        </div>
        <div data-role='fieldcontain'>
            <label>Usuario</label>
            <input type='text' maxlength='16' name='user' value='$user'
                onBlur='checkUser(this)'>
            <label></label><div id='used'>&nbsp;</div>
        </div>
        <div data-role='fieldcontain'>
            <label>Password</label>
            <input type='text' maxlength='16' name='pass' value='$pass'>
        </div>
        <div data-role='fieldcontain'>
            <label>Correo</label>
            <input type='text' maxlength='25' name='correo' value='$correo'>
        </div>
        <div>
            <form signup.php" method="post" target="_blank">
                <p>
                Cursos disponibles:<br><br>
                <label> <input type="radio" name="curso" value="cursoporcelana/cporcelana.html" checked> Porcelana Frío </label><br>                
                <label> <input type="radio" name="curso" value="cursotejido/ctejido.html"> Curso tejido </label> <br>           
                </p>
                <p>
                <input type="submit" value="Enviar datos" style="width:70px; height:25px">
                <input type="reset" value="Restaurar formulario">
                </p>
            </form>
        </div>        
    </body>
</html>
_END;
?>
