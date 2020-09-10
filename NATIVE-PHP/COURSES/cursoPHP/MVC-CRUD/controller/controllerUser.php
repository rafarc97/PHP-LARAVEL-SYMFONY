 <?php

    require_once("model/modelUser.php");

    $user = new modelUser();
    $matrizUsers = $user->getUsers();
    
    require_once("view/viewUser.php");

?>