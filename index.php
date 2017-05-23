<?php 
session_start();

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
               <div class="col-sm-3"></div>
               <div class="col-xs-12 col-sm-6">
                  <div class="title_form">
                      <h1>Przykładowa Ankieta</h1>
                  </div>
                   <form  action="finish.php" method="post">
                       
                       <!-- Podaj swoje imie -->
                       <div class="your_name div_box">
                          <h4>1) Podaj swoje imię:</h4> 
                          <?php 
                           
                           if (isset($_SESSION['error_name'])) {
                               
                               echo '<h4 style="color: red">' . $_SESSION['error_name'] . '</h4>';
                               unset($_SESSION['error_name']);
                               
                           }
                           
                           ?>
                          <input type="text" name="name" class="form-control input-md"> 
                       </div>
                       
                       <!-- Podaj swój wiek -->
                       <div class="age div_box">
                          <h4>2) Podaj swój wiek:</h4>
                           <?php 
                           
                           if (isset($_SESSION['error_age'])) {
                               
                               echo '<h4 style="color: red">' . $_SESSION['error_age'] . '</h4>';
                               unset($_SESSION['error_age']);
                               
                           }
                           
                           ?>
                            <input type="text" name="age" class="form-control input-md">
                       </div>
                       
                       <!-- Płeć -->
                       <div class="plec div_box">
                         <h4>3) Wybierz płeć: </h4>
                          <?php 
                           
                           if ( isset($_SESSION['error_plec'])) {
                               
                               echo '<h4 style="color: red">' . $_SESSION['error_plec'] . '</h4>';
                               unset($_SESSION['error_plec']);
                               
                           }
                           
                           ?>
                           <select name="plec" class="form-control">
                               <option value="null"></option>
                               <option value="Kobieta">Kobieta</option>
                               <option value="Mezczyzna">Mężczyzna</option>
                           </select>
                       </div>
                       
                       <!-- Stan Cywilny -->
                       <div class="stan_cywil div_box">
                          <h4>4) Stan cywilny:</h4>
                          <?php 
                           
                           if ( isset($_SESSION['error_cywil']) ) {
                               
                               echo '<h4 style="color: red">' . $_SESSION['error_cywil'] . '</h4>';
                               unset($_SESSION['error_cywil']);
                               
                           }
                           
                           ?>
                           <table> 
                               <tr>
                                  <td><input type="radio" name="stan_cywil" class="form-control input-md" value="kawaler / panna"></td>
                                  <td> kawaler / panna </td>
                               </tr>
                               <tr>
                                  <td><input type="radio" name="stan_cywil" class="form-control input-md" value="zonaty / zamezna"></td>
                                  <td> żonaty / zamężna </td>
                               </tr>
                               <tr> 
                                  <td><input type="radio" name="stan_cywil" class="form-control input-md" value="wdowiec / wdowa"></td>
                                  <td> wdowiec / wdowa </td>
                               </tr>
                               <tr>
                                  <td><input type="radio" name="stan_cywil" class="form-control input-md" value="rozwiedziony / rozwiedziona"></td>
                                  <td> rozwiedziony / rozwiedziona </td>
                               </tr>
                               <tr>
                                  <td><input type="radio" name="stan_cywil" class="form-control input-md" value="w separacji"></td>
                                  <td> w separacji </td>
                               </tr>
                       
                           </table>
                       </div>
                       
                       <!-- Pytania -->
                       <div class="pytanie">
                           <h4>5) Jaka jest Twoja ulubiona dyscyplina sportu?</h4>
                           <?php 
                           
                           if ( isset($_SESSION['error_pyt1']) ) {
                               
                               echo '<h4 style="color: red">' . $_SESSION['error_pyt1'] . '</h4>';
                               unset($_SESSION['error_pyt1']);
                               
                           }   
                           
                           ?>
                            <input type="text" name="pyt1" class="form-control input-md">
                       </div>
                       
                       <div class="pytanie">
                           <h4>6) Jak najczęsciej spędza Pan/Pani wolny czas?</h4>
                           <table>
                             <tr>
                                <td><input type="radio" name="pyt2" class="form-control input-md" value="Oglądam tv"></td>
                                <td> Oglądam telewizję...</td>
                             </tr>
                             <tr>
                                 <td><input type="radio" name="pyt2" class="form-control input-md" value="Przed komputerem"></td>
                                 <td> Przed komputerem...</td>
                             </tr>
                             <tr>
                                 <td><input type="radio" name="pyt2" class="form-control input-md" value="Slucham muzyki"></td>
                                 <td> Słucham muzyki...</td>
                             </tr>
                             <tr>
                                 <td><input type="radio" name="pyt2" class="form-control input-md" value="Czytam ksiazki"></td>
                                 <td> Czytam książki...</td>
                             </tr>
                             <tr>
                                 <td><input type="radio" name="pyt2" class="form-control input-md" value="Uprawiam sport"></td>
                                 <td> Uprawiam sport...</td>
                             </tr>
                             <tr>
                                 <td><input type="radio" name="pyt2" class="form-control input-md" value="Spotykam sie ze znajomymi"></td>
                                 <td> Spotykam się ze znajomymi..</td>
                             </tr>
                             <tr>
                                <td><input type="radio" name="pyt2" class="form-control input-md" value="7"></td>
                                <td><input type="text" name="pyt2_inny" class="form-control input-md" placeholder="Inny.."></td>
                             </tr>
                           </table>
                       </div>
                       
                       <div class="pytanie">
                           <h4>7) Jaki masz kolor oczu...?..</h4>
                              <table>
                                  <tr>
                                    <td><input type="radio" name="pyt3" class="form-control input-md" value="Niebieskie"></td>
                                    <td> Niebieskie</td>
                                  </tr>
                                  <tr>
                                    <td><input type="radio" name="pyt3" class="form-control input-md" value="Brazowe"></td>
                                    <td> Brązowe</td>
                                  </tr>
                                  <tr>
                                    <td><input type="radio" name="pyt3" class="form-control input-md" value="Zielone"></td>
                                    <td> Zielone</td>
                                  </tr>
                                  <tr>
                                    <td><input type="radio" name="pyt3" class="form-control input-md" value="Piwne"></td>
                                    <td> Piwne</td>
                                  </tr>  
                                  <tr>
                                    <td><input type="radio" name="pyt3" class="form-control input-md" value="Zielono-Niebieski"></td>
                                    <td>Zielono-Niebieski</td>
                                  </tr>
                              </table>
                       </div>
                       
                       <div class="pytanie">
                           <h4>8) Lubisz słuchać muzyki.?..</h4>
                           <table>
                               <tr>
                                   <td><input type="radio" name="pyt4" class="form-control input-md" value="tak"></td>
                                   <td> Tak</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt4" class="form-control input-md" value="nie"></td>
                                   <td> Nie</td>
                               </tr>
                           </table>
                       </div>
                       
                       <div class="pytanie">
                           <h4>9) Jak Tak to jakiej?</h4>
                           <table>
                               <tr>
                                   <td><input type="radio" name="pyt5" class="form-control input-md" value="Disco Polo"></td>
                                   <td> Disco Polo</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt5" class="form-control input-md" value="Dance"></td>
                                   <td> Dance</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt5" class="form-control input-md" value="Techno"></td>
                                   <td> Techno</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt5" class="form-control input-md" value="Rock"></td>
                                   <td> Rock</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt5" class="form-control input-md" value="Jazz"></td>
                                   <td> Jazz</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt5" class="form-control input-md" value="Electro"></td>
                                   <td> Electro</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt5" class="form-control input-md" value="Pop"></td>
                                   <td> Pop</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt5" class="form-control input-md" value="Hip Hop"></td>
                                   <td> Hip Hop</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt5" class="form-control input-md" value="Metal"></td>
                                   <td> Metal</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt5" class="form-control input-md" value="Reagge"></td>
                                   <td> Reagge</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt5" class="form-control input-md" value="Rap"></td>
                                   <td> Rap</td>
                               </tr>
                           </table>
                       </div>
                       
                       <div class="pytanie">
                           <h4>10) Gdzie bedzie Pan/Pani spędzała wakacje..?..</h4>
                           <table>
                               <tr>
                                   <td><input type="radio" name="pyt6" class="form-control input-md" value="W Domu"></td>
                                   <td> W Domu..</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt6" class="form-control input-md" value="Jadę do rodziny"></td>
                                   <td> Jadę do rodziny..</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt6" class="form-control input-md" value="Na wsi"></td>
                                   <td> Na wsi..</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt6" class="form-control input-md" value="Nad Morzem"></td>
                                   <td> Nad Morzem..</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt6" class="form-control input-md" value="W gorach"></td>
                                   <td> W górach..</td>
                               </tr>
                               <tr>
                                   <td><input type="radio" name="pyt6" class="form-control input-md" value="Za granica"></td>
                                   <td> Za granicą..</td>
                               </tr>
                               <tr>
                                   <td>Inny...</td>
                                   <td><input type="text" name="pyt6_inny" class="form-control input-md" value="7"></td>
                               </tr>
                           </table>
                       </div>
                       
                       <input type="submit" class="btn btn-primary btn-lg">
                       
                   </form>
               </div>
               <div class="col-sm-3"></div>
           </div>
       </div>
   </div>
   
    
    
    <script href="js/bootstrap.min.css"></script>
</body>
</html>