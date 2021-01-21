<?php
/*
    Author: Ömer Faruk Biçer
    Website: https://www.cibza.com
    Sevgiler saygılar şifreleme algoritması emrinizde :).
*/

namespace Fire;

class Fire {
    public $chars = array(
        // Lower Letters
        'a' => 'ı2c', 'b' => '7bd', 'c' => 'alg', 'ç' => 'dFc3', 'd' => 'dim', 'e' => 'ac2',
        'f' => 'aim', 'g' => '423', 'ğ' => 'cc77', 'h' => '58c', 'ı' => 'CC80', 'i' => 'cin',
        'j' => 'fıs', 'k' => 'sus', 'l' => 'Lsm', 'm' => 'mrı', 'n' => '572', 'o' => '88c',
        'ö' => 'alıı', 'p' => 'ııc', 'r' => 'ipp', 's' => '7ck', 't' => '670', 'u' => '927',
        'ü' => '4Zl2', 'v' => 'v28', 'y' => 'cBA', 'z' => 'all', 'q' => 'Jhha', 'w' => 'Egg8',
        'x' => 'jjHf',
    
        // Upper Letters
        'A' => '7ı2D', 'B' => '47bW', 'C' => 'AalF', 'Ç' => 'JdF3T', 'D' => 'Odm6', 'E' => 'Ba2T',
        'F' => 'JamQ', 'G' => 'R7c5', 'Ğ' => 'Gc77$', 'H' => '55c5', 'I' => 'RC80R', 'İ' => 'Ocne',
        'J' => 'tfsE', 'K' => '9ssU', 'L' => 'SLmU', 'M' => 'FmıA', 'N' => '5G2A', 'O' => 'J8cA',
        'Ö' => 'Aaıı6', 'P' => '2ıcG', 'R' => 'ZipY', 'S' => 'G7kG', 'T' => 'Q67Q', 'U' => 'X97X',
        'Ü' => 'VZl2C', 'V' => 'Gv8F', 'Y' => 'JcBT', 'Z' => '8al6', 'Q' => '5Jha1', 'W' => '5Eg80',
        'X' => '1jjf9',
        
        // Numbers
        '0' => 'We', '1' => 'Sf', 
        '2' => 'ss', '3' => 'o8',
        '4' => 'Xs', '5' => 'xq',
        '6' => '7s', '7' => 'hj', 
        '8' => 'jj', '9' => 'yJ',
    
        // Symbols
        '-' => '+=', ' ' => '--', '(' => '<=', ')' => '=>', '[' => '<.', ']' => '.>', '{' => '((', '}' => '))',
        '/' => '++', '*' => '//', '+' => 'AA', '_' => 'BB', '$' => 'DD', '₺' => 'TT', '€' => 'EE', '£' => 'PP',
        '!' => 'İİ', '^' => '==', '=' => '__', '.' => '[[', '?' => '¿¿', "'" => '""', '"' => "''", ';' => '..',
        ':' => '/.', '@' => 'at', ',' => '\/', 'Â' => '<a', 'æ' => 'ea', '<' => '>>', '>' => '<<', '%' => '10',
        "\\" => '20', '#' => '2A', 'é' => '88', '&' => 'CC', '~' => 'eR', '|' => 'FF'
    );
    public function encode($str)
    {
        $term = '';
        $letters = mb_str_split($str, 1, 'UTF-8');
        for ($i=0; $i < count($letters); $i++) { 
            $term .= $this->chars[$letters[$i]];
        }
        
        return $term;
        
    }

    public function decode($str, $html = false)
    {
        $str = str_replace($this->chars, array_keys($this->chars), $str);
        if ($html == true) {
            return htmlspecialchars($str);
        }else{
            return $str;
        }
        
        
    }

}