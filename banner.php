<?php
system("clear");
date_default_timezone_set("Asia/Jakarta");
$h = "\33[0;32m";
$h1 = "\33[32;1m";
$h2 = "\e[1;32m";
$b = "\33[0;36m";
$b1 = "\33[36;1m";
$b2 = "\e[1;34m";
$m = "\33[31;1m";
$m2 = "\e[1;31m";
$p2 = "\33[37;1m";
$p1 = "\e[1;37m";
$hm = "\33[30;1m";
$hm2 = "\33[0;30m";
$k = "\33[33;1m";
$k1 = "\33[1;33m";
$k2 = "\e[1;33m";
$c = "\e[0;36m";
$c1 = "\e[1;36m";
$u = "\e[0;35m";
$u2 = "\e[1;35m";
$a =	"\e[0;33m";
$a1 = "\e[0;37m";
$a2 = "\e[1;30m";

// animasi
function loadslow($arr){
  $char = str_split($arr);
  foreach($char as $animated){
    echo $animated;
    usleep(50000);
  }
}

function superslow($arr){
  $char = str_split($arr);
  foreach($char as $animated){
    echo $animated;
    usleep(10000);
  }
}

function slow($arr){
  $char = str_split($arr);
  foreach($char as $animated){
    echo $animated;
    usleep(5000);
  }
}

function fast($arr){
  $char = str_split($arr);
  foreach($char as $animated){
    echo $animated;
    usleep(1000);
  }
}

// banner
function banner(){
  global $h,$h1,$h2,$b,$b1,$b2,$m,$m2,$p1,$p2,$hm,$hm2,$k,$k1,$k2,$c,$c1,$u,$u2,$a,$a1,$a2;
  $banner = $p2."╭───────────────────────────────────────────────────────╮
│ $m2    _____   ______  ____  _   _____________ _______ $p2  │
│ $m2   /  _/ | / / __ \/ __ \/ | / / ____/ ___//  _/   |$p2  │
│  $m2  / //  |/ / / / / / / /  |/ / __/  \__ \ / // /| | $p2 │\n".
$p2."│  _/ // /|  / /_/ / /_/ / /|  / /___ ___/ // // ___ |  │
│ /___/_/ |_/_____/\____/_/ |_/_____//____/___/_/  |_|  │\n".$p2."╰───────────────────────────────────────────────────────╯
   $h2       <[$k2 INDONESIA MAJU DI TAHUN 2025 INI$h2 ]>\n";

 fast($banner);
}

function banner2(){
  global $h,$h1,$h2,$b,$b1,$b2,$m,$m2,$p1,$p2,$hm,$hm2,$k,$k1,$k2,$c,$c1,$u,$u2,$a,$a1,$a2;
  echo("\n");
  echo("\n");
  echo("\n");
  echo("\n");
  echo("\n");
  echo("\n");
  echo("\n");
  $banner2 = "$h2         ╔═╗┬ ┬┌┐ ┌─┐┌─┐┬─┐┬┌┐ ┌─┐
         ╚═╗│ │├┴┐└─┐│  ├┬┘│├┴┐├┤ 
         ╚═╝└─┘└─┘└─┘└─┘┴└─┴└─┘└─┘
                         
                         
$k2         ╔╦╗┬ ┬┬  ┬ ┬ $b2 ╦ ╦┌─┐     
$k2          ║║│ ││  │ │ $b2 ╚╦╝├─┤     
$k2         ═╩╝└─┘┴─┘└─┘ $b2  ╩ ┴ ┴     \n";

fast($banner2);
system("xdg-open https://youtube.com/@iqbalrmdiofficial?si=Tv7tschxojgPe6gk");
}

