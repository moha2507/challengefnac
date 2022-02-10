<!--    echo writeSecretSentence('le crapeau', 'la lune');
    function writeSecretSentence(string $secret1, string $secret2){
        return $secret1 . " s'incline face a " . $secret2;
        
    } -->

    <?php
        function calcule($num_1, $num_2)
        {
            $total = $num_1 * $num_2;
            return $total;
        }
        echo calcule(10,3);