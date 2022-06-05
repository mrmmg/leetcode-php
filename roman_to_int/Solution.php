<?php

class Helper {
    public const ROMAN_REGEX = '/^M{0,3}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/i';

    protected static function validateInput($string){
        return self::validateInputLength($string) && self::validateRomanCharacters($string);
    }

    protected static function validateInputLength($string){
        $stringLength = strlen($string);
        return $stringLength >= 1 || $stringLength <= 15;
    }

    protected static function validateRomanCharacters($string){
        return preg_match(self::ROMAN_REGEX, $string) > 0;
    }
}

class Solution extends Helper {
    private static array $romanSymbolToIntMap = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    public function romanToInt($input) {
        if (!self::validateInput($input)) {
            return "Your Input Is Wrong!!!";
        }

        $result = 0;

        for ($i = 0, $iMax = strlen($input); $i < $iMax; $i++) {
            //getting symbol of current char
            $current_character = $input[$i];

            //getting value of current symbol
            $roman_symbol_int = self::$romanSymbolToIntMap[$current_character];

            //getting symbol of next char - null if there is no next char
            $next_symbol_int = !isset($input[$i + 1]) ? null : self::$romanSymbolToIntMap[$input[$i + 1]];

            //adding/subtracting value from result based on next symbol
            $result += (!is_null($next_symbol_int) && $next_symbol_int > $roman_symbol_int) ? -$roman_symbol_int : $roman_symbol_int;
        }

        return $result;
    }
}

$solution = new Solution();
echo $solution->romanToInt("CM");