function banner3(){
  global $h,$h1,$h2,$b,$b1,$b2,$m,$m2,$p1,$p2,$hm,$hm2,$k,$k1,$k2,$c,$c1,$u,$u2,$a,$a1,$a2;
  echo("\n");
  echo("\n");
  echo("\n");
  echo("\n");
  echo("\n");
  echo("\n");
  echo("\n");
  $banner3 = "$h2     ╔╦╗┬ ┬┌─┐┌┐┌┬┌─ $k2 ╦ ╦┌─┐┬ ┬
$h2      ║ ├─┤├─┤│││├┴┐ $k2 ╚╦╝│ ││ │            
$h2      ╩ ┴ ┴┴ ┴┘└┘┴ ┴ $k2  ╩ └─┘└─┘            
                                      
$u2     ╔═╗┌┬┐┌─┐┌─┐  $b2 ╔╦╗┬ ┬┬┌─┬ ┬┌┐┌┌─┐┌─┐┌┐┌
$u2     ╠═╣ │ ├─┤└─┐  $b2  ║║│ │├┴┐│ │││││ ┬├─┤│││
$u2     ╩ ╩ ┴ ┴ ┴└─┘  $b2 ═╩╝└─┘┴ ┴└─┘┘└┘└─┘┴ ┴┘└┘
                                      
$c1     ┌┐┌┬ ┬┌─┐                             
     │││└┬┘├─┤                             
     ┘└┘ ┴ ┴ ┴                             \n";

fast($banner3);
}
function dash(){
  global $h,$h1,$h2,$b,$b1,$b2,$m,$m2,$p1,$p2,$hm,$hm2,$k,$k1,$k2,$c,$c1,$u,$u2,$a,$a1,$a2;
  $banner = $p2."╭─────────────────────────────────────────────────────────────╮
│                     ╭──────────────────────────────────╮    │
│ $m2 ██████╗".$p2." ██████╗    │$h2 [".$k2."SC FOR     : XRP-Unlimited".$h2."]   $p2  │    │
│ $m2 ██╔══██╗".$p2."██╔══██╗   │$h2 [".$k2."CREATOR    : IQBALRMDI".$h2."]     $p2    │    │
│ $m2 ██████╔╝".$p2."██║  ██║   │$h2 [".$p2."YT CREATOR : IQBALRMDIOFFICIAL".$h2."]$p2 │    │
│ $m2 ██╔══██╗".$p2."██║  ██║   │$h2 [".$b2."PROGRAM    : PHP".$h2."]           $p2    │    │
│ $m2 ██║  ██║".$p2."██████╔╝   │$h2 [".$c1."©COPYRIGTH IQBALRMDI 2025".$h2."]    $p2  │    │
│ $m2 ╚═╝  ╚═╝".$p2."╚═════╝    │$h2 [".$u2."SC FREE".$h2."]                   $p2     │    │
│                     ╰──────────────────────────────────╯    │
".$p2."╰─────────────────────────────────────────────────────────────╯\n";
fast($banner);
}

// waiting
function tim(){
  global $h,$h1,$h2,$b,$b1,$b2,$m,$m2,$p1,$p2,$hm,$hm2,$k,$k1,$k2,$c,$c1,$u,$u2,$a,$a1,$a2;
  for($i=600; $i>0; $i--){
    echo $c1."COOLDOWN WAIT $i SECOND OR 10 MINUTE";
    sleep(1);
    echo "                     \r";
  }
  return $i;
}

function load(){
  global $h,$h1,$h2,$b,$b1,$b2,$m,$m2,$p1,$p2,$hm,$hm2,$k,$k1,$k2,$c,$c1,$u,$u2,$a,$a1,$a2;
  for($i=5; $i>0; $i--){
    echo $h2."LOADING IN $i SECOND";
    sleep(1);
    echo "                     \r";
  }
  return $i;
}

