<?php
    require 'vendor/autoload.php'; 
    session_start();
    require_once 'header.php';

    echo "<div class='center'>Bienvenido a esta página web de cursos,";

    if($loggedin) echo " $user, ya eres parte del grupo";
    else          echo 'Por favor registrese o accese';

    echo <<<_END
        </div><br>
        </div>
        <div data-role="footer">
            <h4>Aplicación web de: <i><a href='http:/localhost/socialred_v5'
            target='_blank'>Perla Paola Tut Matos<a/a></i><h4>
        </div>
    </body>
</html>
_END;
?>
