<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="stylesheet.css">
<?
 <form action="skript.php" method="post">
     <input type="text" name="vorname" />
     <input type="submit" value="senden" />
  </form>
$a = 30;
$b = 12;
$op = "-";
 
switch ($op){
    case "+":
        echo "$a plus $b ergibt: ", $a + $b;
        break;
    case "-":
        echo "$a minus $b ergibt: ", $a - $b;
        break;
    case "*":
    case "x":
        echo "$a mal $b ergibt: ", $a * $b;
        break;
    case "/":
    case ":":
        echo "$a durch $b ergibt: ", $a / $b;
        break;
    default:
        echo "Das Rechenzeichen '$op' ist mir unbekannt.";
}
?>
