<!DOCTYPE html>
<html>
        <?php
            session_start();
            $_SESSION["sessionconnect"]="null";
            header('Location: ../index.php');
            // session_destroy();
            exit;
        ?>

</html>
