<?php 
session_start();

require_once 'inc/db_connect.php';

/**
*   Instrukcja walidująca Imię lub pseudonim użytkownika
*/
if ( isset($_POST['name']) ) {
    
    $_name = htmlentities($_POST['name']);
    $_SESSION['name'] = $_name;
    
    if ( mb_strlen($_name) < 3 || mb_strlen($_name) > 25 ) {
        
        $_SESSION['error_name'] = '*Proszę o poprawne wpisanie swojego imienia lub pseudonimu.';
        header("Location: index.php");
    }  
} 

/**
*   Instrukcja sprawdzająca wiek 
*/
if ( isset($_POST['age']) && is_numeric($_POST['age'])) {
    
    $_age = htmlentities($_POST['age']);
    $_SESSION['age'] = $_age;
    
    if ( mb_strlen($_age) > 2 || mb_strlen($_age) < 1 ) {
        
        $_SESSION['error_age'] = '*Proszę wprowadzić poprawne dane.';
        header("Location: index.php");
        
    }  
    
}   else  {
    
    $_SESSION['error_age'] = '*Proszę wprowadzić poprawne dane.';
    header("Location: index.php");
    
}

/**
*   Instrukcja sprawdzająca płeć użytkownika
*/
if (isset($_POST['plec'])) {
    
    $_plec = $_POST['plec'];
        
        switch ($_plec) {
                
            case "Kobieta" :
                 $_plec = 'Kobieta';
                break;
            case  "Mezczyzna" :
                 $_plec = 'Mężczyzna';
                break;
            case  "null" :
                $_SESSION['error_plec'] = "*Proszę wybrać płeć.";
                header("Location: index.php"); 
        }
} 

/**
*   Instrukcja sprawdzająca stan cywilny
*/
if ( isset($_POST['stan_cywil']) && ($_POST['stan_cywil'] == 'kawaler / panna' || $_POST['stan_cywil'] == 'zonaty / zamezna' || $_POST['stan_cywil'] == 'wdowiec / wdowa' || $_POST['stan_cywil'] == 'rozwiedziony / rozwiedziona' || $_POST['stan_cywil'] == 'w separacji' )) {
    
    $_stanCywil = $_POST['stan_cywil'];
    
}   else {
    
    $_SESSION['error_cywil'] = "*Proszę wybrac jakąś odpowiedż.";
    header("Location: index.php");
    
}

/**
*   Instrukcja sprawdzająca zmienną Pytania 1
*/
if ( isset($_POST['pyt1'])  ) {
    
    $_pyt1 = htmlentities($_POST['pyt1']);
    $_SESSION['pyt1'] = $_pyt1;
    
    if ( mb_strlen($_pyt1) < 2 || mb_strlen($_pyt1) > 40  ) {
        $_SESSION['error_pyt1'] = '*Prosze o wpisanie odpowiedzi.';
        header("Location: index.php");
        
        
        }  
}   

/**
*   Instrukcja sprawdzająca Pytanie 2
*/
if ( ! isset($_POST['pyt2']) ) {
    
    if (isset($_POST['pyt2_inny1'])  ) { 
        
        if ( isset($_POST['pyt2_inny'])) {
            
            $_pyt2_inny = htmlentities($_POST['pyt2_inny']);
            
            if ( mb_strlen($_pyt2_inny) < 2 || mb_strlen($_pyt2_inny) > 100 ) {
                
                $_SESSION['error_pyt2'] = '*Proszę o zanaczenie jakiejś odpowiedzi.W przypadku odpowiedzi inny proszę wpisać jednocześnie odpowiedz w polu.';
                header("Location: index.php");
                
            }   else {
                
                $_pyt2 = $_pyt2_inny;
                
            }
            
        }   else    {
            
            $_SESSION['error_pyt2'] = '*Proszę o zanaczenie jakiejś odpowiedzi.W przypadku odpowiedzi inny proszę wpisać jednocześnie odpowiedz w polu.';
            header("Location: index.php");
            
        }   
    }   else    {
            
        $_SESSION['error_pyt2'] = '*Proszę o zanaczenie jakiejś odpowiedzi.W przypadku odpowiedzi inny proszę wpisać jednocześnie odpowiedz w polu.';
        header("Location: index.php"); 
            
    }
        
}   else    {
        
    $_pyt2 = $_POST['pyt2'];
    
}  

