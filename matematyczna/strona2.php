<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<a href="index.html"><img src="baner.jpg" alt="baner"></a>
  </header>
  <nav>
<a href="storna1.html"> - proste działania</a>
<a href="strona2.php"> - potęgowanie</a>  </nav>
  <main>
<h1>POTĘGOWANIE</h1>
  <form method="post" action="strona2.php">
<i>Podaj podstawę potęgi:</i>
 <input type="number" name="liczba1" /><br/>
<i>Podaj dodatni, całkowity wykładnik potęgi:</i>
 <input type="number" name="liczba2" /><br/>
<input type="submit" value="POTĘGOWANIE" name="oblicz"/>
</form>

 
<?php
if (empty($_POST['liczba1']) || (empty($_POST['liczba2'])
 && $_POST['liczba2']!=0)) {
    echo "Wpisz podstawę i wykładnik potęgi";
}
else {
 if ($_POST['liczba2']>=0) {    
 echo "Wynik działania wynosi: ";
 echo pow($_POST['liczba1'], $_POST['liczba2']);
 }
 else {
 echo "Wykładnik potęgi musi być dodatni";
 }
}  
?>

</main>
</body>
</html>