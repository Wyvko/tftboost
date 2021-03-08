<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$elos = array("Iron", "Bronze", "Silver", "Gold", "Platinum", "Diamond", "Master");
$lpDiscounts = array(0, 0.1, 0.24, 0.4, 0.6);
$currency = $_GET["currency"];
$currencyRate = $currency == "USD" ? 1.1 : 1;

$boostingType = $_GET["type"];
//$conn = new mysqli("mysql.webhosting61.1blu.de", "s242539_2926763", "JH&bW0npa6Ym?fd", "db242539x2926763");
$conn = new mysqli("localhost", "shamka_wp4", "LHlZgalG2X", "shamka_tft2");
switch($boostingType){
    case "division":
        $price = calculateDivisionPrice($_GET["from_div"], $_GET["to_div"], $_GET["from_elo"], $_GET["to_elo"]);
        break;
    case "win":
        $price = caclulateWinPrice($_GET["current_div"], $_GET["current_elo"], $_GET["win_amount"]);
        break;
    case "placement":
        $price = caclulatePlacementPrice($_GET["previous_elo"], $_GET["game_amount"]);
        break;        
}
$additionalPrice = 1;
if($_GET["priority"] == "true"){
    $additionalPrice = 1.15;
}
$additionalPrice = 1;
else if($_GET["streaming"] == "true"){
    $additionalPrice = 1.1;
}


echo calculateDiscount($_GET["discount_code"]) * $price * $additionalPrice * $currencyRate;


function calculateDivisionPrice($fromDiv, $toDiv, $fromElo, $toElo){
    global $elos;
    global $lpDiscounts;
    $price = 0;
    $currentEloIndex = array_search($fromElo, $elos);
    $desiredEloIndex = array_search($toElo, $elos);
    // echo $fromElo;
    // echo $toElo;
    // echo $currentEloIndex;
    // echo $desiredEloIndex;
    // for($i=$currentEloIndex; $i <= $desiredEloIndex; $i++) {
    //     if($i==$currentEloIndex){
    //          $goFrom = $fromDiv;
    //          $goTo = 1;
    //          if($i==$desiredEloIndex){
    //              $goTo = $toDiv;// +1
    //          }
        
    //         //continue;
    //     }elseif($i== $desiredEloIndex){
    //         $goFrom = 4;
    //         $goTo = $toDiv; //+1
    //         //continue;
    //     }else{
    //         $goFrom = 4;
    //         $goTo = 1;
    //     }
    //          for($ii = $goFrom; $ii>=$goTo; $ii--){
    //              if($i == $currentEloIndex || $ii == $fromDiv){
    //                 $price +=  getPrice($elos[$i], $ii) * $lpDiscounts[$_GET["lp_discount"]] ;
    //                 continue;
    //              }
    //             $price +=  getPrice($elos[$i], $ii);
    //            echo "<br>Preis für $elos[$i] $ii $price";
    //          }
    //  }
    
    for($k = $currentEloIndex; $k <= $desiredEloIndex; $k++) { 
        if($currentEloIndex == $desiredEloIndex) { 
            for($i = $fromDiv; $i >= $toDiv; $i--) { 
                if($i == $fromDiv){
                    //  $discount = $lpDiscounts[$_GET["lp_discount"]];
                    continue;
                 }elseif($i == ($fromDiv-1)){
                     $price +=  getPrice($elos[$k],$i) * (1-$lpDiscounts[$_GET["lp_discount"]]);
                 }else{
                    $price += getPrice($elos[$k],$i);  
                 }           
            } 
        } else { 
            if($k == $currentEloIndex) { 
                for($i = $fromDiv; $i >= 1; $i--) { 
                    $discount = 1;
                     if($i == $fromDiv){
                        //  $discount = $lpDiscounts[$_GET["lp_discount"]];
                        continue;
                     } elseif($i == ($fromDiv-1)){
                        $price +=  getPrice($elos[$k],$i) * (1-$lpDiscounts[$_GET["lp_discount"]]);
                    }else{
                        $price += getPrice($elos[$k],$i);  
                 }   
                } 
            } else if($k == $desiredEloIndex) { 
                for($i = 4; $i >= $toDiv; $i--) { 
                    $price += getPrice($elos[$k],$i); 
                } 
            } else { 
                for($i = 1; $i <= 4; $i++) { 
                    $price += getPrice($elos[$k],$i); 
                } 
            } 
        } 
    } 
    return $price;
}

function caclulateWinPrice($currentDiv, $currentElo, $amount){
    global $conn;
    $sql = "SELECT price FROM win_prices WHERE elo = '$currentElo' AND division = '$currentDiv'";
    $price = 0;
    $result = $conn->query($sql);   
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $price = $row["price"];
            break;
        }
    } 
    return $amount * $price;
}

function caclulatePlacementPrice($previousElo, $amount){
    global $conn;
    $sql = "SELECT price FROM placement_prices WHERE previous_elo = '$previousElo'";
    $price = 0;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $price = $row["price"];
            break;
        }
    } 
    return $amount * $price;
}

function calculateDiscount($code){
   global $conn;
    $discount = 1;

    $sql = "SELECT discount FROM discounts where code = '$code'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            $discount -= $row["discount"];
            break;
        }
    } 
    return $discount;
}

function getPrice($elo, $div){
    global $conn;
// Check connection

    $sql = "SELECT price FROM elo_prices where elo = '$elo' AND division = $div";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            return $row["price"];
        }
    } else {
        return "Price not found";
    }

}


