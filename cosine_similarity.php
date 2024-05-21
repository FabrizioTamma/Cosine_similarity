<?php
    
    function reccommend_movies($user_id){
        $movies= [];

        // chiamata a cosine_similarity()

        return json_encode ($movies);
    }
    
    function cosine_similarity($a, $b){
        // Calcolo denominatore
        $modulo_a = 0;
        $modulo_b = 0;
        $denominatore = 0;
        
        $length_vector = count($a);

        for($i = 0; $i < $length_vector; $i++){
            $modulo_a = $modulo_a + pow($a[$i], 2);
            $modulo_b = $modulo_b + pow($b[$i], 2);
        }
        $modulo_a = sqrt($modulo_a);
        $modulo_b = sqrt($modulo_b);
        $denominatore = $modulo_a * $modulo_b;
        // calcolo numeratore
        $numeratore = 0;
        for($i = 0; $i < $length_vector; $i++){
            $numeratore = $numeratore + $a[$i] * $b[$i];
        }
        return $numeratore / $denominatore;
    }
    
    
    echo cosine_similarity(
        [1, 1, 1, 1],
        [1, 1, 1, 1]
    );
     
?>