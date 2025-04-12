<?php
/**
 * 자연수 n의 소인수 분해 결과를 담은 정수 배열을 반환한다.
 * 
 * @param int $n 소인수 분해할 자연수
 * @return array 소인수 분해 결과를 담은 정수 배열
 */
function factor(int $n): array {
    if ($n == 1) return [1]; // n = 1인 경우는 예외로 한다.
    
    $ret = [];
    for ($div = 2; $n > 1; ++$div) {
        while ($n % $div == 0) {
            $n /= $div;
            $ret[] = $div;
        }
    }
    
    return $ret;
}

// 사용 예시
$numbers = [1, 2, 6, 12, 20, 24, 36, 60, 100];
foreach ($numbers as $n) {
    $factors = factor($n);
    echo "$n = " . implode(" × ", $factors) . "\n";
}
?> 