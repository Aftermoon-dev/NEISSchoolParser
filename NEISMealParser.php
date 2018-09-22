<?php
	/**********************************************
	The MIT License (MIT)

	Copyright (C) 2018 Minjae Seon (darkhost225@gmail.com) 

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.
	***********************************************/
	
	require 'simple_html_dom.php';
	
	function ParseNEISMeal($localurl, $schulCode, $schulKindCode, $year, $month) {
		// NEIS URL
		$url = "https://stu.$localurl/sts_sci_md00_001.do?schulCode=$schulCode&schulCrseScCode=$schulKindCode&schulKndScCode=0$schulKindCode&ay=$year&mm=$month";
		
		// Get HTML
		$html = file_get_html($url);	
		
		// Data Extract
		$mealData = array();
		foreach($html->find('table[class=tbl_type3 tbl_calendar]') as $row) {
			$rowData = array();
			foreach($row->find('tr td') as $cell) {
				if($cell->innertext != '<div></div>' && $cell->innertext != '<div> </div>') {
					$rowData[] = $cell->innertext;
				}
			}
			$mealData[] = $rowData;
		}
		
		// Remove Unnecessary String
		$mealArray = array();
		$removeArray = array('[중식]<br />', '<div>', '</div>');
		$divRegex = '/<div>[0-9]*<\/div>/i';
		foreach($mealData as $array) {
			foreach($array as $text) {
				if(preg_match($divRegex, $text)) {
					$text = str_replace('</div>', ';', $text);
				}
				$text = str_replace($removeArray, '', $text);
				$text = str_replace('&amp;', '&', $text);
				$text = str_replace('<br />', ';', $text);
				$mealArray[] = $text;
			}
		}
		
		return $mealArray;
	}
?>