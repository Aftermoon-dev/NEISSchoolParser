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
	
	function ParseNEISSchedule($localurl, $schulCode, $schulKindCode) {
		// NEIS URL
		$url = "https://stu.$localurl/sts_sci_sf01_001.do?schulCode=$schulCode&schulCrseScCode=$schulKindCode&schulKndScCode=0$schulKindCode";
		
		// Get HTML
		$html = file_get_html($url);	
		
		// Data Extract
		$schData = array();
		foreach($html->find('table[class=tbl_type3 tbl_calendar]') as $row) {
			$rowData = array();
			foreach($row->find('tr td div[class=textL]') as $cell) {
				$sch = "";
				$em = "";
				foreach($cell->find('strong') as $strong) {
					$sch = $strong->plaintext;
				}
				foreach($cell->find('em') as $em) {
					$em = $em->plaintext;
				}
				
				if($em != "") $rowData[] = $em . ";" . $sch;
			}
			$schData[] = $rowData;
		}
		
		// Remove Unnecessary String
		$schArray = array();
		$removeArray = array('<div>', '</div>', 'amp');
		foreach($schData as $text) {
			$text = str_replace($removeArray, '', $text);
			$text = str_replace('<br />', ';', $text);
			$schArray[] = $text;
		}
		
		return $schArray;
	}
?>