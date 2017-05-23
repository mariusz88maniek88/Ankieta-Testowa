<?php 
session_start();

require_once 'inc/db_connect.php';

/**
*   Variables
*/
if ( isset($_POST['name']) ) {
    
    $_name = htmlentities($_POST['name']);
    
    if ( mb_strlen($_name) < 2 || mb_strlen($_name) > 25 ) {
        
        $_SESSION['error_name'] = 'Pole musi zawierać litery lub cyfry i składac sie conajmniej z 3 znaków. Proszę o poprawne wpisanie swojego imienia.';
        header("Location: index.php");
    } else {
        
        echo $_name;
        
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


<a href="index.php">Powrót do ankiety...</a>

