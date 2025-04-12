<?php
/**
 * array[i] = element인 첫 i를 반환한다. 없으면 -1을 반환한다.
 * 
 * @param array $array 탐색할 정수 배열
 * @param int $element 찾을 요소 값
 * @return int 요소의 첫 번째 인덱스 또는 없으면 -1
 */
function firstIndex(array $array, int $element): int {
    for ($i = 0; $i < count($array); ++$i) {
        if ($array[$i] === $element) {
            return $i;
        }
    }
    return -1;
}

// 사용 예시
$array = [7, 5, 2, 9, 5, 1, 8, 5, 3];
$element = 5;
$index = firstIndex($array, $element);

if ($index != -1) {
    echo "요소 $element는 배열의 $index 위치에서 처음 등장합니다.\n";
} else {
    echo "요소 $element는 배열에 존재하지 않습니다.\n";
}
?> 