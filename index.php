<?php
if(isset($_GET['n']))
{
	$n = $_GET['n'];
}
else
{
	$n = "[Your Name]";
}
?>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
<meta name="google" content="notranslate" />
 <meta property="og:type" content="Happy Holi" />
    <meta property="og:title" content="Wishing You Happy Holi" />
    <meta property="og:url" content="index.php">
    <meta property="og:description" content="Make Your Holi wish" >
    <meta property="og:site_name" content="Wishing You Happy Holi" />
    <meta property="og:image" content="holi1.png"> 
<title>Create Your Holi wish</title>
<link href="normalize.min.css" rel="stylesheet">
<link href="layout15.css" rel="stylesheet">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<script language="javascript" src="jquery.min.js"></script>
<script language="javascript" src="fire.js"></script>
<style type="text/css">.layer:after{content:'<?php echo $n;?>';}</style>
</head>

<body>
   
<style>
.hny-txt {animation:glowtwo 3s ease-in-out infinite; margin:0;}
      @keyframes glowtwo{0%,100%{text-shadow:0 0 30px yellow;color: white;}25%{text-shadow:0 0 30px blue;color: black;}50%{text-shadow:0 0 30px blue;color: blue;}75%{text-shadow:0 0 30px blue;color: #ebff00;}}
.m1{position:fixed;left:1%; width:auto;height:100%;top:1%;color:#000;}
    .m2{position:fixed;right:1%; width:auto;height:100%;top:1%;color:#000;}
    
#show-name {
  font-size: 25px;
  display: inline-block;
  margin-bottom: 5px;
  animation: swing 1s infinite, glow 20s infinite; }

@keyframes glow {
  0%, 100% {
    text-shadow: 0 0 30px red; }
  25% {
    text-shadow: 0 0 30px orange; }
  50% {
    text-shadow: 0 0 30px forestgreen; }
  75% {
    text-shadow: 0 0 30px cyan; } }

@keyframes swing {
  0% {
    transform: rotate(3deg); }
  50% {
    transform: rotate(-3deg); }
  100% {
    transform: rotate(3deg); } }
    .hny-txt {animation:glowtwo 3s ease-in-out infinite; margin:0;}
      @keyframes glowtwo{0%,100%{text-shadow:0 0 30px yellow;color: white;}25%{text-shadow:0 0 30px blue;color: black;}50%{text-shadow:0 0 30px blue;color: blue;}75%{text-shadow:0 0 30px blue;color: #ebff00;}}
      @-webkit-keyframes swing
{
    15%
    {
        -webkit-transform: translateY(5px);
        transform: translateY(5px);
    }
    30%
    {
        -webkit-transform: translateY(-5px);
       transform: translateY(-5px);
    } 
    50%
    {
        -webkit-transform: translateY(4px);
        transform: translateY(4px);
    }
    65%
    {
        -webkit-transform: translateY(-4px);
        transform: translateY(-4px);
    }
    80%
    {
        -webkit-transform: translateY(3px);
        transform: translateY(3px);
    }
    100%
    {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}
@keyframes swing
{
    15%
    {
        -webkit-transform: translateY(5px);
        transform: translateY(5px);
    }
    30%
    {
        -webkit-transform: translateY(-5px);
        transform: translateY(-5px);
    }
    50%
    {
        -webkit-transform: translateY(4px);
        transform: translateY(4px);
    }
    65%
    {
        -webkit-transform: translateY(-4px);
        transform: translateY(-4px);
    }
    80%
    {
        -webkit-transform: translateY(3px);
        transform: translateY(3px);
    }
    100%
    {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@-webkit-keyframes swing1
{
    15%
    {
        -webkit-transform: translateY(5px);
        transform: translateY(5px);
    }
    30%
    {
        -webkit-transform: translateY(-5px);
       transform: translateY(-5px);
    } 
    50%
    {
        -webkit-transform: translateY(4px);
        transform: translateY(4px);
    }
    65%
    {
        -webkit-transform: translateY(-4px);
        transform: translateY(-4px);
    }
    80%
    {
        -webkit-transform: translateY(3px);
        transform: translateY(3px);
    }
    100%
    {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes swing1
{
    15%
    {
        -webkit-transform: translateY(5px);
        transform: translateY(5px);
    }
    30%
    {
        -webkit-transform: translateY(-5px);
        transform: translateY(-5px);
    }
    50%
    {
        -webkit-transform: translateY(4px);
        transform: translateY(4px);
    }
    65%
    {
        -webkit-transform: translateY(-4px);
        transform: translateY(-4px);
    }
    80%
    {
        -webkit-transform: translateY(3px);
        transform: translateY(3px);
    }
    100%
    {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@-webkit-keyframes swing2
{
    15%
    {
        -webkit-transform: translateY(5px);
        transform: translateY(5px);
    }
    30%
    {
        -webkit-transform: translateY(-5px);
       transform: translateY(-5px);
    } 
    50%
    {
        -webkit-transform: translateY(4px);
        transform: translateY(4px);
    }
    65%
    {
        -webkit-transform: translateY(-4px);
        transform: translateY(-4px);
    }
    80%
    {
        -webkit-transform: translateY(3px);
        transform: translateY(3px);
    }
    100%
    {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes swing2
{
    15%
    {
        -webkit-transform: translateY(5px);
        transform: translateY(5px);
    }
    30%
    {
        -webkit-transform: translateY(-5px);
        transform: translateY(-5px);
    }
    50%
    {
        -webkit-transform: translateY(4px);
        transform: translateY(4px);
    }
    65%
    {
        -webkit-transform: translateY(-4px);
        transform: translateY(-4px);
    }
    80%
    {
        -webkit-transform: translateY(3px);
        transform: translateY(3px);
    }
    100%
    {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@-webkit-keyframes swing3
{
    15%
    {
        -webkit-transform: translateY(5px);
        transform: translateY(5px);
    }
    30%
    {
        -webkit-transform: translateY(-5px);
       transform: translateY(-5px);
    } 
    50%
    {
        -webkit-transform: translateY(4px);
        transform: translateY(4px);
    }
    65%
    {
        -webkit-transform: translateY(-4px);
        transform: translateY(-4px);
    }
    80%
    {
        -webkit-transform: translateY(3px);
        transform: translateY(3px);
    }
    100%
    {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes swing3
{
    15%{-webkit-transform: translateY(5px);transform: translateY(5px);}
    30%{-webkit-transform: translateY(-5px);transform: translateY(-5px);}
    50%{-webkit-transform: translateY(4px);transform: translateY(4px);}
    65%{-webkit-transform: translateY(-4px);transform: translateY(-4px);}
    80%{-webkit-transform: translateY(3px);transform: translateY(3px);}
    100%{-webkit-transform: translateY(0);transform: translateY(0);}
}



.swing
{
        -webkit-animation: swing 5s infinite;  /* Chrome, Safari, Opera */
		animation: swing 5s infinite;
		-webkit-animation-timing-function: cubic-bezier(0,0,0.25,1);
		animation-timing-function: cubic-bezier(0,0,0.25,1);
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
}

.swing1
{
	-webkit-animation: swing1 3s infinite;  /* Chrome, Safari, Opera */
		animation: swing1 3s infinite;
		-webkit-animation-timing-function: cubic-bezier(0,0,0.25,1);
		animation-timing-function: cubic-bezier(0,0,0.25,1);
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
}

.swing2
{
	-webkit-animation: swing1 6s infinite;  /* Chrome, Safari, Opera */
		animation: swing1 6s infinite;
		-webkit-animation-timing-function: cubic-bezier(0,0,0.25,1);
		animation-timing-function: cubic-bezier(0,0,0.25,1);
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
}

.swing3
{
	-webkit-animation: swing1 4s infinite;  /* Chrome, Safari, Opera */
		animation: swing1 4s infinite;
		-webkit-animation-timing-function: cubic-bezier(0,0,0.25,1);
		animation-timing-function: cubic-bezier(0,0,0.25,1);
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
}

/*DANCING ANIMATION*/
@keyframes dance {
  0%{
    -webkit-transform:  rotate(10deg);
    -ms-transform:  rotate(10deg);
    transform:  rotate(10deg);
  }
  16.66%, 49.98%{
    -webkit-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  32.32%{
    -webkit-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  66.64%, 100%{
    -webkit-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
  }
  83.8%{
    -webkit-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    transform: rotate(5deg);
  }
}

-webkit-@keyframes dance {
  0%{
    -webkit-transform:  rotate(10deg);
    -ms-transform:  rotate(10deg);
    transform:  rotate(10deg);
  }
  16.66%, 49.98%{
    -webkit-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  32.32%{
    -webkit-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  66.64%, 100%{
    -webkit-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
  }
  83.8%{
    -webkit-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    transform: rotate(5deg);
  }
}
    </style>
<div class="main-container">
<div class="container">
<center>
<!-- first adsense ads here-->
</center> 

<div class="content-box">
   <div class="stage">
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
    </div>
    </div>
    
<h3><p class="hny-txt">की तरफ से</p></h3>
<p id="demoo" style="font-size: 20px; font-weight: bold;"></p>
<h3><p class="hny-txt">पहले</p></h3>
     <img src="holitext.png" width="80%" height="30%" style="animation: tada 4s infinite;" />
   <img class="center swing2" src="holi-hai.png" height="130px" width="150px"/>
   <img class="center swing3" src="holi2.gif" height="130px" width="150px"/>
  
  

<center>

</center>
    <p class="lines">इंद्रधनुष के रंगों के साथ आपको<br> शुभकामनाएं भेजी जा रही है।<br> उम्मीद है आप पर प्यार, <br>खुशी और उल्लास की बरसात हो! </p>
<span id="show-name" style="color: darkblue;">[<?php echo $n;?>]</span>	
<center>
<!-- second adsense ads start  here-->

<!-- second adsense ads end  here-->
</center> 
<br>
<br>
<br>
<br>
<br>
<br>

</div>

</div>
 			
	 <div class="form-container">    
		<form method="post" action="ready.php">
			<input name="n" type="text" placeholder="यहाँ अपना नाम लिखे ">
			<input type="submit" value="👉 बनाये">
		</form>
		</div>
<script> 
// Set the date we're counting down to
var countDownDate = new Date("Mar 01, 2018 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demoo").innerHTML = days + "दिन " + hours + "घंटे "
    + minutes + "मिनट" + seconds + "सैकंड";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demoo").innerHTML = "";
    }
}, 1000);
</script>
</body>
</html>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3826509,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('../s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="index.html" target="_blank"><img  src="../sstatic1.histats.com/0639a.gif?3826509&amp;101" alt="free site statistics" border="0"></a></noscript>
<!-- Histats.com  END  -->
