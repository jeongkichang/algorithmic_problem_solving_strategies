<?php
/**
 * 최대 연속 부분 구간 합 문제를 푸는 무식한 알고리즘들
 */

// 최소 정수값 설정
const MIN = PHP_INT_MIN;

/**
 * A의 연속된 부분 구간의 최대 합을 구한다. 시간 복잡도: O(N^3)
 * 
 * @param array $A 정수 배열
 * @return int 최대 합
 */
function inefficientMaxSum(array $A): int {
    $N = count($A);
    $ret = MIN;
    
    for ($i = 0; $i < $N; ++$i) {
        for ($j = $i; $j < $N; ++$j) {
            // 구간 A[i..j]의 합을 구한다.
            $sum = 0;
            for ($k = $i; $k <= $j; ++$k) {
                $sum += $A[$k];
            }
            $ret = max($ret, $sum);
        }
    }
    
    return $ret;
}

/**
 * A의 연속된 부분 구간의 최대 합을 구한다. 시간 복잡도: O(N^2)
 * 
 * @param array $A 정수 배열
 * @return int 최대 합
 */
function betterMaxSum(array $A): int {
    $N = count($A);
    $ret = MIN;
    
    for ($i = 0; $i < $N; ++$i) {
        $sum = 0;
        for ($j = $i; $j < $N; ++$j) {
            // 구간 A[i..j]의 합을 구한다.
            $sum += $A[$j];
            $ret = max($ret, $sum);
        }
    }
    
    return $ret;
}

// 사용 예시
$array = [-7, 4, -3, 6, 3, -8, 3, 4];
echo "원본 배열: " . implode(", ", $array) . "\n";
echo "inefficientMaxSum: " . inefficientMaxSum($array) . "\n";
echo "betterMaxSum: " . betterMaxSum($array) . "\n";
?> 