<?php

class ServiceAuthenticationStub
{
    public static function accountAuthenticationProvider( $accNo )
	{
		$mockUpAccountNumber=0123444667;
		$mockUpAccountName="Kritsada Kancha";
		$mockUpAccountBalance=2000000;
		$mockUpErrorString="account not found";
		$isError=false;
		
		if( !$isError )
		{
			return array('accNo'=>$accNo, 'accName'=>$mockUpAccountName, 'accBalance'=>$mockUpAccountBalance);
		}
		else
		{
			return AccountInformationException("Account number : {$accNo} not found.");
		}
    }    
}

?>