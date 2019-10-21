<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CC</title>
    <style>
    html,body{
    font-size:1em;
    line-height: 100%;
    color: #000;
    margin: 0 auto;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
    }
    div{
        margin: 0 auto;
        text-align: center;
        outline: none;
    }
    li{
        text-align: left;
        padding: 0.5em 0.1em 0.5em 0.1em;
        text-overflow: ellipsis;
        white-space: nowrap; 
    }
    H1 {
        font-size: 2.3em;
        text-shadow: 0.1em 0.1em 0.1em #FFA336;
    }

    H2 {
        font-size: 0.8em;
        font-weight: 400;
    }

    input {
        border: 0.2em solid #eeeeee;
        border-radius: 1em;
        padding: 0 1em 0 1em;
        font-size: 1em;
        height: 1.5em;
        color: #CDCDCD;
        box-shadow: 0.1em 0.1em 0.1em #ff8b00;
        margin: 0 0 0 0.2em;
        outline: none;
    }
    input::placeholder {
        font-size: 1em;
        color: #CDCDCD;
        transition: color.5s;
    }

    input:focus::placeholder,
    input:hover::placeholder {
        color: #ffffff;
        transition: color.5s;
    }

    .frame{
        padding: 0.5em;
        width: 95%;
    }
    #top{
        list-style: none;
        font-size: 0.8em;
        font-weight: 800;
        color: #fff;
        text-shadow: 0.1em 0.1em 0.1em #FFA336;
        border: 0.1em solid #fff;
        background: linear-gradient(160deg, #ffce00 20%, #ff8b00 80%);
    }

    li.input{
        margin-left: 0.6em;
    }
    li#liHOST{
        width: 80%;
        float: left;
    }
    input#HOST {
        width: 90%;
        height: 1.6em;
        padding-right: 1em;
    }
    input#METHOD {
        width: 2em;
    }
    li#liMETHOD{
        float: left;
        position: absolute;
        margin-left: 72%;
    }

    input#METHOD.button {
        border-left: none;
        border-radius:0 5em 5em 0;
        background: linear-gradient(#414345, #232526);
        width: 5em;
        height: 2em;
        text-align: center;
        position: relative;

        cursor: pointer;
        color: #fff;
        text-shadow: 0.1em 0.1em 0 rgba(000, 000, 000, 0.75);
        outline: none;
    }

    input#PORT {
        width: 2.8em;
    }
    li#liPORT{
        clear: both;
        float: left;
    }

    input#TIME {
        width: 2.3em;
    }
    li#liTIME{
        float: left;
        text-shadow: 0.1em 0.1em 0.1em #ff9000;
    }

    input#TIP {
        box-shadow: none;
        border: none;
        background: none;
        pointer-events: none;
        transition: 0;
        margin-left:-0.5em;
        width: 99%;

    }
    li#liTIP{
        width: 5.2em;
        float: left;
        text-shadow: 0;
        margin-left: 0.1em;
        padding-right: 0;
    }
    input#TIP::placeholder {
        font-size: 0.6em;
        color: #fff;
        font-style: italic;
        transition: 0;
    }


    #center{
        font-size: 0.8em;
        border: 0.1em solid #fff;
        background: linear-gradient(to right, #6dd5ed, #2193b0);
        margin: 0 auto;
    }
    li.center{
        padding-top: 1em;
        padding-bottom: 1em;
        padding-left: 1em;
        font-weight: 400;
        color: #fff;
    }
    input.center{
        list-style: none;
        pointer-events: none;
        box-shadow: none;
        background: none;
        border: none;
        margin-left: -0.8em;
        color: #fff;
    }
    input.center::placeholder {
        color: #fff;
        display: inline-block;
        font-size: 1em;
    }

    input#COUNTDOWN{
        width: 3em;
        display: inline-block;
        opacity: 0;
        animation: countdown 1s forwards;
    }
    @keyframes countdown {
        40% {
            transform: scale(.8);
            opacity: 1;
        }

        60% {
            transform: scale(3);
            opacity: 0;
        }

        80% {
            transform: scale(3);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    li.center label {
        display: inline-block;
        width: 1em;
        height: 1em;
        cursor: pointer;
        margin-left: -1.1em;
        z-index: 1;
    }

    input#TARGET{
        width: 40%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap; 
    }

    input#PROXIES{
        width: 40%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap; 
    }

    #btton{
        color: #fff;
        border: none;
        margin: 0 auto;
        height: 100%;

    }

    li.btn{
        list-style: none;
        text-align: center;
        width: 45%;
        height: 2.8em;
        line-height: 2.8em;
        font-weight: 200;
        display: inline-block;
        font-size: 1.2em;
        text-shadow: 0.1em 0.1em 0.1em #000;
        border: 0.1em solid #fff;
        border-radius: 0.8em;
        background: linear-gradient(to right, #414345, #232526);
        box-shadow: 0em 0.1em 0.1em #D6BEAB;
        margin: 0.8em 0 0 0.5em;
        padding: 0;
    }
    li.btn:active,
    li.btn:focus {
        opacity: 1;
        cursor: pointer;
        animation: button 0.5s infinite;
    }

    @keyframes button {
        40% {
            transform: scale(.8);
        }

        60% {
            transform: scale(1.2);
        }

        80% {
            transform: scale(0.8);
        }

        100% {
            transform: scale(1);
        }
    }

    li.btn[disabled] {
        opacity: 0;
        animation: buttonD 1s forwards;
    }

    @keyframes buttonD {
        40% {
            transform: scale(.9);
            opacity: 0.5;
        }

        60% {
            transform: scale(1.2);
            opacity: 0;
        }

        80% {
            transform: scale(1.2);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 0.5;
        }
    }

    .clean{
        visibility: hidden;
        clear: both;
    }

    #bottm{
        position: fixed;
        left: -0.1em;
        bottom: 0;
        width: 100%;
        height: 2.5em;
        line-height: 2.5em;
        text-align: center;
        font-size: 0.8em;
        font-weight: 400;
        box-shadow: 0em -0.1em 0.1em #E0E0E0;
        color: #fff;
        border-top: 0.1em solid #fff;
        background: linear-gradient(90deg, #101010 20%, #121212 80%);
    }
    </style>
    <script>
    function gethost(element){
        var i = element.id;
        var n = document.getElementById(i).value;
        n = n.replace(/\s+/ig, "");
        if(i == "HOST"){
            var http = n.match(/http(s)?/ig);
            var host = n.replace(/http(s)?:\/\//ig,"");
            var port = n.match(/:\d+/ig);
            if(http == null&&port == null){
                    http = "http";
                    port = "80";
            }else if(http != null&&port == null){
                http = http[0];
                if(http == "https"){
                    port = "443";
                }else{
                    port = "80";
                }
            }else{
                port = port[0];
                port = port.replace(/:/ig,""); 
                if (port == "443"){
                    http = "https";
                }else{
                    http = "http";
                }
            }
            if(host != ""){
                document.getElementById("PORT").value = port;
                document.getElementById("TARGET").value = http + "://" + host;
                document.getElementById("EXECUTE").removeAttribute("disabled");
            }else{
                document.getElementById("TARGET").value = "";
                document.getElementById("PORT").value = "";
                document.getElementById("EXECUTE").setAttribute("disabled","disabled");
            }
        }
        if(i == "PORT"){
            var host = document.getElementById("TARGET").value;
            host = host.replace(/http(s)?:\/\//ig,"");
            n = n.replace(/[^\d+]/ig,"");
            if(n == "443"){
                http = "https";
            }else{
                http = "http";
            }
            if(port != ""){
                document.getElementById("TARGET").value = http + "://" + host;
            }else{
                document.getElementById("PORT").value = "";
            }
        }
        if(i == "TIME"){
            n = n.replace(/[^\d+]/ig,"");
            if (n =="" ){
                n = document.getElementById("TIME").getAttribute("placeholder");
            }
            document.getElementById("COUNTDOWN").value = n;      
        }
    }
   
    function getmethod(){
        var n = document.getElementById("METHOD").getAttribute("placeholder");
        if (n==11){
            document.getElementById("METHOD").setAttribute("placeholder",10);
            document.getElementById("METHOD").value = "MB";
            var i = document.getElementById("TARGET").value;
            if ( i == ""){
                document.getElementById("EXECUTE").setAttribute("disabled","disabled");   
            }
        }
        if (n==10){
            document.getElementById("METHOD").setAttribute("placeholder",9);
            document.getElementById("METHOD").value = "CCS";
            var i = document.getElementById("TARGET").value;
            if ( i == ""){
                document.getElementById("EXECUTE").setAttribute("disabled","disabled");   
            }
        }
        if (n==9){
            document.getElementById("METHOD").setAttribute("placeholder",8);
            document.getElementById("METHOD").value = "MBS";
            var i = document.getElementById("TARGET").value;
            if ( i == ""){
                document.getElementById("EXECUTE").setAttribute("disabled","disabled");   
            }
        }
        if (n==8){
            document.getElementById("METHOD").setAttribute("placeholder",7);
            document.getElementById("METHOD").value = "SLOW";
            var i = document.getElementById("TARGET").value;
            if ( i == ""){
                document.getElementById("EXECUTE").setAttribute("disabled","disabled");   
            }
        }
        if (n==7){
            document.getElementById("METHOD").setAttribute("placeholder",6);
            document.getElementById("METHOD").value = "SMB";
            var i = document.getElementById("TARGET").value;
            if ( i == ""){
                document.getElementById("EXECUTE").setAttribute("disabled","disabled");   
            }
        }
        if (n==6){
            document.getElementById("METHOD").setAttribute("placeholder",5);
            document.getElementById("METHOD").value = "GET";
            document.getElementById("EXECUTE").removeAttribute("disabled");
        }
        if (n==5){
            document.getElementById("METHOD").setAttribute("placeholder",4);
            document.getElementById("METHOD").value = "GETS";
            document.getElementById("EXECUTE").removeAttribute("disabled");
        }
        if (n==4){
            document.getElementById("METHOD").setAttribute("placeholder",3);
            document.getElementById("METHOD").value = "CHK";
            document.getElementById("EXECUTE").removeAttribute("disabled");
        }
        if (n==3){
            document.getElementById("METHOD").setAttribute("placeholder",2);
            document.getElementById("METHOD").value = "CHKS";
            document.getElementById("EXECUTE").removeAttribute("disabled");
        }
        if (n==2){
            document.getElementById("METHOD").setAttribute("placeholder",1);
            document.getElementById("METHOD").value = "STOP";
            document.getElementById("EXECUTE").removeAttribute("disabled");
        }
        if (n==1){
            document.getElementById("METHOD").setAttribute("placeholder",11);
            document.getElementById("METHOD").value = "CC";
            var i = document.getElementById("TARGET").value;
            if ( i == ""){
                document.getElementById("EXECUTE").setAttribute("disabled","disabled");   
            }
        }
    }

    function countdown(){
        var i = document.getElementById("TIME").value;
        document.getElementById("EXECUTE").setAttribute("disabled","disabled");
        var time = setInterval(function () {
            if (i == -1) {
                clearInterval(time);
                document.getElementById("EXECUTE").removeAttribute("disabled");
                document.getElementById("COUNTDOWN").style.animation = "countdown 1s forwards";
                $.ajax({
                    url: "api.php",
                    dataType: "text",
                    success: function (data) {
                        alert(data);
                    }
                });
            }else{
                document.getElementById("COUNTDOWN").value = i;
                document.getElementById("COUNTDOWN").style.animation = "countdown 1s infinite";
                --i;
            }
        }, 1000);
    }

    function execute() {
        var host = document.getElementById("TARGET").value;
        var port = document.getElementById("PORT").value;
        var time = document.getElementById("TIME").value;
        var method = document.getElementById("METHOD").value;
        var key = "ccgo";
        if(time == ""){
            time = 60;
            document.getElementById("TIME").value = time;
        }
        if(port == ""){
            port = 80;
            document.getElementById("TIME").value = time;
        }
        method = method.toLowerCase();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                countdown();
                var i = xhttp.responseText;    
            }
        };
        xhttp.open("GET", "api.php?&key=" + key + "&host=" + host + "&port=" + port + "&time=" + time + "&method=" + method, true);
        xhttp.send();
    }

    setInterval("getnow()",1000);
    </script>
</head>
<body>
    <?php
    $proxies = "http.txt";
    $severname = ["CCGO"];
    $method =["CC"];
    $notion = ["Before You Put Your Life In Your Hand , Put Your Feet In Ours."];
    $center = ["TARGET","COUNTDOWN","POXYIES"];
    $btton = ["EXECUTE"];
    $copyright = ["© Copyright CCGO, All rights reserved."];
    $top = ["HOST","METHOD","PORT","TIME","TIP"];
    $tplaceholder = ["URL | IP","CC",80,60,"# Maximum 3600 #"];
    $cplaceholder = ["URL | IP",60,0];

    function disp($x){
        echo $x[0];
    }
    
    function proxies() {
        $line = count(file($GLOBALS["proxies"]));
        return $line;
    }

    function top($x,$y) {
        $xlength = count($x);
        $ylength = count($y);
        for($i = 0; $i < $xlength; $i++) {
            for ($i = 0; $i < $ylength; $i++){
                $name=$x[$i].":";
                $liid="\"li".$x[$i]."\"";
                $id = "\"".$x[$i]."\"";
                $placeholder="\"".$y[$i]."\"";
                $type = "\"text\"";
                $class = "\"input\"";
                $method = "onkeyup=";
                $methodvalue = "\"\"";
                $value = "\"\"";
                switch ($i) {
                    case "0":
                        $methodvalue = "\"gethost(this)\"";
                        $maxlength = "";
                        break;
                    case "1":
                        $xlength = count($GLOBALS["method"]);
                        $method = "onClick=";
                        $type = "\"button\"";
                        $class = "\"button\"";
                        $name = "";
                        $methodvalue = "\"getmethod()\"";
                        $value =  $GLOBALS["method"][0];
                        $placeholder= $xlength;
                        break;
                    case "2":
                        $methodvalue = "\"gethost(this)\"";
                        $maxlength = "5";
                        break;
                    case "3":
                        $methodvalue = "\"gethost(this)\"";
                        $maxlength = "4";
                        break;
                    case "4":
                        $name = ".sec";
                        break;
                    default:
                        $maxlength = "2";
                }
            echo "<li id=".$liid." class=".$class.">".$name."<input id=".$id."class=".$class." type=".$type." ".$method.$methodvalue." maxlength=\"".$maxlength."\" placeholder=".$placeholder." value=".$value." /><label for=".$id."></label></li>";
            }
        }
    }

    function center($x,$y){
        $xlength = count($x);
        $ylength = count($y);
        for($i = 0; $i < $xlength; $i++) {
            for ($i = 0; $i < $ylength; $i++){
                $id = "\"".$x[$i]."\"";
                $liid="\"li".$x[$i]."\"";
                $name=$x[$i]." : ";
                $class = "\"center\"";
                $placeholder="\"".$y[$i]."\"";
                $type = "\"text\"";
                $method = "onkeyup=";
                $value = "\"\"";
                $maxlength = "\"\"";
                $tip = "";
                switch ($i) {
                    case "1":
                        $tip =".sec";
                    break;
                    case "2":
                        $value = proxies();
                        $placeholder= proxies();
                    break;
                default:
                }
            echo "<li id=".$liid." class=".$class.">".$name."<input id=".$id."class=".$class." type=".$type." ".$method.$value." maxlength=\"".$maxlength."\" placeholder=".$placeholder." /><label for=".$id.">".$tip."</label></li>";
            }
        }        
    }

    function btn($x){
        $xlength = count($x);
        for($i = 0; $i < $xlength; $i++) {
            $name=$x[$i];
            $id = "\"".$x[$i]."\"";
            $class = "\"btn\"";
            $onClick="\"\"";
            $type="\"\"";
            $value="\" \"";
            $disabled = "";
            switch ($i) {
                case "0":
                    $onClick = "\"execute()\"";
                    $disabled = "disabled";
                break;
            default:
            }
            echo "<li id=".$id." class=".$class." type=".$type." value=".$value." onClick=".$onClick." ".$disabled." >".$name."</li>";
        }
    }

?>
<div>
    <div class="frame" id="top">
        <h1><?php disp($severname); ?></h1>
        <h2><?php disp($notion); ?></h2>
        <?php top($top,$tplaceholder); ?>
        <li class=clean></li>
    </div>
</div>
<div>
    <div class="frame" id="center">
            <?php center($center,$cplaceholder); ?>
            <li class=clean></li>
    </div>
</div>
<div>
    <div class="frame" id="btton">
            <?php btn($btton); ?>
            <li class=clean></li>
    </div>
</div>
<div>
    <div class="frame" id="bottm"> 
        <?php disp($copyright); ?>
        <li class=clean></li>
    </div>
</div>
</body>
</html>