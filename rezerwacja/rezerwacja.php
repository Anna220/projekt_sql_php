<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="wypożyczalnia samochodów używanych">
    <meta name="author" content="Anna Fronczyk">

    <title>Wypożyczalnia samochodów używanych</title>

   
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
   
    <link href="../css/grayscale.min.css" rel="stylesheet">
    
     <link rel="stylesheet" href="main.css">
    <title>Rezerwacja</title>
</head>
<body>

       <?php
    
        $db = mysqli_connect('localhost', 'root', '','wypozyczenia');
        mysqli_set_charset($db, 'utf8');

    ?>
      
    <header>
       
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Renta a car</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../rezerwacja/index.html">Rezerwacja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../zarezerwuj/zarezerwuj.html">Zarezerwuj</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
         
            <div id="spolecznosciowe">
              <div class="sprites_media twitter"></div>
              <div class="sprites_media youtube"></div>
              <div class="sprites_media in"></div>
              <div class="sprites_media facebook"></div>
            </div>
     
      </nav>
    </header>
    
    <section>
        
        <h1>Zarezerwowane auta:</h1>
        
         <table class="row">
            <tr>
            <th>ID</th>
             <th>Typ samochodu</th>
             <th>Liczba dni</th>
             <th>Imię</th>
             <th>Nazwisko</th>
             <th>Telefon</th>
             <th>Email</th>
             <th>Uwagi</th>
             </tr>

             <?php 
                    
              $zapytanie = "SELECT r.*, s.IDtypsamochodu, d.liczba FROM ((rezerwacja r INNER JOIN samochod s ON r.IDtypsamochodu=s.ID) INNER JOIN dni d ON r.IDliczbadni=d.ID)";
                $wykonaj = mysqli_query($db, $zapytanie) or die(mysql_error());
                          for($i=1; $i<=mysqli_num_rows($wykonaj); $i++){
                                $wiersz = mysqli_fetch_array($wykonaj);
                              
                              
                                echo "<tr>";
                                    echo '<td>';
                                        echo $wiersz['ID'];
                                    echo "</td>";
                                    echo "<td>";
                                        echo $wiersz['IDtypsamochodu'];
                                    echo "</td>";
                                    echo "<td>";
                                        echo $wiersz['liczba'];
                                    echo "</td>";
                                    echo "<td>";
                                        echo $wiersz['Imie'];
                                    echo "</td>";
                                    echo "<td>";
                                        echo $wiersz['Nazwisko'];
                                    echo "</td>";
                                    echo "<td>";
                                        echo $wiersz['Telefon'];
                                    echo "</td>";
                                    echo "<td>";
                                        echo $wiersz['Email'];
                                    echo "</td>";
                                     echo "<td>";
                                        echo $wiersz['Uwagi'];
                                    echo "</td>";
                                 
                                echo "</tr>";
                            }
                    ?>


        
         </table>
        
    </section>
    
    
    <footer id="footer">
        
            <ul>
                <li>
                    WYPOŻYCZALNIA SAMOCHODÓW DOLCAR <br> 
                    E-mail: rentacar@rentacar.pl
                </li>
                
                <li>
                    Infolinia całodobowa: <br>
                    +48 900 900 700 <br>
                    +48 900 800 400
                </li>
                
                <li>
                    Wynajem długoterminowy: <br>
                    +48 696 465 603
                </li>
                
                <li>
                    Godziny pracy biura <br>
                    Poniedziałek-Piątek od 9:00 do 17:00
                    Sobota od 9:00 do 13:00    
                </li>
                
                <li>
                    Adres: <br>
                    Aleja Stanów Zjednoczonych 100 
                    02-100 Warszawa
                </li>
            </ul>
            
        <p>
 
            Zapraszamy do skorzystania z naszych usług
            Wszelkie Prawa zastrzeżone &copy; 2017.
            
        </p>
        
    </footer>
     <?php
    
        mysqli_close($db);
    
    ?>
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

   
    <script src="../js/grayscale.min.js"></script>
</body>
</html>