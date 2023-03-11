<?php 
class Misc {
	
	public static function dateTimeFormat($standardDate) {
		return str_replace('-','/',$standardDate);
	}
	
	
	
	public static function standardDateFormat($dateTimeFormat) {
		return str_replace('/','-',$dateTimeFormat);
	}
	
	
	
	public static function moneyFormatIndia($num){
		$num = round($num);
		$explrestunits = "" ;
		if(strlen($num)>3){
			$lastthree = substr($num, strlen($num)-3, strlen($num));
			$restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
			$restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
			$expunit = str_split($restunits, 2);
			for($i=0; $i<sizeof($expunit); $i++){
				// creates each of the 2's group and adds a comma to the end
				if($i==0)
				{
					$explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
				}else{
					$explrestunits .= $expunit[$i].",";
				}
			}
			$thecash = $explrestunits.$lastthree;
		} else {
			$thecash = $num;
		}
		return $thecash; // writes the final format where $currency is the currency symbol.
	}
	
	
	
	
	public static function cleanPhone($phone) {
		//replace space and - with none
		$phone = str_replace(' ','',$phone);
		$phone = str_replace('+91','',$phone);
		$phone = str_replace('+','',$phone);
		$phone = str_replace(' ','',$phone);
		$phone = (int)str_replace('-','',$phone);
		//return (int)$phone;
		return preg_replace("/[^0-9]/","",$phone);
	}
	
	
	
	public static function cleanNumber($number) {
		//replace space and - with none
		$number = str_replace('}','',$number);
		$number = str_replace('+91','',$number);
		$number = str_replace('+','',$number);
		$number = str_replace(' ','',$number);
		$number = (int)str_replace(']','',$number);
		
		//return (int)$number;
		return preg_replace("/[^0-9]/","",$number);
	}
	
	
	
	public static function cleanEmail($email) {
		//replace space and - with none
		$email = strtolower($email);
		
		//return (int)$number;
		return $email;
	}
	
	
}