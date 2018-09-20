<h1>NEIS School Meal / Schedule Parser</h1>

NEIS에서 학교의 급식, 일정 정보를 가져옵니다.

simple_html_dom.php가 필수적으로 필요합니다.

array 형태로 이번 달 전체 점심 급식과 일정이 return됩니다.

<h1>사용법</h1>

ParseNEISMeal("지역 교육청 주소", "학교 코드", "학교 종류")

ParseNEISSchedule("지역 교육청 주소", "학교 코드", "학교 종류")

지역 교육청 주소 예시 : goe.go.kr

학교 코드 예시 : J100005670

학교 종류 : 유치원 1, 초등학교 2, 중학교 3, 고등학교 4

array 내부는 ;로 구분되어 있습니다. (;를 기준으로 배열로 만드시면 됩니다.)

;를 기준으로 배열을 만드실 경우, 0번째 배열이 해당 일자입니다. (ex : 21일 -> 21)

<h1>License</h1>

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

====================

<h1>Third Party Notices</h1>

PHP Simple HTML DOM Parser
http://simplehtmldom.sourceforge.net/

----------
PHP Simple HTML DOM Parser was authord by 'S.C. Chen'
for more details, please visit the following site.
http://simplehtmldom.sourceforge.net/