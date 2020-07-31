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
    $taxRate=0.025;

    //******Functions**********
    function tax_calc($amount,$tax){
      $addedTax = $amount*$tax;
      $amountWithTax= round($amount+$addedTax,2);
      return $amountWithTax;
    }

    //******DisplayResults******
    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h2>You Have $".$credit." in your wallet </h2>";

    //******Listing all products*******
    foreach ($products as $key => $value) {
      $costWithTax= tax_calc($value,$taxRate);
      echo "<p>The ".$key." costs ".$costWithTax." with tax </p>";
    }


    echo "<h2> Items you can buy </h2>";
    foreach ($products as $key => $value) {
      $costWithTax= tax_calc($value,$taxRate);
      if ($costWithTax <= $credit) {
        echo "<p>".$key."</p>";
      }
    }

    ?>
  </body>
</html>
