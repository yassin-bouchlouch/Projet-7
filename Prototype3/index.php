<?php

class Calculatrice{
    private $num1;
    private $num2;
    private $operation;

    function __construct($a,$b,$operation) {
        $this->num1 = $a;
        $this->num2 = $b;
        $this->operation = $operation;
    }
 
    function calculer(){
        $resultat = null;
        switch($this->operation){
            case "+" : $resultat = $this->num1 + $this->num2;
                break;
            case "-" : $resultat = $this->num1 - $this->num2;
                break;
        }
        return $resultat;
    } 

}
   

    $num1 = null;
    $num2 = null;
    $operation = null;
    $afficheur = "";
    $resultat = null;

    if(isset($_POST['x'])) $num1 = $_POST['x'];
    if(isset($_POST['y']))$num2 = $_POST['y'];
    if(isset($_POST['operation'])) $operation = $_POST['operation'];

   
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        if($operation == null){
            if($num1 == null) $num1 = $nombre;
            else $num1 = floatval($num1. $nombre);
        }else{
            if($num2 == null) $num2 = $nombre;
            else $num2 = floatval($num2 . $nombre);
        }
    }

    if(isset($_POST['egale'])){
        $egale = $_POST['egale'];
    
     
        $calculatrice = new Calculatrice($num1,$num2,$operation);
        $resultat = $calculatrice->calculer($num1,$num2,$operation);
      
    }
  
    if($resultat != null) $afficheur = $resultat;
    else{
        if($num1 != null) $afficheur = $afficheur . "$num1" ;
        if($operation != null) $afficheur .= " " .  $operation . " ";
        if($num2 != null) $afficheur .= $num2;
    }
   

   
    $num1 = null;
    $num2 = null;
    $operation = null;
    $afficheur = "";
    $resultat = null;


    if(isset($_POST['num1'])) $num1 = $_POST['num1'];
    if(isset($_POST['num2']))$num2 = $_POST['num2'];
    if(isset($_POST['operation'])) $operation = $_POST['operation'];

  
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        if($operation == null){
            if($num1 == null) $num1 = $nombre;
            else $num1 = floatval($num1 . $nombre);
        }else{
            if($num2 == null) $num2 = $nombre;
            else $num2 = floatval($num2 . $nombre);
        }
    }

    if(isset($_POST['egale'])){
        $egale = $_POST['egale'];
    
        
        $calculatrice = new Calculatrice($num1,$num2,$operation);
        $resultat = $calculatrice->calculer($num1,$num2,$operation);
      
    }
   
    if($resultat != null) $afficheur = $resultat;
    else{
        if($num1 != null) $afficheur = $afficheur . "$num1" ;
        if($operation != null) $afficheur .= " " .  $operation . " ";
        if($num2 != null) $afficheur .= $num2;
    }
     
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototype calculatrice</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="num1" value="<?php echo $num1 ?>">
    <input type="text" name="num2" value="<?php echo $num2 ?>">
    <input type="text" name="operation" value="<?php echo $operation ?>">
    <input type="text" id="afficheur" name="afficheur" value="<?php echo $afficheur ?>" />
    <input type="submit" name="nombre" value="1"  ></input>
    <input type="submit" name="nombre" value="2"  ></input>
    <input type="submit" name="nombre" value="3"  ></input>
    <input type="submit" name="operation" value="+"  ></input>
    <input type="submit" name="operation" value="-"  ></input>
    <input type="submit" name="egale" value="="  ></input>
</form>
    
</body>
</html>