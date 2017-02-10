<?php
//Get language and format to iso code
$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$lc = substr($lang, 0, 2);
//If Catalan change iso code to 3 letters
if($lc == 'ca')
  $lc = 'cat';
//if Language is forced override browser language and save to cookie
if (isset($_GET['lang'])){
  $i = $_GET['lang'];
  $cl = $i;
  if(isset($_COOKIE['lang'])) {
    if($_COOKIE['lang'] !== $i)
      setcookie('lang', $i, '-1', '/');
  }
} else {
//if language is not forced but exists on cookie (previous visit) redirect to choosen language (if not set cookie for browser language)
  if(isset($_COOKIE['lang'])) {
    $cl = $_COOKIE['lang'];
  } else {
    $cl = $lc;
    setcookie('lang', $lc);
  }
  //$i = $_GET['lang'];
  setcookie('lang',$cl, '-1', '/');
}
//Include language file.
include "lang/".$cl.".php";

?>
