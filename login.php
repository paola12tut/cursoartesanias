<?php
    require 'vendor/autoload.php';
    require_once 'header.php';
    $error = $user = $pass = "";

    if (isset($_POST['user']))
    {
        $user = sanitizeString ($_POST['user']);
        $pass = sanitizeString($_POST['pass']);       

        // Verifica que se hayan capturado tanto usuario como password
        // Si el usuario o el password no fueron capturados asigna a la variable error el aviso correspondiente
        if($user == "" || $pass == "")
            $error = 'No todos los campos fueron introducidos';
        else
        {
            // Encaso de que si se hayan capturado completo, entonces se realiza la búsqueda 
            // de los datos en la BD y el resultado de la fila donde se encontró se almacena
            // en la variable result o si no lo encontro le asigna cero.
            $result = queryMySQL("SELECT user, pass, curso From members
            WHERE user = '$user' AND pass = '$pass'");     
            
            // Asignamos el resultado de la búsqueda al arreglo $fila
            $fila = $result->fetch_object();
	        
            // Verifica si la variable result trae el valor cero y en ese caso se asigna el error correspondiente
            // a la variable error
            if ($result->num_rows == 0)
            {
                // Se asigna el error de usuario no encontrado en caso de que el valor de result sea cero
                $error = "No se encontro al usuario";
            }
            // En caso contrario, es decir si se encontro al usuario
            else
            {
                // Se llena el arreglo con los datos del usuario y password
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass;               

                // Asignamos el nombre de la página que esta en la celda curso edl arreglo fila a la variable liga.
                $liga=$fila->curso;
                // Enlace Para salir de esta página e ir a la página del curso según indique
                // la variable liga
                die("<div class='center'>Ahora accesa. Por favor
                    <a data-transition='slide' href=$liga> clic aqui
                    para continuar.</a></div><body/></html>");
            }
        }
    }

    echo <<<_END
            <form method= 'post' action='login.php'>
                <div data-role='fieldcontain'>
                    <label></label>
                    <span class = 'error'>$error</span>
                </div>
                <div data-role-'fieldcontain'>
                    <label></label>
                    Por favor introduzca sus datos para accesar
                </div>
                <div data-role='fieldcontain'>
                    <label>Username</label>
                    <input type='text' maxlength='16' name='user' value='$user'>
                </div>
                <div data-role='fieldcontain'>
                    <label>Password</label>
                    <input type='password' maxlength='16' name='pass' value='pass'
                </div>
                <div data-role='fieldcontain'>
                    <label></label>
                    <input data-transition='slide' type='submit' value='Entrar'>                
                </div>                      
    </div>          
            </form>
        </div>
    </body>
</html>
_END;
?>

