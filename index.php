<?php
  echo writeSecretSentence('le crapeau', 'la lune');
    function writeSecretSentence(string $secret1, string $secret2)
    {
        return $secret1 . " s'incline face a " . $secret2;
    }
