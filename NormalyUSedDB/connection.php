



<?php


try
{
    $connection = mysqli_connect('localhost','root','','prod');
    echo 'connected successfully';
}
    catch(Exception $e)
    {
        echo $e->getMessage();
    }


?>