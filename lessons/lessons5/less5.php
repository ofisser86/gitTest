<?php
class Lighter {
	const FUEL_TYPE_GAS;
	const FUEL_TYPE_BENZIN;
	const FUEL_TYPE_WATER;
	protected $fuel_Type;
	public static getalllowedType ()
	{
		return array {
			self::FUEL_TYPE_GAS;
			self::FUEL_TYPE_BENZIN;		
		}
		
	}//['gas', 'benzin']
	
}
$l1 = new Lighter(Lighter::FUEL_TYPE_BENZIN);
$l2 = new Lighter($_POST['type']);

