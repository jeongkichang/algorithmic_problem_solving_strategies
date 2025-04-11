<?php
/**
 * 실수 배열 A가 주어질 때, 각 위치에서의 M-이동 평균 값을 구한다.
 * 
 * @param array $arr 실수 배열
 * @param int $m 이동 평균의 윈도우 크기
 * @return array 이동 평균 값들의 배열
 */
function movingAverage(array $arr, int $m): array {
    $ret = [];
    $n = count($arr);
    
    for ($i = $m-1; $i < $n; ++$i) {
        // A[i]까지의 이동 평균 값을 구하자.
        $partialSum = 0;
        for ($j = 0; $j < $m; ++$j) {
            $partialSum += $arr[$i-$j];
        }
        $ret[] = $partialSum / $m;
    }
    
    return $ret;
}

// 사용 예시
$arr = [1.0, 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 10.0, 11.0, 12.0];
$m = 3;
$result = movingAverage($arr, $m);

echo "이동 평균 결과:\n";
foreach ($result as $value) {
    echo number_format($value, 2) . " ";
}
?> 