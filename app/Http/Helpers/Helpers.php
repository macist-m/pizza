<?php

function theDate($date, $time = false)
{	

	if ($date != NULL) {
		if($time == true) {
			return Date::parse($date)->format('j M Y') . ' '  . Date::parse($date)->format('H:i:s');
		}
		return Date::parse($date)->format('d/m/Y');	
	}

	return null;
	
}

function delivered($delivered)
{

	if($delivered) return 'Teslim Edildi';

	return 'Teslim Edilmedi';

}

function pizzaAmountArray($max = 10)
{

	for ($i = 1; $i <= $max; $i++) { 
		$arr[$i] = $i;		
	}

	return $arr;
	
}

function pizzaSizeArray() {
	
	return ['s' => 'Ufak', 'm' => 'Orta', 'l' => 'Büyük'];

}