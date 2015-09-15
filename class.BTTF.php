<?php
class BTTF
{
	private $source;
	private $filename;
	private $eof;
	private $rand;
	private $slice;
	private $output;

	public function __construct()
	{
		$this->filename = 'BTTF-script.txt';
		$this->source = file($this->filename, FILE_IGNORE_NEW_LINES);
		$this->eof = 3162-1; // Number of lines in BTTF-script.txt minus one
		$this->rand = rand(0, $this->eof); // Start at a random spot in the source array
		$this->slice = array_slice($this->source, $this->rand);
		$this->output = $output;
	}

	private function generateSentences(
		$sentences = 5 // Number of sentences per paragraph, if not overridden in generateParagraphs()
	){
		$sentences = ( is_int($sentences) && $sentences > 0 ? $sentences : 5 );
		$text = '';
		for($s=0;$s<$sentences;$s++):
			$text .= $this->slice[$s];
		endfor;

		return $text;
	}

	public function generateParagraphs(
		$paragraphs = 1, // Number of paragraphs to generate
		$html = true, // Wrap each paragraph in HTML <p> tag?
		$sentences = 5 // Number of sentences per paragraph
	){
		$paragraphs = ( is_int($paragraphs) && $paragraphs > 0 ? $paragraphs : 1 );
		$sentences = ( is_int($sentences) && $sentences > 0 ? $sentences : 5 );

		if($html) {
			for($p=0;$p<$paragraphs;$p++):
				$this->slice = array_slice($this->source, $this->rand + (5*$p) );
				$this->output .= '<p>'.$this->generateSentences($sentences).'</p>

';
			endfor;
		} else {
			for($p=0;$p<$paragraphs;$p++):
				$this->slice = array_slice($this->source, $this->rand + (5*$p) );
				$this->output .= $this->generateSentences($sentences).'

';
			endfor;
		}

		return trim($this->output);
	}

}
?>