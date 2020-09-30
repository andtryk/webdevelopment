<?php

(function(){
    $aLetters = ["a","b","c"];
    print_r($aLetters);
    array_push($aLetters, "d");
    print_r($aLetters);
    unset($aLetters[1]);
    print_r($aLetters);
    for ($i = 0; $i < count($aLetters); $i++) { 
        print_r($aLetters);
    };
    foreach ($aLetters as $aLetter) {
        echo "<br>Letter $aLetter";
    }
})();