/**
 * array[i] = element인 첫 i를 반환한다. 없으면 -1을 반환한다.
 * 
 * @param array 탐색할 정수 배열
 * @param element 찾을 요소 값
 * @returns 요소의 첫 번째 인덱스 또는 없으면 -1
 */
function firstIndex(array: number[], element: number): number {
    for (let i = 0; i < array.length; ++i) {
        if (array[i] === element) {
            return i;
        }
    }
    return -1;
}

// 사용 예시
const array = [7, 5, 2, 9, 5, 1, 8, 5, 3];
const element = 5;
const index = firstIndex(array, element);

if (index !== -1) {
    console.log(`요소 ${element}는 배열의 ${index} 위치에서 처음 등장합니다.`);
} else {
    console.log(`요소 ${element}는 배열에 존재하지 않습니다.`);
}

export default firstIndex; 