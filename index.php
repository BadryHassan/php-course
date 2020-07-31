<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
    // Using two forward slashes we create comments in php.
    // Within the php tag, we can insert values into our HTML.
    //*****Variables******
    $name= 'PHP Store';
    $credit=1000;
    $products['Computer'] = 750;
    $products['Car'] = 15000;
    $products['iPhone'] = 1000;
    $products['Toaster'] = 75;

    //******DisplayResults******
    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h2>You Have $".$credit." in your wallet </h2>";
    echo "<p>A Car cost $".$products['Car']."</p>";
        //******Listing all products*******
    foreach ($products as $key => $value) {
      echo "<p>The ".$key." costs ".$value." </p>";
    }

    echo "<h2> Items you can buy </h2>";
    foreach ($products as $key => $value) {
      if ($value <= $credit) {
        echo "<p>".$key."</p>";
      }
    }

    //***** Calculate Tax*****
    $amount= 800;
    $tax= 0.0825;
    $addedTax= $amount*$tax;
    echo $addedTax;
    
    //****Tax Calculator****
    function tax_calc($amount,$tax){
      $calculate_tax =$amount*$tax;
      $amount=round($amount+$calculate_tax,2);
      return $amount;
    }

    echo tax_calc(750,0.223);

    ?>
  </body>
</html>
