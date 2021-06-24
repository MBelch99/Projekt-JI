<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    <nav>
        <div>
            <a href="./index.php">Strona główna</a>
        </div>
        <div>
            <h2>Kino <span class="dobreFilmy">Dobre Filmy</span> - Panel Administratora</h2>
        </div>
    </nav>

    <section class="stats">
        <h1>Statystyki</h1>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "dobrefilmy");
            if(!$conn) {
                die("<h1>Connection failed: " . mysqli_connect_error() . "</h1>");
            }
            $titles;
            $nrTickets;
            $closesPlay;
            $titlesRes =mysqli_query($conn, 'SELECT title FROM `films`');
            $nrTicketsRes = mysqli_query($conn, 'SELECT nrOfTickets FROM `films`');
            $closesPlayRes = mysqli_query($conn, 'SELECT closesPlay FROM `films`;');
            while($row = mysqli_fetch_assoc($titlesRes)) { $titles[] = $row["title"]; }
            while($row = mysqli_fetch_assoc($nrTicketsRes)) { $nrTickets[] = $row["nrOfTickets"]; }
            while($row = mysqli_fetch_assoc($closesPlayRes)) { $closesPlay[] = $row["closesPlay"]; }
        
            $soldTicket = array(
                mysqli_fetch_row(mysqli_query($conn, 'SELECT COUNT(*) FROM `filmbooks` WHERE `filmID` = 1;'))[0],
                mysqli_fetch_row(mysqli_query($conn, 'SELECT COUNT(*) FROM `filmbooks` WHERE `filmID` = 2;'))[0],
                mysqli_fetch_row(mysqli_query($conn, 'SELECT COUNT(*) FROM `filmbooks` WHERE `filmID` = 3;'))[0],
                mysqli_fetch_row(mysqli_query($conn, 'SELECT COUNT(*) FROM `filmbooks` WHERE `filmID` = 4;'))[0]
            );
            
            for($i = 0; $i < sizeof($titles); $i++) {
                echo "<div>";
                    echo "<h2>";
                        echo $titles[$i];
                    echo "</h2>";

                   echo "<h4>Bilety: </h4>";
                   echo "<p>Ogółem: $nrTickets[$i]</p>";
                   echo "<p>Sprzedanych: $soldTicket[$i]</p>";
                   echo "<p>Zostało: ". ($nrTickets[$i] - $soldTicket[$i]) ."</p>";
                   echo "<h4>Najbliższy seans</h4>";
                   echo "<p>$closesPlay[$i]</p>";
                echo "</div>";
            }
        ?>
    </section>

    <footer">
        <p>Wszelkie prawa zastrzeżone &copy; - Kino <span class="dobreFilmy">Dobre Filmy</span></p>
        <p>Kontakt: <a href="mailto:dobrefilmy@gmail.com">dobrefilmy@gmail.com</a></p>
    </footer>
</body>
</html>