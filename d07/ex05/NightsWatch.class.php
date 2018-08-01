<?php

class 	NightsWatch	implements	IFighter	{

	private	$_array = [];

	public	function	recruit($someone)	{
		if (method_exists($someone, "fight"))
		{
			$this->_array[] = $someone;
		}
	}

	public	function	fight() {
		$get = $this->_array;
		foreach ($get as $key) {
			$key->fight();
		}
	}
}

?>
