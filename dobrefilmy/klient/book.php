<style>
    <?php include "./css/book.css"; ?>
</style>

<?php
    if(isset($_POST["bookNemo"]) || isset($_POST["bookPSY"]) || isset($_POST["bookAUTA"]) || isset($_POST["bookBadBoys"])) {
        $filmID;
        if(isset($_POST["bookNemo"])) {
            $filmID = 1;
        } else if(isset($_POST["bookPSY"])) {
            $filmID = 2;
        } else if(isset($_POST["bookAUTA"])) {
            $filmID = 3;
        } else if(isset($_POST["bookBadBoys"])) {
            $filmID = 4;
        }

        $conn = mysqli_connect("localhost", "root", "", "dobrefilmy");
        if(!$conn) {
            die("<h1 class='centerMsg'>Connection failed: " . mysqli_connect_error() . "</h1>");
        }

        $sql = 'INSERT INTO `filmbooks`(`date`,`numberOfPersons`,`filmID`) VALUES ("'.$_POST["date"].'", '.$_POST["nrOfPersons"].', '.$filmID.')';
        $res = mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0) {
            echo "<h1 class='centerMsg'>Twoja rezerwacja została przyjęta!</h1>";
        } else {
            echo "<h1 class='centerMsg'>Coś poszło nie tak, spróbuj ponownie później.</h1>";
        }
        
    } else {
        echo "<h1 class='centerMsg'>Najpierw wypełnij formularz!</h1>";
    }
    echo "<a href='./index.php'>Wróć na stronę główną</a>";
?>