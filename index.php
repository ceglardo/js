<hmtl>
 <head>



<title>Fajna strona</title>
 <style type="text/css">
@import "mojcss.css";
  }</style>

</head>


    
<body background= "tlo.jpg"; >
<header><marquee SCROLLAMOUNT=30 BEHAVIOR=ALTERNATE><p> Prosze Pan da dobrom ocene</p>  </marquee> </header>

 <center> <h1> JAK MASZ NA IMIE I NAZWISKO? <h1> </center>
 <h3> Zapomniales jak sie nazywasz? Ta strona ci to przypomni! <h3>

  <br><br> <br> <br> <br> <br> 

  <center> <h3> Podaj swoje imie i nazwisko: <h3></center>

  <div class=kontener1>
  

    <form action="" method="post" >
      
      Imie: <input type="text" name="imie" />  <br>
      Nazwisko: <input  type="text" name="nazwisko" /> <br />
    
      <button type="submit" value="przycisk">Potwierdz</button>
  
    </form> 
    <br>
   <b> <?php 
        if(isset($_POST['imie'])){
         
          echo "Masz na imie i nazwisko: "." ".$_POST['imie']." ".$_POST['nazwisko']; 
        }
    ?>
    </b>
 

  

  
  

</body>
</hmtl>

