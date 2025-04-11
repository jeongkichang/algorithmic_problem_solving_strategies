<?php
/**
 * 주어진 배열에서 가장 많이 등장하는 숫자를 반환한다.
 * 만약 두 가지 이상 있을 경우 아무것이나 반환한다.
 * 
 * @param array $arr 정수 배열
 * @return int 가장 많이 등장하는 숫자
 */
function majority(array $arr): int {
    $n = count($arr);
    $majority = -1;
    $majorityCount = 0;
    
    for ($i = 0; $i < $n; ++$i) {
        // $arr에 등장하는 $arr[$i]의 수를 센다.
        $v = $arr[$i];
        $count = 0;
        
        for ($j = 0; $j < $n; ++$j) {
            if ($arr[$j] === $v) {
                ++$count;
            }
        }
        
        // 지금까지 본 최대 빈도보다 많이 출현했다면 답을 갱신한다.
        if ($count > $majorityCount) {
            $majorityCount = $count;
            $majority = $v;
        }
    }
    
    return $majority;
}

// 사용 예시
$arr = [1, 2, 3, 1, 1, 2, 1];
$result = majority($arr);
echo "가장 많이 등장하는 숫자: " . $result;
?> 