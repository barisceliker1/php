<?php
if($_POST){
	echo "bağlantı yapıldı";
	if(isset($_POST["eposta"]))
    {$eposta=strip_tags(trim($_POST["eposta"]));
     $şifre=$_POST["şifre"];
	 echo "eposta".$eposta."şifre".$şifre;
    }
	else{
   echo" eposta gelmedi";
}	}//karşılamam lazım
    else{
	echo "bağlantı yok";
}


?>