/**
 * 선형 시간에 이동 평균을 구하는 함수
 * 실수 배열 A가 주어질 때, 각 위치에서의 M-이동 평균 값을 O(N) 시간에 구한다.
 * 
 * @param A 실수 배열
 * @param M 이동 평균의 윈도우 크기
 * @returns 이동 평균 값들의 배열
 */
function movingAverage2(A: number[], M: number): number[] {
    const ret: number[] = [];
    const N = A.length;
    let partialSum = 0;
    
    // 첫 번째 윈도우의 합을 미리 계산
    for (let i = 0; i < M-1; ++i) {
        partialSum += A[i];
    }
    
    // 선형 시간으로 이동 평균 계산
    for (let i = M-1; i < N; ++i) {
        partialSum += A[i];
        ret.push(partialSum / M);
        partialSum -= A[i-(M-1)];
    }
    
    return ret;
}

// 사용 예시
const arr = [1.0, 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 10.0, 11.0, 12.0];
const m = 3;
const result = movingAverage2(arr, m);

console.log("선형 시간 이동 평균 결과:");
console.log(result.map(val => val.toFixed(2)).join(" "));

export default movingAverage2; 