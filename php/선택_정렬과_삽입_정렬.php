<?php
/**
 * 선택 정렬 알고리즘
 * 배열 A를 오름차순으로 정렬한다.
 * 
 * @param array &$A 정렬할 배열 (참조로 전달)
 */
function selectionSort(array &$A): void {
    $n = count($A);
    for ($i = 0; $i < $n; ++$i) {
        $minIndex = $i;
        for ($j = $i+1; $j < $n; ++$j) {
            if ($A[$minIndex] > $A[$j]) {
                $minIndex = $j;
            }
        }
        // 현재 위치와 최소값 위치를 교환
        $temp = $A[$i];
        $A[$i] = $A[$minIndex];
        $A[$minIndex] = $temp;
    }
}

/**
 * 삽입 정렬 알고리즘
 * 배열 A를 오름차순으로 정렬한다.
 * 
 * @param array &$A 정렬할 배열 (참조로 전달)
 */
function insertionSort(array &$A): void {
    $n = count($A);
    for ($i = 0; $i < $n; ++$i) {
        // A[0..i-1]에 A[i]를 끼워넣는다.
        $j = $i;
        while ($j > 0 && $A[$j-1] > $A[$j]) {
            // 인접한 두 원소를 교환
            $temp = $A[$j-1];
            $A[$j-1] = $A[$j];
            $A[$j] = $temp;
            --$j;
        }
    }
}

// 사용 예시
$array1 = [9, 4, 3, 1, 7, 8, 6, 2, 5];
$array2 = [9, 4, 3, 1, 7, 8, 6, 2, 5];

echo "원본 배열: " . implode(", ", $array1) . "\n";

selectionSort($array1);
echo "선택 정렬 결과: " . implode(", ", $array1) . "\n";

insertionSort($array2);
echo "삽입 정렬 결과: " . implode(", ", $array2) . "\n";
?> 