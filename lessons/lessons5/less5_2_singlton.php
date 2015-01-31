<?php								//Пример Singlton
class A 
{
	public static $a =null;
	private function __construct (){}

public static function	functionName()
{
	if (is_null(self::$a))
	{
self::$a= new A();	
}
return self::$a;
public function test(){
	return 15;
	}
	}
}

A::functionNmae();

function test (){
	echo A::functionName()->test() // 15
	
}