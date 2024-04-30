class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {
        array_unshift($flowerbed, 0);
        array_push($flowerbed, 0);

        $flowerbedLength = count($flowerbed);
        for($i = 1; $i < $flowerbedLength - 1; $i++){
            if($flowerbed[$i] + $flowerbed[$i - 1] + $flowerbed[$i + 1] == 0){
                $n--;
                $i++;

            }
            if($n <= 0) return true;
        }
        
        return $n <= 0;
    }
}