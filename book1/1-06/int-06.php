<?php
	// 16진법으로 변수에 값을 저장합니다.
	// 16진법은 0x로 시작합니다.
	$a = 0x01;
	$b = 0xa8;
	$b = 0xff;

	// 2진수를 8bit 형태로 출력합니다.
	printf("16진법 : a = %x, b= %x, c= %x <br>",$a, $b, $c);
	printf("10진법 : a = %d, b= %d, c= %d <br>",$a, $b, $c);

	// 16진수 => 10진수 변환
	echo "16진수(a8) => 10진수(".hexdec("a8").")<br>";

	//10진수 => 16진수 변환
	echo "10진수(255) => 16진수(".dechex(255).")<br>"; 

?>