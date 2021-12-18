<?php 
class Remote {
	
	function getPrice(string $url, string $start, string $end) {
		$html = file_get_contents($url);
		$start = stripos($html, $start);
		$end = stripos($html, $end, $offset = $start);
		$length = $end - $start;
		$htmlSection = substr($html, $start, $length);
		return $htmlSection;
	}
}

$remote = new Remote();

?>