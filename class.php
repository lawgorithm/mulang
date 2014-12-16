<?php
class Mulang {
	private $notes;
	function __construct() {
		$notes = array (
				"a",
				"a-flat",
				"b",
				"b-flat",
				"c",
				"d-flat",
				"d",
				"e-flat",
				"e",
				"f",
				"g-flat",
				"g" 
		);
	}
	public function randomNote() {
		if (shuffle ( $this->notes )) {
			$file = "../assets/" . $this->notes [array_rand ( $this->notes)] . "-3.wav";
			
			array_rand ( $notes );
			header ( 'Content-type: audio/wav' );
			// header('Content-Disposition: inline; filename='.basename($file));
			header ( 'Content-Disposition: inline; filename="note.wav"' );
			header ( 'Pragma: public' );
			header ( 'Content-Length: ' . filesize ( $file ) );
			
			// The wav source is in assets
			readfile ( $file );
		}
		return shuffle () ? $this->notes [array_rand ( $this->notes )] : false;
	}
}
?>