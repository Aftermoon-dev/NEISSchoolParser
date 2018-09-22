# NEIS School Meal / Schedule Parser

NEIS에서 학교의 급식, 일정 정보를 가져옵니다.

simple_html_dom.php가 필수적으로 필요합니다.

array 형태로 이번 달 전체 점심 급식과 일정이 return됩니다.

<h2>사용법</h2>

	ParseNEISMeal("지역 교육청 주소", "학교 코드", "학교 종류", "년", "월")
	ParseNEISSchedule("지역 교육청 주소", "학교 코드", "학교 종류", "년", 월")
	
	
* 지역 교육청별 홈페이지 주소

| 지역 교육청 | 주소 |
| :----:| :--:     |
| 서울특별시 | sen.go.kr |
| 인천광역시 | ice.go.kr |
| 울산광역시 | use.go.kr |
| 강원도 | gwe.go.kr |
| 전라북도 | jbe.go.kr |
| 경상남도 | gne.go.kr |
| 부산광역시 | pen.go.kr |
| 광주광역시 | gen.go.kr |
| 세종특별자치시 | sje.go.kr |
| 충청북도 | cbe.go.kr |
| 전라남도 | jne.go.kr |
| 제주특별자치도 | jje.go.kr |
| 대구광역시 | dge.go.kr |
| 대전광역시 | dje.go.kr |
| 경기도 | goe.go.kr |
| 충청남도 | cne.go.kr |
| 경상북도 | kbe.go.kr |

* 학교 코드

  https://www.meatwatch.go.kr/biz/bm/sel/schoolListPopup.do 에서 학교 코드 검색 가능

* 학교 종류 번호

  | 학교 종류 | 번호 |
  | :-------: | :--: |
  |  유치원   |  1   |
  | 초등학교  |  2   |
  |  중학교   |  3   |
  | 고등학교  |  4   |

* 년 / 월

  년도는 올해 년도 전체 입력 (ex. 2018)

  월은 두 자리 수로 입력 (ex. 9월 -> 09, 12월 -> 12)

array 내부는 ;로 구분되어 있습니다. (;를 기준으로 배열로 만드시면 됩니다.)

;를 기준으로 배열을 만드실 경우, 0번째가 해당 일자입니다. (ex : 21일 -> 21)

<h2>License</h2>

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

<h2>Third Party Notices</h2>

PHP Simple HTML DOM Parser
http://simplehtmldom.sourceforge.net/

	Website: http://sourceforge.net/projects/simplehtmldom/
	Additional projects that may be used: http://sourceforge.net/projects/debugobject/
	Acknowledge: Jose Solorzano (https://sourceforge.net/projects/php-html/)
	Contributions by:
 		Yousuke Kumakura (Attribute filters)
 		Vadim Voituk (Negative indexes supports of "find" method)
 		Antcs (Constructor with automatically load contents either text or file/url)
		
	Licensed under The MIT License
	Redistributions of files must retain the above copyright notice.

