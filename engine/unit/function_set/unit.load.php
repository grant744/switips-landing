<?php

function gen_password() {
		$chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";
		$max=15;
		$size=StrLen($chars)-1;
		$password=null;
	    while($max--)
	    $password.=$chars[rand(0,$size)];

		return $password;
}


?>