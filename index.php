<html>

<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>

    <style>
        .content {
            max-width: 500px;
            margin: auto;
        }

        .eloicon {
            width: 41px;
            height: 41px;
        }

        .elobtn {
            margin-right: 5px;
        }

        .btngroup {
            margin-top: 10px;
        }
    </style>

    <script src="assets/js/scripts.js"></script>

</head>

<body onload="SelectionChangedDivisionBoosting()">

    <div id="wrapper" style="width:80%; margin:0 auto;">
        <ul id="tabs" class="nav nav-tabs" onclick="setChangedTab()">
            <li class="active"><a data-toggle="tab" href="#div_boosting">Division Boosting</a></li>
            <li><a data-toggle="tab" href="#win_boosting">Win Boosting</a></li>
            <li><a data-toggle="tab" href="#placement_boosting  ">Placement Boosting</a></li>
        </ul>
        <div class="tab-content">
            <div id="div_boosting" class="tab-pane fade in active">

                <div class="row">
                    <div class="col-md-4 text-center">
                        <h2>
                            Current Division
                        </h2>
                        <p>
                            <div class="btn-group" onchange="SelectionChangedDivisionBoosting()" data-toggle="buttons">
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="divisionboost_current_elo" value="Iron"
                                        id="optionIron"><img class="eloicon" src="assets/img/iron.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="divisionboost_current_elo" value="Bronze"
                                        id="optionBronze"><img class="eloicon" src="assets/img/bronze.png">
                                </label>
                                <label class="btn btn-sm active elobtn">
                                    <input type="radio" name="divisionboost_current_elo" value="Silver"
                                        id="optionSilver" checked> <img class="eloicon" src="assets/img/silver.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="divisionboost_current_elo" value="Gold" id="optionGold">
                                    <img class="eloicon" src="assets/img/gold.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="divisionboost_current_elo" value="Platinum"
                                        id="optionPlatinum"> <img class="eloicon" src="assets/img/platinum.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="divisionboost_current_elo" value="Diamond"
                                        id="optionDiamond"> <img class="eloicon" src="assets/img/diamond.png">
                                </label>
                            </div>

                            <div class="btn-group btngroup" data-toggle="buttons"
                                onchange="SelectionChangedDivisionBoosting()">
                                <label class="btn elobtn">
                                    <input type="radio" value="4" name="divisionboost_current_div"><span
                                        style="font-size: 18px">IV</span>
                                </label>
                                <label class="btn  elobtn">
                                    <input type="radio" value="3" name="divisionboost_current_div"><span
                                        style="font-size: 18px">III</span>
                                </label>
                                <label class="btn active elobtn">
                                    <input type="radio" value="2" name="divisionboost_current_div" checked><span
                                        style="font-size: 18px">II</span>
                                </label>
                                <label class="btn  elobtn">
                                    <input type="radio" value="1" name="divisionboost_current_div"><span
                                        style="font-size: 18px">I</span>
                                </label>

                            </div>

                            <div class="btn-group btngroup" data-toggle="buttons"
                                onchange="SelectionChangedDivisionBoosting()">
                                <label class="btn  active elobtn">
                                    <input type="radio" value="0" name="divisionboost_current_lp" value="0"
                                        checked><span style="font-size: 18px">0-20</span>
                                </label>
                                <label class="btn elobtn">
                                    <input type="radio" value="1" name="divisionboost_current_lp" value="1"><span
                                        style="font-size: 18px">21-40</span>
                                </label>
                                <label class="btn  elobtn">
                                    <input type="radio" value="2" name="divisionboost_current_lp" value="2"><span
                                        style="font-size: 18px">41-60</span>
                                </label>
                                <label class="btn  elobtn">
                                    <input type="radio" value="3" name="divisionboost_current_lp" value="3"><span
                                        style="font-size: 18px">61-80</span>
                                </label>
                                <label class="btn  elobtn">
                                    <input type="radio" value="4" name="divisionboost_current_lp" value="4"><span
                                        style="font-size: 18px">81-100</span>
                                </label>
                            </div>
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h2>
                            Desired Devision
                        </h2>
                        <p>
                            <div class="btn-group" data-toggle="buttons" onchange="SelectionChangedDivisionBoosting()">
                                <label class="btn  elobtn">
                                    <input type="radio" name="divisionboost_desired_elo" value="Iron"><img
                                        class="eloicon" src="assets/img/iron.png">
                                </label>
                                <label class="btn btn-sm elobtn ">
                                    <input type="radio" name="divisionboost_desired_elo" value="Bronze">
                                    <img class="eloicon" src="assets/img/bronze.png">
                                </label>
                                <label class="btn btn-sm elobtn active">
                                    <input type="radio" name="divisionboost_desired_elo" value="Silver" checked> <img
                                        class="eloicon" src="assets/img/silver.png">
                                </label>
                                <label class="btn  btn-sm elobtn ">
                                    <input type="radio" name="divisionboost_desired_elo" value="Gold">
                                    <img class="eloicon" src="assets/img/gold.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="divisionboost_desired_elo" value="Platinum">
                                    <img class="eloicon" src="assets/img/platinum.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="divisionboost_desired_elo" value="Diamond">
                                    <img class="eloicon" src="assets/img/diamond.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="divisionboost_desired_elo" value="Master">
                                    <img class="eloicon" src="assets/img/master.png">
                                </label>
                            </div>

                            <div class="btn-group btngroup" data-toggle="buttons" id="divisions"
                                onchange="SelectionChangedDivisionBoosting()">
                                <label class="btn  elobtn">
                                    <input type="radio" name="divisionboost_desired_div" value="4"><span
                                        style="font-size: 18px">IV</span>
                                </label>
                                <label class="btn  elobtn">
                                    <input type="radio" name="divisionboost_desired_div" value="3"><span
                                        style="font-size: 18px">III</span>
                                </label>
                                <label class="btn elobtn">
                                    <input type="radio" name="divisionboost_desired_div" value="2"><span
                                        style="font-size: 18px">II</span>
                                </label>
                                <label class="btn active elobtn">
                                    <input type="radio" name="divisionboost_desired_div" value="1" checked><span
                                        style="font-size: 18px">I</span>
                                </label>
                            </div>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h2>
                            Order Information
                        </h2>
                        <p>
                            You choosed a division boost from <span style="font-weight: bold; font-size: 15px;"
                                id="currentDivSpan">Silver 2</span> to <span style="font-weight: bold; font-size: 15px;"
                                id="desiredDivSpan">Silver 1</span> <br>
                            <div class="form-check">
                                <input class="form-check-input" onchange="SelectionChangedDivisionBoosting()"
                                    type="checkbox" value="" id="priorityOrder_divisionboost">
                                <label class="form-check-label" for="priorityOrder_divisionboost">
                                    Priority Order (+20 %)
                                </label>
                            </div>
                        </p>
                        <p>
                            <div style="text-align: right;">
                                <span style="font-size: 30px; font-weight: bold;" id="price"></span>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="currencyButton_DivisionBoost" data-toggle="dropdown"><span id="currencyButtonSpan">Euro ???</span>
                                        <span class="caret" ></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" onclick="changeCurrency('$')">$ USD</a></li>
                                        <li><a href="#" onclick="changeCurrency('???')">??? EUR</a></li>
                                    </ul>
                                </div>
                               
                                <br>
                                <!-- <span style="font-size: 15px;" id="discountText">
                                    Your discount: <span id="discountPercentage">0</span>% (<span
                                        id="discountAmount">0</span>???)
                                </span> -->
                            </div>
                            <a data-toggle="modal" data-target="#checkoutModal" class="btn btn-block btn-lg btn-success"><span
                                    class="glyphicon glyphicon-credit-card"></span> Order</a>
                        </p>
                    </div>
                </div>
            </div>

            <div id="win_boosting" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <h2>
                            Current Division
                        </h2>
                        <p>
                            <div class="btn-group" onchange="SelectionChangedWinBoosting()" data-toggle="buttons">
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="winboost_elo" value="Iron"
                                        id="optionIron"><img class="eloicon" src="assets/img/iron.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="winboost_elo" value="Bronze"
                                        id="optionBronze"><img class="eloicon" src="assets/img/bronze.png">
                                </label>
                                <label class="btn btn-sm active elobtn">
                                    <input type="radio" name="winboost_elo" value="Silver"
                                        id="optionSilver" checked> <img class="eloicon" src="assets/img/silver.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="winboost_elo" value="Gold" id="optionGold">
                                    <img class="eloicon" src="assets/img/gold.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="winboost_elo" value="Platinum"
                                        id="optionPlatinum"> <img class="eloicon" src="assets/img/platinum.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="winboost_elo" value="Diamond"
                                        id="optionDiamond"> <img class="eloicon" src="assets/img/diamond.png">
                                </label>
                            </div>
                            <div class="btn-group btngroup" data-toggle="buttons"
                                onchange="SelectionChangedWinBoosting()">
                                <label class="btn elobtn">
                                    <input type="radio" value="4" name="winboost_div"><span
                                        style="font-size: 18px">IV</span>
                                </label>
                                <label class="btn  elobtn">
                                    <input type="radio" value="3" name="winboost_div"><span
                                        style="font-size: 18px">III</span>
                                </label>
                                <label class="btn active elobtn">
                                    <input type="radio" value="2" name="winboost_div" checked><span
                                        style="font-size: 18px">II</span>
                                </label>
                                <label class="btn  elobtn">
                                    <input type="radio" value="1" name="winboost_div"><span
                                        style="font-size: 18px">I</span>
                                </label>

                            </div>
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h2>
                            Win Amount
                        </h2>
                        <p>
                            <span id="wincounter_label" style="font-size: 100px;">1</span><br>
                            <input id="wincounter" data-slider-id='wincounterSlider' type="text" data-slider-min="1"
                                data-slider-max="35" data-slider-step="1" data-slider-value="1"
                                onchange="SelectionChangedWinBoosting()" />
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h2>
                            Order Information
                        </h2>
                        <p>
                            You choosed a win boost with <span style="font-weight: bold; font-size: 15px;"
                                id="winAmountSpan">1 Win</span>
                            <div class="form-check">
                                <input class="form-check-input" onchange="SelectionChangedWinBoosting()"
                                    type="checkbox" value="" id="priorityOrder_winboost">
                                <label class="form-check-label" for="priorityOrder_winboost">
                                    Priority Order (+30 %)
                                </label>
                            </div>
                        </p>
                        <p>
                            <div style="text-align: right;">
                                <span style="font-size: 30px; font-weight: bold;" id="price">2</span>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="currencyButton_PlacementBoost" data-toggle="dropdown"><span id="currencyButtonSpan">Euro ???</span>
                                        <span class="caret" ></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" onclick="changeCurrency('$')">$ USD</a></li>
                                        <li><a href="#" onclick="changeCurrency('???')">??? EUR</a></li>
                                    </ul>
                                </div>
                                <br>
                                <!-- <span style="font-size: 15px;" id="discountText">
                                                Your discount: <span id="discountPercentage">0</span>% (<span
                                                    id="discountAmount">0</span>???)
                                            </span> -->
                            </div>
                            <a data-toggle="modal" data-target="#checkoutModal" class="btn btn-block btn-lg btn-success"><span
                                    class="glyphicon glyphicon-credit-card"></span> Order</a>
                        </p>
                    </div>
                </div>
            </div>

            <div id="placement_boosting" class="tab-pane fade">

                <div class="row">
                    <div class="col-md-4 text-center">
                        <h2>
                            Previous Rank
                        </h2>
                        <p>
                            <div class="btn-group" onchange="SelectionChangedPlacementBoosting()" data-toggle="buttons">
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="placementboost_previous_elo" value="Unranked"
                                        id="optionDiamond"> <img class="eloicon" src="assets/img/unranked.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="placementboost_previous_elo" value="Iron"
                                        id="optionIron"><img class="eloicon" src="assets/img/iron.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="placementboost_previous_elo" value="Bronze"
                                        id="optionBronze"><img class="eloicon" src="assets/img/bronze.png">
                                </label>
                                <label class="btn btn-sm active elobtn">
                                    <input type="radio" name="placementboost_previous_elo" value="Silver"
                                        id="optionSilver" checked> <img class="eloicon" src="assets/img/silver.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="placementboost_previous_elo" value="Gold" id="optionGold">
                                    <img class="eloicon" src="assets/img/gold.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="placementboost_previous_elo" value="Platinum"
                                        id="optionPlatinum"> <img class="eloicon" src="assets/img/platinum.png">
                                </label>
                                <label class="btn btn-sm elobtn">
                                    <input type="radio" name="placementboost_previous_elo" value="Diamond"
                                        id="optionDiamond"> <img class="eloicon" src="assets/img/diamond.png">
                                </label>
                            </div>
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h2>
                            Game Amount
                        </h2>
                        <p>
                            <span id="wincounter_placements_label" style="font-size: 100px;">1</span><br>
                            <input id="wincounter_placements" data-slider-id='wincounter_placementsSlider' type="text"
                                data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="1"
                                onchange="SelectionChangedPlacementBoosting()" />
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h2>
                            Order Information
                        </h2>
                        <p>
                            You choosed a placement boost with <span style="font-weight: bold; font-size: 15px;"
                                id="placementAmountSpan">1 Win</span>
                            <div class="form-check">
                                <input class="form-check-input" onchange="SelectionChangedPlacementBoosting()"
                                    type="checkbox" value="" id="priorityOrder_placementboost">
                                <label class="form-check-label" for="priorityOrder_placementboost">
                                    Priority Order (+30 %)
                                </label>
                            </div>
                        </p>
                        <p>
                            <div style="text-align: right;">
                                <span style="font-size: 30px; font-weight: bold;" id="price">2</span>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="currencyButton_WinBoost" data-toggle="dropdown"><span id="currencyButtonSpan">Euro ???</span>
                                        <span class="caret" ></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" onclick="changeCurrency('$')">$ USD</a></li>
                                        <li><a href="#" onclick="changeCurrency('???')">??? EUR</a></li>
                                    </ul>
                                </div>
                                <br>
                                <!-- <span style="font-size: 15px;" id="discountText">
                                        Your discount: <span id="discountPercentage">0</span>% (<span
                                            id="discountAmount">0</span>???)
                                    </span> -->
                            </div>
                            <a data-toggle="modal" data-target="#checkoutModal" class="btn btn-block btn-lg btn-success"><span
                                    class="glyphicon glyphicon-credit-card"></span> Order</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <div style="width: 50%;" class="panel panel-success">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="discountCode" placeholder="xxx-xxx-xxx">
                        <button onclick="ResetPrice();" style="margin-top: 10px;" class="btn btn-success">Use
                            Code</button>
                    </div>
                    <div class="col-md-5">
                        <span>If you have a discount code you can use it here on our boosts and services!</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="checkoutModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title">Please enter account information</h2>
              
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="accountName">Account Name</label>
                    <input type="accountName" class="form-control" id="username" aria-describedby="advice" placeholder="Enter LOL Username">
                    <label for="accountPw">Account Password</label>
                    <input type="accountPw" class="form-control" id="password" aria-describedby="advice" placeholder="Enter LOL Password">
                    <small id="advice" class="form-text text-muted">We'll never share your account details with anyone else than the booster!</small><br>
                    <label for="discordName">Discord Name (optional)</label>
                    <input type="discordName" class="form-control" id="discord"  placeholder="Enter Discord or Skype Username">    
                    <label for="serverDropdown">Server</label>
                    <div style="margin-top: 5px;" class="dropdown" id="serverDropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button"
                            id="serverButton" data-toggle="dropdown"><span id="serverButtonSpan">EUW</span>
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu t">
                            <li><a href="#" onclick="changeServer('EUW')">EUW</a></li>
                            <li><a href="#" onclick="changeServer('NA')">NA</a></li>
                            <li><a href="#" onclick="changeServer('EUNE')">EUNE</a></li>
                            <li><a href="#" onclick="changeServer('Turkey')">Turkey</a></li>
                            <li><a href="#" onclick="changeServer('Russia')">Russia</a></li>
                            <li><a href="#" onclick="changeServer('LAN')">LAN</a></li>
                            <li><a href="#" onclick="changeServer('LAS')">LAS</a></li>
                            <li><a href="#" onclick="changeServer('Oceania')">Oceania</a></li>
                            <li><a href="#" onclick="changeServer('Korea')">Korea</a></li>
                            
                        </ul>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" onclick="checkout();" class="btn btn-primary">Continue</button>
            </div>
          </div>
        </div>
      </div>

</body>
<script>
    $('#wincounter_placements').slider({
        formatter: function (value) {
            $("#wincounter_placements_label").html(value);
            return 'Placement game amount: ' + value;
        }
    });

    $('#wincounter').slider({
        formatter: function (value) {
            $("#wincounter_label").html(value);
            return 'Win amount: ' + value;
        }
    });
</script>

</html>