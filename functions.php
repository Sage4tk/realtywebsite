<?php
    //property form checker
    function propertyFormChecker($property, $city, $desc, $price, $date, $url) {
        if (isset($property) || isset($city) ||  isset($desc) || isset($price) || isset($date) || isset($url)) {
            if (empty(trim($property)) || empty(trim($city)) || empty(trim($desc)) || empty(trim($price)) || empty(trim($date)) || empty(trim($url))) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }
?>