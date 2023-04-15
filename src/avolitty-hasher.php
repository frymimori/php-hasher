<?php
	function AvolittyHasherA() {
	}

	function AvolittyHasherB() {
	}

	function AvolittyHasherC() {
	}

	function AvolittyHasherD() {
	}

	function AvolittyHasherE() {
	}

	function AvolittyHasherF() {
	}

	function AvolittyHasherG($a) {
		$b = (string) $a[0];
		$c = $a[1];
		$d = $a[2];
		$e = $a[3];
		$f = strlen($b);
		$g = 0;

		while ($f != $g) {
			$d = (((ord($b[$g]) + $d + (($d + 2) >> 1))) & 16383) + 2;
			$h = $e & 63;
			$c[$h] = ($c[$h] + $d) & 1023;
			$e++;
			$g++;
		}

		return array(
			$a[0],
			$c,
			$d,
			$e
		);
	}

	function AvolittyHasherH() {
	}

	function AvolittyHasherI() {
	}

	function AvolittyHasherJ() {
	}

	function AvolittyHasherK() {
	}

	function AvolittyHasherL($a) {
		$b = "";
		$c = $a[1];
		$d = $a[2];
		$e = count($a[1]);
		$f = 0;

		while ($e != 0) {
			$e--;
			$c[$e] = $d;
			$d = (($c[$e] + $c[$f] + $e + (($d + $e) >> 1)) & 16383) + 2;
			$c[$f] = $d;
			$b .= dechex($d & 15);
			$f++;
		}

		return $b;
	}
?>
