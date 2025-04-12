<?php
const INF = 987654321;

// 전역 변수
$M = 0; // 요리할 수 있는 음식의 종류 수

/**
 * 이 메뉴로 모두가 식사할 수 있는지 여부를 반환한다
 * 
 * @param array $menu 선택된 메뉴 목록
 * @return bool 모두가 식사할 수 있는지 여부
 */
function canEverybodyEat(array $menu): bool {
    // 이 함수는 구현되지 않았으므로 예시로 true를 반환
    return true;
}

/**
 * food 번째 음식을 만들지 여부를 결정한다.
 * 
 * @param array &$menu 현재 선택된 메뉴 목록 (참조로 전달)
 * @param int $food 현재 결정할 음식 번호
 * @return int 최소한의 음식 수
 */
function selectMenu(array &$menu, int $food): int {
    global $M;
    
    // 기저 사례: 모든 음식에 대해 만들지 여부를 결정했을 때
    if ($food == $M) {
        if (canEverybodyEat($menu)) return count($menu);
        // 아무것도 못 먹는 사람이 있으면 아주 큰 값을 반환한다.
        return INF;
    }
    
    // 이 음식을 만들지 않는 경우의 답을 계산한다.
    $ret = selectMenu($menu, $food+1);
    
    // 이 음식을 만드는 경우의 답을 계산해서 더 작은 것을 취한다.
    $menu[] = $food;
    $ret = min($ret, selectMenu($menu, $food+1));
    array_pop($menu);
    
    return $ret;
}

// 사용 예시
$M = 4; // 음식 종류 4개
$menu = [];
$result = selectMenu($menu, 0);

echo "최소한으로 만들어야 하는 음식의 수: " . ($result == INF ? "불가능" : $result);
?> 