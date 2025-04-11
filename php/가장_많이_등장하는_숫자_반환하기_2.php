<?php
/**
 * A의 각 원소가 0부터 100 사이의 값일 경우 가장 많이 등장하는 숫자를 반환한다.
 * 
 * @param array $arr 정수 배열
 * @return int 가장 많이 등장하는 숫자
 */
function majority2(array $arr): int {
    $n = count($arr);
    $count = array_fill(0, 101, 0);
    
    for ($i = 0; $i < $n; ++$i) {
        $count[$arr[$i]]++;
    }
    
    // 지금까지 확인한 숫자 중 빈도수가 제일 큰 것을 majority에 저장한다.
    $majority = 0;
    for ($i = 1; $i <= 100; ++$i) {
        if ($count[$i] > $count[$majority]) {
            $majority = $i;
        }
    }
    
    return $majority;
}

// 사용 예시
$arr = [1, 2, 3, 1, 1, 2, 1];
$result = majority2($arr);
echo "가장 많이 등장하는 숫자: " . $result;
?> 