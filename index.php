<?php
    include_once __DIR__ . '/entities/product.php';
    include_once __DIR__ . '/entities/user.php';

     $food = new Product('Super Dog Name', 'Food Type', 9.99);
     $game = new Product('Super Dog Game', 'Game Type', 12.99);
     $dogBed = new Product('Super Dog Bed', 'Bed Type', 39.99);

    
    echo('<pre>');
        var_dump($food);
    echo('</pre>');

    echo('<pre>');
        var_dump($game);
    echo('</pre>');

    echo('<pre>');
        var_dump($dogBed);
    echo('</pre>');






?>