<?php
    $book_stevenson["l'île au tresort"]= '1883';
    $book_stevenson["les nouvelles mille et un nuit"]= '1878';
    $book_stevenson["prince othon"]= '1885';
    asort($book_stevenson);

    foreach ($book_stevenson as $books => $years)
    echo ($books . ' ' . $years);
    
    