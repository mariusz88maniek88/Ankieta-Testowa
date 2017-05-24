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
    }  else {
        
        echo $_name . '<br>';
        
    }
} 

/**
*   Instrukcja sprawdzająca wiek 
*/
if ( isset($_POST['age']) && is_numeric($_POST['age'])) {
    
    $_age = htmlentities($_POST['age']);
    
    if ( mb_strlen($_age) > 2 || mb_strlen($_age) < 1 ) {
        
        $_SESSION['error_age'] = '*Proszę wprowadzić poprawne dane.';
        header("Location: index.php");
        
    }   else    {
        
        echo $_age . '<br>';
        
    }
    
}   else  {
    
    $_SESSION['error_age'] = '*Proszę wprowadzić poprawne dane.';
    header("Location: index.php");
    
}

/**
*   Instrukcja sprawdzająca płeć użytkownika
*/
if (isset($_POST['plec'])) {
    
    $_plec = htmlentities($_POST['plec']);
        
        switch ($_plec) {
                
            case "Kobieta" :
                echo 'Kobieta<br>';
                break;
            case  "Mezczyzna" :
                echo 'Mężczyzna<br>';
                break;
            case  "null" :
                $_SESSION['error_plec'] = "*Proszę wybrać płeć.";
                header("Location: index.php"); 
        }
} 

/**
*   Instrukcja sprawdzająca stan cywilny
*/
if ( isset($_POST['stan_cywil'])) {
    
    $_stanCywil = htmlentities($_POST['stan_cywil']);
    echo $_stanCywil . '<br>';
    
}   else {
    
    $_SESSION['error_cywil'] = "*Proszę wybrac jakąś odpowiedż.";
    header("Location: index.php");
    
}

/**
*   Instrukcja sprawdzająca zmienną Pytania 1
*/
if ( isset($_POST['pyt1'])  ) {
    
    $_pyt1 = htmlentities($_POST['pyt1']);
    
    if ( mb_strlen($_pyt1) < 2 || mb_strlen($_pyt1) > 40  ) {
        $_SESSION['error_pyt1'] = '*Prosze o wpisanie odpowiedzi.';
        header("Location: index.php");
        
        
        }   else    {
    
        echo $_pyt1 . '<br>';
        
        }
}   

/**
*   Instrukcja sprawdzająca Pytanie 2
*/
if ( isset($_POST['pyt2']) ) {
    
    $_pyt2 = htmlentities($_POST['pyt2']);
    echo $_pyt2 . '<br>';
    
}   else    {
    
    $_SESSION['error_pyt2'] = 'Proszę o zanaczenie jakiejś odpowiedzi';
    header("Location: index.php");
    
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


<a href="index.php">Powrót do ankiety...</a>

