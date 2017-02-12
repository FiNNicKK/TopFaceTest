<?php
class CheckIp{
    public function ipControl($db,$ipForTest,$time,$accesableTime)
    {
        // Creating a query for our bd. False in response if there isn't any points of this ip
        $query = mysqli_query($db, "SELECT registeryTime FROM users WHERE ip='$ipForTest'");
        if (!$query) {
            $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
            // Time check - when was last registration time from this ip
            if ($time - $result['registeryTime'] > $accesableTime) {
                mysqli_free_result($query);
                return false;
            }
        }
        return true;
    }
}