/**
*   Instrukcja sprawdzająca Pytanie 3
*/
if ( isset($_POST['pyt3']) && ($_POST['pyt3'] == 'Niebieskie' || $_POST['pyt3'] == 'Brazowe' || $_POST['pyt3'] == 'Zielone' || $_POST['pyt3'] == 'Piwne' || $_POST['pyt3'] == 'Zielono-Niebieski')) {
    
    $_pyt3 = $_POST['pyt3'];
    $_SESSION['pyt3'] = $_pyt3;
     
}   else    {
    
    $_SESSION['error_pyt3'] = '*Proszę o zanaczenie jakiejś odpowiedzi';
    header("Location: index.php");
    
}

/**
*   Instrukcja sprawdzająca Pytanie 4
*/
if ( isset($_POST['pyt4']) ) {
    
    $_pyt4 = $_POST['pyt4'];
    $_SESSION['pyt4'] = $_pyt4;
    
}   else    {
    
    $_SESSION['error_pyt4'] = '*Proszę o zanaczenie jakiejś odpowiedzi';
    header("Location: index.php");
    
}

/**
*   Instrukcja sprawdzająca Pytanie 5
*/
if ( isset($_POST['pyt5']) && ($_POST['pyt5'] == 'Disco Polo' || $_POST['pyt5'] == 'Dance' || $_POST['pyt5'] == 'Techno' || $_POST['pyt5'] == 'Rock' || $_POST['pyt5'] == 'Jazz' || $_POST['pyt5'] == 'Electro' || $_POST['pyt5'] == 'Pop' || $_POST['pyt5'] == 'Hip Hop' || $_POST['pyt5'] == 'Metal' || $_POST['pyt5'] == 'Reagge' || $_POST['pyt5'] == 'Rap') ) {
    
    $_pyt5 = $_POST['pyt5'];
    $_SESSION['pyt5'] = $_pyt5;
    
}   else    {
    
    $_SESSION['error_pyt5'] = '*Proszę o zanaczenie jakiejś odpowiedzi';
    header("Location: index.php");
    
}

/**
*   Instrukcja sprawdzająca pytanie 6
*/
if ( ! isset($_POST['pyt6']) ) {
    
    if (isset($_POST['pyt6_inny1'] )   ) {
        
        if ( isset($_POST['pyt6_inny'])) {
            
            $_pyt6_inny = htmlentities($_POST['pyt6_inny']);
            
            if ( mb_strlen($_pyt6_inny) < 2 || mb_strlen($_pyt6_inny) > 100 ) {
                
                $_SESSION['error_pyt6'] = '*Proszę o zanaczenie jakiejś odpowiedzi.W przypadku odpowiedzi inny proszę wpisać jednocześnie odpowiedz w polu.';
                header("Location: index.php");
                
            }   else {
                $_pyt6 = $_pyt6_inny;
                
            }
            
        }   else    {
            
            $_SESSION['error_pyt6'] = '*Proszę o zanaczenie jakiejś odpowiedzi.W przypadku odpowiedzi inny proszę wpisać jednocześnie odpowiedz w polu.';
            header("Location: index.php");
            
        }   
    }   else    {
            
        $_SESSION['error_pyt6'] = '*Proszę o zanaczenie jakiejś odpowiedzi.W przypadku odpowiedzi inny proszę wpisać jednocześnie odpowiedz w polu.';
        header("Location: index.php"); 
            
    }
        
}   else    {
        
    $_pyt6 = $_POST['pyt6'];
         
}  

if( isset($_name) && isset($_age) && isset($_plec) && isset($_stanCywil) && isset($_pyt1) && (isset($_pyt2) || (isset($_pyt2_inny1) && isset($_pyt2_inny))) && isset($_pyt3) && isset($_pyt4) && isset($_pyt5) && ((isset($_pyt6) || isset($_pyt6_inny1) && isset($_pyt6_inny)))) {
    
    /**
    *   Skoro wszystko jest ustawione tworzymy nową baze o nazwie np. ankieta 
    *   a w niej tworzymy kolumny => id, name, age, plec, stan, pyt1, pyt2, pyt3, pyt4, pyt5, pyt6
    *   w których będą zapisywane dane i odpowiedzi z ankiety pamietająć o ustawieniu odpowiednich 
    *   danych w pliku db_connect.php 
    */
    $db_connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    
    if ( !$db_connect->connect_errno ) {
        
        $query = "INSERT INTO ankieta VALUES(null, '$_name', '$_age', '$_plec', '$_stanCywil', '$_pyt1', '$_pyt2', '$_pyt3','$_pyt4','$_pyt5','$_pyt6')";
        
        if ( $result = $db_connect = mysqli_query($db_connect, $query) ) {
            
            $dziekujemy =  "<h2>Dziękujemy $_name za wypełnienie ankiety...</h2>";
            
        }   else    {
            
            echo  'Błędne zapytanie do bazy danych';
            
        }
        
    }   else    {
        
        echo 'Nie udało się nawiązać połączenia z baza danych';
        
    } 
    
}  

