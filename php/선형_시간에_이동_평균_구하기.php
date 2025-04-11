<?php
/**
 * 선형 시간에 이동 평균을 구하는 함수
 * 실수 배열 A가 주어질 때, 각 위치에서의 M-이동 평균 값을 O(N) 시간에 구한다.
 * 
 * @param array $arr 실수 배열
 * @param int $m 이동 평균의 윈도우 크기
 * @return array 이동 평균 값들의 배열
 */
function movingAverage2(array $arr, int $m): array {
    $ret = [];
    $n = count($arr);
    $partialSum = 0;
    
    // 첫 번째 윈도우의 합을 미리 계산
    for ($i = 0; $i < $m-1; ++$i) {
        $partialSum += $arr[$i];
    }
    
    // 선형 시간으로 이동 평균 계산
    for ($i = $m-1; $i < $n; ++$i) {
        $partialSum += $arr[$i];
        $ret[] = $partialSum / $m;
        $partialSum -= $arr[$i-($m-1)];
    }
    
    return $ret;
}

// 사용 예시
$arr = [1.0, 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 10.0, 11.0, 12.0];
$m = 3;
$result = movingAverage2($arr, $m);

echo "선형 시간 이동 평균 결과:\n";
foreach ($result as $value) {
    echo number_format($value, 2) . " ";
}
?> 