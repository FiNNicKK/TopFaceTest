<?php
    include ("bdConnection.php");
    include ("ipCheck.php");
    // Keeping in mind time when the registration was.
    $time = time();
    // Input limit time for ip-checking. Used a seconds.
    $limitTime = 30*60;
    // Receiving an ip add from the user
    $ip = $_SERVER['REMOTE_ADDR'];
    $CheckIpInst = new CheckIp();

    // Some checks for setting fields of form
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        trimmer($login);
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        trimmer($password);
    }
    if (isset($_POST['status'])) {
        $status = $_POST['status'];
        trimmer($status);
    }
    // Returning back if anything wasn't filled
    if (empty($login) || empty($password)){
        exit ("You wrote only part of *necessary* information! Please turn back and input other information");
    }
    // If all is ok evoking a class function for checking ip
    elseif ($CheckIpInst->ipControl($db,$ip,$time,$limitTime)){
        mysqli_query($db,"INSERT INTO users (login,password,ip,registeryTime,currentStat) VALUES('$login','$password','$ip',$time,$status)");
    }

//func for data handling
function trimmer($string){
    stripslashes($string);
    trim($string);
    htmlspecialchars($string);
}
?>