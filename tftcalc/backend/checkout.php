<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$orderNumber = "#".rand(1, 1000000);

$to      = 'admin@tftboost.net';
$subject = 'New Order Nr. ' . $orderNumber;
$message = 'Please check Paypal before you proceed! '. getOrderString();

$headers = "From: admin@tftboost.net \r\n";
$headers .= "Reply-To: admin@tftboost.net \r\n";
$headers .= "Return-Path: myplace@example.com\r\n";
$headers .= "BCC: tftboost-net@b2b.reviews.io\r\n";

mail($to, $subject, $message, $headers);



function getOrderString(){
	global $orderNumber;
    $orderStr = "".$_GET["type"]." ". $_GET["from_to_str"]. " Server: ".$_GET["server"]. " Account Information: ". $_GET["acc_info"];
    if($_GET["priority"] == "true"){
        $orderStr .= " This Order will be prioritized!";
    }
	$orderStr .= " Order Nr. " . $orderNumber;

    return $orderStr;
}

?>

<html>
<head>
    <title>Payment Processing</title>
    <style>
.cssload-container{
	display: block;
	margin:49px auto;
	width:97px;
}

.cssload-loading{
	width: 29px;
	height: 29px;
}
.cssload-loading i{
	width: 29px;
	height: 29px;
	display: inline-block;
	background: rgb(255,89,84);
	border-radius: 50%;
	position: absolute;
}
.cssload-loading i:nth-child(1){
	transform:translate(-49px,0);
		-o-transform:translate(-49px,0);
		-ms-transform:translate(-49px,0);
		-webkit-transform:translate(-49px,0);
		-moz-transform:translate(-49px,0);
	animation:cssload-loading-ani1 1.15s linear infinite;
		-o-animation:cssload-loading-ani1 1.15s linear infinite;
		-ms-animation:cssload-loading-ani1 1.15s linear infinite;
		-webkit-animation:cssload-loading-ani1 1.15s linear infinite;
		-moz-animation:cssload-loading-ani1 1.15s linear infinite;

}
.cssload-loading i:nth-child(2){
	background: rgb(0,168,206);
	transform:translate(49px,0);
		-o-transform:translate(49px,0);
		-ms-transform:translate(49px,0);
		-webkit-transform:translate(49px,0);
		-moz-transform:translate(49px,0);
	animation:cssload-loading-ani2 1.15s linear infinite;
		-o-animation:cssload-loading-ani2 1.15s linear infinite;
		-ms-animation:cssload-loading-ani2 1.15s linear infinite;
		-webkit-animation:cssload-loading-ani2 1.15s linear infinite;
		-moz-animation:cssload-loading-ani2 1.15s linear infinite;
}



@keyframes cssload-loading-ani1{
	25%{
		z-index: 2;
	}
	50%{
		transform:translate(49px,0) scale(1);
	}
	75%{
		transform:translate(0,0) scale(0.75);
	}
	100%{
		transform:translate(-49px,0) scale(1);

	}
}

@-o-keyframes cssload-loading-ani1{
	25%{
		z-index: 2;
	}
	50%{
		-o-transform:translate(49px,0) scale(1);
	}
	75%{
		-o-transform:translate(0,0) scale(0.75);
	}
	100%{
		-o-transform:translate(-49px,0) scale(1);

	}
}

@-ms-keyframes cssload-loading-ani1{
	25%{
		z-index: 2;
	}
	50%{
		-ms-transform:translate(49px,0) scale(1);
	}
	75%{
		-ms-transform:translate(0,0) scale(0.75);
	}
	100%{
		-ms-transform:translate(-49px,0) scale(1);

	}
}

@-webkit-keyframes cssload-loading-ani1{
	25%{
		z-index: 2;
	}
	50%{
		-webkit-transform:translate(49px,0) scale(1);
	}
	75%{
		-webkit-transform:translate(0,0) scale(0.75);
	}
	100%{
		-webkit-transform:translate(-49px,0) scale(1);

	}
}

@-moz-keyframes cssload-loading-ani1{
	25%{
		z-index: 2;
	}
	50%{
		-moz-transform:translate(49px,0) scale(1);
	}
	75%{
		-moz-transform:translate(0,0) scale(0.75);
	}
	100%{
		-moz-transform:translate(-49px,0) scale(1);

	}
}

@keyframes cssload-loading-ani2{
	25%{
		transform:translate(0,0) scale(0.75);
	}
	50%{
		transform:translate(-49px,0) scale(1);
	}
	75%{
		z-index: 2;
	}
	100%{
		transform:translate(49px,0) scale(1);
	}
}

@-o-keyframes cssload-loading-ani2{
	25%{
		-o-transform:translate(0,0) scale(0.75);
	}
	50%{
		-o-transform:translate(-49px,0) scale(1);
	}
	75%{
		z-index: 2;
	}
	100%{
		-o-transform:translate(49px,0) scale(1);
	}
}

@-ms-keyframes cssload-loading-ani2{
	25%{
		-ms-transform:translate(0,0) scale(0.75);
	}
	50%{
		-ms-transform:translate(-49px,0) scale(1);
	}
	75%{
		z-index: 2;
	}
	100%{
		-ms-transform:translate(49px,0) scale(1);
	}
}

@-webkit-keyframes cssload-loading-ani2{
	25%{
		-webkit-transform:translate(0,0) scale(0.75);
	}
	50%{
		-webkit-transform:translate(-49px,0) scale(1);
	}
	75%{
		z-index: 2;
	}
	100%{
		-webkit-transform:translate(49px,0) scale(1);
	}
}

@-moz-keyframes cssload-loading-ani2{
	25%{
		-moz-transform:translate(0,0) scale(0.75);
	}
	50%{
		-moz-transform:translate(-49px,0) scale(1);
	}
	75%{
		z-index: 2;
	}
	100%{
		-moz-transform:translate(49px,0) scale(1);
	}
}
    </style>
</head>
<body onload="doPayment()">
<div class="cssload-container" style="top: 50%; left: 50%;">
<div class="cssload-loading"><i></i><i></i></div>
</div>

<script>
    function doPayment(){
        setTimeout(function () {
           document.getElementById("paypal_form").submit();
        }, 5000);
    }
</script>
<form class="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal_form">
    <input type="hidden" name="business" value="mateusiakmac@gmail.com">
    <input type="hidden" name="cmd" value="_xclick"/>
    <input type="hidden" name="cancel_return" value="https://tftboost.net/payment-accepted/"/>
    <input type="hidden" name="return" value="https://tftboost.net/payment-accepted/"/>
    <input type="hidden" name="item_name" value="<?= getOrderString(); ?>" />
	<input type="hidden" name="amount" value="<?= $_GET["price"]; ?>"/>
	<input type="hidden" name="currency_code" value="<?= $_GET["currency"]; ?>"/>
</form>
</body>
</html>
