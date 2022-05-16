<?php
    include_once __DIR__ . '/entities/product.php';
    include_once __DIR__ . '/entities/user.php';

     $food = new FoodProduct('Super Dog Name', 'Food Type', 9.99, true);
     $game = new GameProduct('Super Dog Game', 'Game Type', 12.99, true);
     $dogBed = new DogBedProduct('Super Dog Bed', 'Bed Type', 39.99, true);
     $unsignedUser = new User();
     $signedUser = new SignedUser();

    echo('<pre>');
        var_dump($unsignedUser);
    echo('</pre>');

     echo('<pre>');
        var_dump($food);
    echo('</pre>');



   
    $signedUser->setDiscount();
    // $signedUser->getDiscount();
    // echo( $food->getPrice() );

    echo('<pre>');
        var_dump($signedUser);
    echo('</pre>');

    // $food->getDiscount();

    echo('<pre>');
        var_dump($food->getDiscount());
    echo('</pre>');

    echo('<pre>');
        var_dump($game->getDiscount());
    echo('</pre>');

    echo('<pre>');
        var_dump($unsignedUser->addProduct('croccantini','cibo',20.00, true));
    echo('</pre>');

    
    



    


    // echo('<pre>');
    //     var_dump($dogBed);
    // echo('</pre>');






?>