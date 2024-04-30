class Solution {

    /**
     * @param String $s
     * @return String
     */
   function reverseWords($s) {
    $length = strlen($s);
    $result = '';
    $word = '';

    for ($i = 0; $i < $length; $i++) {
        if ($s[$i] == ' ') {
            // If space is encountered, reverse the word and add it to result
            $reversedWord = '';
            $wordLength = strlen($word);
            for ($j = $wordLength - 1; $j >= 0; $j--) {
                $reversedWord .= $word[$j];
            }
            $result .= $reversedWord . ' ';
            $word = '';
        } else {
            // If character is not space, append it to current word
            $word .= $s[$i];
        }
    }

    // Reverse the last word and append it to result
    $reversedWord = '';
    $wordLength = strlen($word);
    for ($j = $wordLength - 1; $j >= 0; $j--) {
        $reversedWord .= $word[$j];
    }
    $result .= $reversedWord;

    return $result;
}

}