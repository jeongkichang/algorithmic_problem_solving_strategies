/**
 * 선택 정렬 알고리즘
 * 배열 A를 오름차순으로 정렬한다.
 * 
 * @param A 정렬할 배열
 */
function selectionSort(A: number[]): void {
    const n = A.length;
    for (let i = 0; i < n; ++i) {
        let minIndex = i;
        for (let j = i+1; j < n; ++j) {
            if (A[minIndex] > A[j]) {
                minIndex = j;
            }
        }
        // 현재 위치와 최소값 위치를 교환
        [A[i], A[minIndex]] = [A[minIndex], A[i]];
    }
}

/**
 * 삽입 정렬 알고리즘
 * 배열 A를 오름차순으로 정렬한다.
 * 
 * @param A 정렬할 배열
 */
function insertionSort(A: number[]): void {
    const n = A.length;
    for (let i = 0; i < n; ++i) {
        // A[0..i-1]에 A[i]를 끼워넣는다.
        let j = i;
        while (j > 0 && A[j-1] > A[j]) {
            // 인접한 두 원소를 교환
            [A[j-1], A[j]] = [A[j], A[j-1]];
            --j;
        }
    }
}

// 사용 예시
const array1 = [9, 4, 3, 1, 7, 8, 6, 2, 5];
const array2 = [9, 4, 3, 1, 7, 8, 6, 2, 5];

console.log("원본 배열:", array1.join(", "));

selectionSort(array1);
console.log("선택 정렬 결과:", array1.join(", "));

insertionSort(array2);
console.log("삽입 정렬 결과:", array2.join(", "));

export { selectionSort, insertionSort }; 