/**if ( isset($_POST['name']) && isset($_POST['age'])  && isset($_POST['plec']) && isset($_POST['stan_cywil']) && isset($_POST['pyt1']) && isset($_POST['pyt2']) && isset($_POST['pyt3']) && isset($_POST['pyt4']) && isset($_POST['pyt5']) && isset($_POST['pyt6']) ) {
    
    $_name = htmlentities($_POST['name']);
    $_age = htmlentities($_POST['age']);
    $_plec = htmlentities($_POST['plec']);
    $_stanCywil = htmlentities($_POST['stan_cywil']);
    $_pyt1 = htmlentities($_POST['pyt1']);
    $_pyt2 = htmlentities($_POST['pyt2']);
    $_pyt3 = htmlentities($_POST['pyt3']);
    $_pyt4 = htmlentities($_POST['pyt4']);
    $_pyt5 = htmlentities($_POST['pyt5']);
    $_pyt6 = htmlentities($_POST['pyt6']);
    
    $db_connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    
    if ( !$db_connect->connect_errno ) {
        
        $query = "INSERT INTO ankieta VALUES(null, '$_name', '$_age', '$_plec', '$_stanCywil', '$_pyt1', '$_pyt2', '$_pyt3','$_pyt4','$_pyt5','$_pyt6')";
        
        if ( $result = $db_connect = mysqli_query($db_connect, $query) ) {
            
            echo 'Dziękujemy za wypełnienie ankiety...';
            
        }   else    {
            
            echo  'Błędne zapytanie do bazy danych';
            
        }
        
    }   else    {
        
        echo 'Nie udało się nawiązać połączenia z baza danych';
        
    }
    
}   else    {
    
    $_POST['name'] = '';
    $_POST['age'] = 0 ;
    $_POST['plec'] = '';
    $_POST['stan_cywil'] = '';
    $_POST['pyt1'] = '';
    $_POST['pyt2'] = '';
    $_POST['pyt3'] = '';
    $_POST['pyt4'] = '';
    $_POST['pyt5'] = '';
    $_POST['pyt6'] = '';
    
    echo 'Proszę uzupełnic wszystkie pola...!!!...';
    
}

*/

?>            
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ankieta</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
   <div id="content_main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 header">
                         <?php echo $dziekujemy . '<br>';
                    
                             echo '<h4>Twoje odpowiedzi:  </h4>';
                             echo '<br><p>Jak masz na imię: </p>' . $_name  . '<br>';
                             echo '<p>Twój wiek to: </p>' .$_age  . '<br>';
                             echo '<p>Jesteś: </p>' . $_plec . '<br>';
                             echo '<p>Twój stan cywilny: </p>' . $_stanCywil . '<br>';
                             echo '<p>Pytanie 1 jaka jest Twoja ulubiona dyscyplina sportu odpowiedziałeś/odpowiedziałaś :</p>' . $_pyt1 . '<br>';
                             echo '<p>Pytanie 2 jak spędzasz wolny czas odpowiedziałeś/odpowiedziałaś: </p>' . $_pyt2 . '<br>';
                             echo '<p>Pytanie 3 jaki masz kolor oczu odpowiedziałeś/odpowiedziałaś:</p>' . $_pyt3  . '<br>';
                             echo '<p>Pytanie 4 Czy lubisz słuchać muzyki odpowiedziałeś/odpowiedziałaś:</p>' . $_pyt4  . '<br>';
                             echo '<p>Pytanie 5 Jakiej odpowiedziałeś/odpowiedziałaś:</p>' . $_pyt5  . '<br>';                              
                             echo '<p>Pytanie 6 gdzie spędzisz wakacje odpowiedziałeś/odpowiedziałaś:</p>' . $_pyt6 . '<br>';                                                                  
                             ?>                                                                                                                                        
                          <br><br>
                       <a href="index.php">Powrót do ankiety...</a>
                    </div><!-- end div class="col-xs-12" -->
                </div><!-- end div class="row" -->
            </div><!-- end div class="container" -->
        </div><!-- end div id="content_main" -->
    </body>
</html>  


