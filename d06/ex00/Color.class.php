<?php

class 	Color {

	public	$green;
	public	$red;
	public	$blue;
	public	static	$verbose = FALSE;

	function	__construct(array $color) {

		if (isset($color['red']) && isset($color['blue']) && isset($color['green'])) {
			$this->red = intval($color['red']);
			$this->green = intval($color['green']);
			$this->blue = intval($color['blue']);
		}
		else if (isset($color['rgb'])) {
			$this->red = intval(($color['rgb'] & 0x0000FF));
			$this->green = intval(($color['rgb'] & 0x00FF00) >> 8);
			$this->blue = intval(($color['rgb'] & 0xFF0000) >> 16);
		}
		if (self::$verbose == TRUE) {
			printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n",
				$this->red, $this->green, $this->blue);
		}
	}

	function	__toString() {
		return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )",
			array ($this->red, $this->green, $this->blue)));
	}

	function	__destruct() {

		if (self::$verbose == TRUE) {
			printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n",
				$this->red, $this->green, $this->blue);
		}
	}

	static	function	doc() {
		return file_get_contents("Color.doc.txt");
	}

	function	sub($new) {
		return (new Color(array('red' => $this->red - $new->red,
			'green' => $this->green - $new->green,
			'blue' => $this->blue - $new->blue)));
	}

	function	add($new) {
		return (new Color(array('red' => $this->red + $new->red,
			'green' => $this->green + $new->green,
			'blue' => $this->blue + $new->blue)));
	}

	function	mult($new) {
		return (new Color(array('red' => $this->red * $new,
			'green' => $this->green * $new,
			'blue' => $this->blue * $new)));
	}
}

?>
