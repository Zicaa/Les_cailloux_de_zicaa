<?php
if(isset($_COOKIE["username"]))
{
    echo "<script type='text/javascript'>alert('Bienvenue ". $_COOKIE["username"] ."');</script>";
    echo "<script type='text/javascript'>
    const titre=document.getElementById('bienvenue');
    titre.innerHTML='Bienvenue ". $_COOKIE["username"] ."';
    </script>";
}else{
    echo "<script type='text/javascript'>alert('Bienvenue cher client');</script>";
}

?>