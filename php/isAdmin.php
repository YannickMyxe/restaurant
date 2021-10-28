<?php
    function isAdmin()
    {
        if(isset($_SESSION['roles']) && !empty($_SESSION['roles'])){
            foreach($_SESSION['roles'] as $role){
                if($role['rolenummer'] >= 8){
                    return true;
                }
            }
        }   
        else{
            return false;
        }
    }
?>