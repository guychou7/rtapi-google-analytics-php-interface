<?php 

require "rtapi.class.php";

$ga_profile_id="xxxxxx";//your google analytics account ID
$metrics= array("activeUsers");
$dimensions= array("userType");//"userType","medium","city"

$rt = new rtapi("XXXX@developer.gserviceaccount.com", "oauthkeyfile.p12");
$rt->requestReportData($ga_profile_id,$dimensions,$metrics);
$result = $rt->getResults();

/*
echo '<pre>';
print_r($result[0]);
echo '</pre>';
*/
if ($result==NULl){
  $useronline=0;
  $pluriel="";
}else{ 
  $useronline=$result[0]->getactiveUsers();
  if($useronline > 1){
      $pluriel="s";
  }
}
echo $useronline." Visiteur".$pluriel." en ligne";
