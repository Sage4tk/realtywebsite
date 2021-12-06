<?php
    include "../db.php";
    include "../functions.php";

    if (propertyFormChecker($_POST['property'], $_POST['city'], $_POST['description'], $_POST['price'], $_POST['date'], $_POST['url'])) {
        $property = $_POST['property'];
        $city = $_POST['city'];
        $desc = $_POST['description'];
        $price = $_POST['price'];
        $date = $_POST['date'];
        $url = $_POST['url'];
        $url2 = $_POST['url2'];
        $url3 = $_POST['url3'];
        $url4 = $_POST['url4'];

        $sql = "INSERT INTO posts (property, city, description, price, date, url, url2, url3, url4) VALUES ('$property', '$city', '$desc', '$price', '$date', '$url', '$url2', '$url3', '$url4')";

        $insert = $db->query($sql);

        if ($insert === TRUE) {
            echo "Inserted";
        } else {
            echo $db->error;
        }
    } else {
        header("Location: /admin.php?error=invalid&section=add-property");
        exit();
    }
?>