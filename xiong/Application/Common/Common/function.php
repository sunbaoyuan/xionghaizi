<?php
function isLogins(){
    if (!isset($_SESSION['userid']) || $_SESSION['userid']==''|| $_SESSION['username']=='') {
        return false;
    }
    return true;
}


function isLogin(){
    if (!isset($_SESSION['adminname']) || $_SESSION['adminname']=='') {
        return false;
    }
    return true;
}