// Licence
function licen(){
  global $h,$h1,$h2,$b,$b1,$b2,$m,$m2,$p1,$p2,$hm,$hm2,$k,$k1,$k2,$c,$c1,$u,$u2,$a,$a1,$a2;
  $lic = "5482391874";
if (file_exists('Licence.txt')) {
    $data = file_get_contents('Licence.txt');
    $lis = trim(str_replace("Licence: ", "", $data));
    if ($lis == $lic) {slow($p2."Scanning License$h2 [".$k2."█■■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■█■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■█■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■■█■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■■■█".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."█■■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■█■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■█■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■■█■".$h2."] \r");
        sleep(3);
        
        superslow($h2."Licence Benar ✓            \n");
    } else {
        slow($p2."Scanning License$h2 [".$k2."█■■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■█■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■█■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■■█■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■■■█".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."█■■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■█■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■█■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■■█■".$h2."] \r");
        sleep(3);
        superslow($m."Licence Salah Silahkan Coba Lagi\n");
        exit();
    }
} else {
    $lis = readline($p2."[".$h2."•".$p2."] Enter Licence : ".$hm2);
    if ($lis != $lic) {
        slow($p2."Scanning License$h2 [".$k2."█■■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■█■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■█■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■■█■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■■■█".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."█■■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■█■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■█■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■■█■".$h2."] \r");
        sleep(3);
        superslow($m."[X] Licence Salah Silahkan Coba Lagi\n");
        exit();
    } else {
        slow($p2."Scanning License$h2 [".$k2."█■■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■█■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■█■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■■█■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■■■█".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."█■■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■█■■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■█■■".$h2."] \r");
        sleep(1);
        echo($p2."Scanning License$h2 [".$k2."■■■█■".$h2."] \r");
        sleep(3);
        $data = "Licence: $lis";
        file_put_contents('Licence.txt', $data);
        superslow($h2."[✓] Licence Benar ✓          \n");
    }
}
}

// time
function waktu(){
  global $h,$h1,$h2,$b,$b1,$b2,$m,$m2,$p1,$p2,$hm,$hm2,$k,$k1,$k2,$c,$c1,$u,$u2,$a,$a1,$a2;
  echo($k2."");
  $tanggal = date('d');
$bulan = date('F'); // F untuk menampilkan bulan dengan nama lengkap
$tahun = date('Y');
$hari = date('l');
$hari_indonesia = array(
    'Monday' => "████████████████████╭────[Senin]─────╮███████████████████\n",
    'Tuesday' => "████████████████████╭────[Selasa]────╮███████████████████\n",
    'Wednesday' => "████████████████████╭────[ Rabu ]────╮███████████████████\n",
    'Thursday' => "████████████████████╭────[Kamis]─────╮███████████████████\n",
    'Friday' => "████████████████████╭────[Jum'at]────╮███████████████████\n",
    'Saturday' => "████████████████████╭────[Sabtu]─────╮███████████████████\n",
    'Sunday' => "████████████████████╭────[Minggu]────╮██████████████████\n"
);
echo "$hari_indonesia[$hari]";
echo ("████████████████████│$tanggal $bulan $tahun"."│███████████████████\n");
  echo date ("████████████████████╰───[H:i:s]───╯███████████████████\n");
}
fast(str_repeat($a1."#",57)."\n");
banner();
fast(str_repeat($a1."#",57)."\n");
waktu();
fast(str_repeat($a1."#",57)."\n");
licen();
if (file_exists('data.json')) { 
    // Jika sudah ada, baca isi file 
    $json_data = file_get_contents('data.json'); 
    $data = json_decode($json_data, true); 
    $cook = $data['cookie']; 
    $usr = $data['user_agent']; 
} else { 
    // Jika belum ada, minta pengguna untuk inputkan cookie dan user agent 
    $cookie = readline($p2."[".$h2."♦".$p2."] Enter Your Cookie : ".$k2); 
    $user_agent = readline($p2."[".$h2."♦".$p2."] Enter Your User Agent : ".$k2); 
    $data = array('cookie' => $cookie, 'user_agent' => $user_agent);
    $json_data = json_encode($data); 
    file_put_contents('data.json', $json_data); 
    slow($h2."[✓] Cookie Dan User Agent Telah Disimpan!\n");
}
load();
sleep(2);
fast(str_repeat($a1."█",57)."\n");
fast($h2."[!] Loading Succes ✓\n");
sleep(2);
system("clear");
sleep(2);
banner2();
sleep(5);
system("clear");
sleep(6);
banner3();
sleep(2);
system("clear");
sleep(2);
dash();
fast(str_repeat($a1."=",57)."\n");
waktu();
fast(str_repeat($a1."=",57)."\n");