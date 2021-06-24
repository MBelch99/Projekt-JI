<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <nav>
        <div>
            Kino <span class="dobreFilmy">Dobre Filmy</span>
        </div>
        <ul>
            <li>
                <a href="#bookTicket">Zarezerwuj bilet na film</a>
            </li>
            <li>
                <a href="#aboutUs">O nas</a>
            </li>
            <li>
                <a href="#contact">Kontakt</a>
            </li>
        </ul>
    </nav>
    
    <header class="bookTicket" id="bookTicket">
        <div class="content">
            <h2>Zarezerwuj bilet na swój wymarzony film!</h2>
            <h4>Nasz repertuar jest stale aktualizowany, zaglądaj tu częściej!</h4>

            <div class="filmGrid">
                <div class="row">
                    <div>
                        <h4>Gdzie jest nemo?</h4>
                        <p>Najbliższy seans już 29.06.2021</p>
                        <img src="./img/nemo.jpg" alt="Gdzie jest nemo?">
                        <a id="demoBtn" class="bookBtn">Rezerwuj</a>
                    </div>

                    <div>
                        <h4>PSY</h4>
                        <p>Najbliższy seans już 03.07.2021</p>
                        <img src="./img/psy.jpg" alt="PSY">
                        <a id="psyBtn" class="bookBtn">Rezerwuj</a>
                    </div>
                </div>

               <div class="row">
                    <div>
                        <h4>AUTA</h4>
                        <p>Najbliższy seans już 28.06.2021</p>
                        <img src="./img/auta.jpg" alt="AUTA">
                        <a id="autaBtn" class="bookBtn">Rezerwuj</a>
                    </div>

                    <div>
                        <h4>Bad boys</h4>
                        <p>Najbliższy seans już 29.06.2021</p>
                        <img src="./img/badboys.jpg" alt="Bad boys">
                        <a id="badboysBtn" class="bookBtn">Rezerwuj</a>
                    </div>
               </div>
            </div>
        </div>
    </header>

    <section id="bookForm" class="bookFormBox">
        <form class="bookForm" id="nemo" action="./book.php" method="POST">
            <h4>Rezerwuj bilet</h4>
            <p id="filmTitle">na film "Gdzie jest nemo?"</p>
            <div>
                <label for="date">Data seansu: </label>
                <input type="date" id="date" name="date">
            </div>
            <div>
                <label for="nrOfPersons">Ilość osób: </label>
                <input type="number" id="nrOfPersons" name="nrOfPersons" min="1">
            </div>
            <div class="submitBox">
                <input type="submit" name="bookNemo" value="Rezerwuje">
            </div>
        </form>

        <form class="bookForm" id="psy" action="./book.php" method="POST">
            <h4>Rezerwuj</h4>
            <p id="filmTitle">na film "PSY"</p>
            <div>
                <label for="date">Data seansu: </label>
                <input type="date" id="date" name="date">
            </div>
            <div>
                <label for="nrOfPersons">Ilość osób: </label>
                <input type="number" id="nrOfPersons" name="nrOfPersons" min="1">
            </div>
            <div class="submitBox">
                <input type="submit" name="bookPSY" value="Rezerwuje">
            </div>
        </form>

        <form class="bookForm" id="auta" action="./book.php" method="POST">
            <h4>Rezerwuj</h4>
            <p id="filmTitle">na film "AUTA"</p>
            <div>
                <label for="date">Data seansu: </label>
                <input type="date" id="date" name="date">
            </div>
            <div>
                <label for="nrOfPersons">Ilość osób: </label>
                <input type="number" id="nrOfPersons" name="nrOfPersons" min="1">
            </div>
            <div class="submitBox">
                <input type="submit" name="bookAUTA" value="Rezerwuje">
            </div>
        </form>

        <form class="bookForm" id="badboys" action="./book.php" method="POST">
            <h4>Rezerwuj</h4>
            <p id="filmTitle">na film "Bad Boys"</p>
            <div>
                <label for="date">Data seansu: </label>
                <input type="date" id="date" name="date">
            </div>
            <div>
                <label for="nrOfPersons">Ilość osób: </label>
                <input type="number" id="nrOfPersons" name="nrOfPersons" min="1">
            </div>
            <div class="submitBox">
                <input type="submit" name="bookBadBoys" value="Rezerwuje">
            </div>
        </form>
    </section>

    <section class="aboutUs" id="aboutUs">
        <h2>Kino <span class="dobreFilmy">Dobre Filmy</span></h2>
    
        <p>Filmy w naszych kinach możecie podziwiać już od 2007 roku gdy to został otwarty nasz pierwszy punkt w Krakowie. Obecnie nasze kina znajdują się w ponad 80 miastach! Jesteśmy niezmiernie zmobilizowani by codziennie dostarczać Wam rozrywki!</p>
        <p>Możecie nas również odwiedzić na naszym fanpage'u: <a href="https://www.facebook.com/">Dobre filmy</a></p>
    </section>

    <footer id="contact">
        <p>Wszelkie prawa zastrzeżone &copy; - Kino <span class="dobreFilmy">Dobre Filmy</span></p>
        <p>Kontakt: <a href="mailto:dobrefilmy@gmail.com">dobrefilmy@gmail.com</a></p>
    </footer>

    <script src="./main.js"></script>
</body>
</html>