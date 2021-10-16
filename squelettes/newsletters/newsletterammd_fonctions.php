<?php

require 'inlinestyle/autoload.php';
use \InlineStyle\InlineStyle;
libxml_use_internal_errors(true);

	function inline($texte) {
		$htmldoc = new InlineStyle($texte);
		$htmldoc->applyStylesheet($htmldoc->extractStylesheets());
		$html = $htmldoc->getHTML();

		$html = str_replace('noscript','style',$html);
		$html = str_replace('noscript','style',$html);
		$html = str_replace('noscript','style',$html);
		$html = str_replace('noscript','style',$html);
		$html = str_replace('noscript','style',$html);
		$html = str_replace('var(--p-margin)','1em', $html);
		$html = str_replace('var(--accent)','#BF616A', $html);
		$html = str_replace('var(--foreground)','#ffffff', $html);
		$html = str_replace('var(--background)','#ECEFF4', $html);
		$html = str_replace('var(--border-radius)','3px', $html);
		$html = str_replace('var(--border)','#D8DEE9', $html);

		return $html;
	}
?>
