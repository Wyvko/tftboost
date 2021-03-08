var priority = "false";
var streaming = "false";
var type = "Division Boosting";
var fromToStr = "";
var price =0;
var currency ="€";
var server = "EUW";
function SelectionChangedDivisionBoosting() {
  var currentElo = $('input[name=divisionboost_current_elo]:checked').val();
  var desiredElo = $('input[name=divisionboost_desired_elo]:checked').val();
  var currentDiv = $('input[name=divisionboost_current_div]:checked').val();
  var desiredDiv = $('input[name=divisionboost_desired_div]:checked').val();
  var lpDiscount = $('input[name=divisionboost_current_lp]:checked').val();

  priority = "false";
  if($("#priorityOrder_divisionboost").is(':checked')){
    priority = "true";
  }

  streaming = "false";
  if($("#streamingOrder_divisionboost").is(':checked')){
    streaming = "true";
  }
  if (desiredElo === "master") {
    $("#divisions").hide();
  } else {
    $("#divisions").show();
  }
  var from =currentElo + " "+ currentDiv;
  var to = desiredElo + " "+ desiredDiv;

  $("#currentDivSpan").html(from);
  $("#desiredDivSpan").html(to);

  var data =  {
                  type: "division",
                  from_elo: currentElo,
                  to_elo: desiredElo,
                  from_div: currentDiv,
                  to_div: desiredDiv,
                  discount_code : $("#discountCode").val(),
                  lp_discount : lpDiscount,
                  priority : priority,
                  streaming: streaming,
                  currency : getCurrency()
              };
  setPrice(data); 
  
  fromToStr ="from " + from + " to "+to;
}

function SelectionChangedWinBoosting(){
  var currentelo = $('input[name=winboost_elo]:checked').val();
  var currentdiv = $('input[name=winboost_div]:checked').val();
  var amount = $('#wincounter').slider('getValue');
  
  priority = "false";
  if($("#priorityOrder_winboost").is(':checked')){
    priority = "true";
  }

  var data = {
    type : "win",
    current_div : currentdiv,
    current_elo: currentelo,
    discount_code : $("#discountCode").val(),
    win_amount: amount,
    priority : priority,
    currency : getCurrency()
 }
  var winStr = (amount >1 ? "Wins" : "Win");
  setPrice(data);
  $("#winAmountSpan").html(amount + " " + winStr);

}

function  SelectionChangedPlacementBoosting(){

  var previousElo = $('input[name=placementboost_previous_elo]:checked').val();
  var amount = $('#wincounter_placements').slider('getValue');

  priority = "false";
  if($("#priorityOrder_placementboost").is(':checked')){
    priority = "true";
  }

  var data = {
                type : "placement",
                previous_elo : previousElo,
                game_amount: amount,
                discount_code : $("#discountCode").val(),
                priority : priority,
                currency : getCurrency()
             }
  var winStr = (amount >1 ? "Wins" : "Win");
  setPrice(data);
  $("#placementAmountSpan").html(amount + " " + winStr);
}

function getCurrency(){
  return (currency == "€" ? "EUR" : "USD");
}

function setPrice(dataJson){
  var request = $.ajax({
    url: 'backend/calculate.php',
    type: 'GET',
    data: dataJson 
  });
  request.done(function (data) {
    console.log("return "+data);
    
    price = Math.round(data * 100) / 100;
    var htmlData;
    if(data === "0"){
      htmlData = "Not possible";
    }else{
      htmlData = "Price: " + price + currency;
    }
    $('[id="price"]').html(htmlData);
    //return data;
  });

}

function checkout(){
  //get price and goto checkout.php
  ResetPrice();
  var accInfo = "Username: " + $("#username").val() + " Password: " + $("#password").val();
  var url = "backend/checkout.php?type="+type+"&from_to_str="+fromToStr+"&priority="+priority+"&price="+price+"&currency="+getCurrency()+"&server="+server+"&acc_info="+accInfo;
  var win = window.open(url, '_blank');
  win.focus();

}


function showValue_wins(amount) {
  document.getElementById("wincounter_label").innerHTML = amount;
  SelectionChangedWinBoosting();
}

function showValue_placements(amount) {
  document.getElementById("wincounter_placements_label").innerHTML = amount;
  SelectionChangedPlacementBoosting();
}

function ResetPrice(){
  switch(type){
    case "Division Boosting":
      SelectionChangedDivisionBoosting();
      break;
    case "Win Boosting":
      SelectionChangedWinBoosting();
      break;
    case "Placement Boosting":
      SelectionChangedPlacementBoosting();
      break;
  }
}

function changeCurrency(currencyCode){
  currency = currencyCode;
  var buttonText = "";
  switch(currencyCode){
    case "€":
      buttonText = "Euro €"  ;
      break;
    case "$":
        buttonText = "Dollar $";  
      break;  
  }
  $('[id="currencyButtonSpan"]').html(buttonText);
  ResetPrice();
}

function setChangedTab(){
  setTimeout(function() {
    type = $("ul#tabs li.active").text();
    ResetPrice();
  }, 500);
}

function changeServer(serverCode){
  server = serverCode;
  $('[id="serverButtonSpan"]').html(serverCode);
}