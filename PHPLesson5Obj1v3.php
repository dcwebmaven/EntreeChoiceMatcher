<font style="font-size:16px;">
Thank you for dining at the <i>Homesick Restaurant</i>!
<br/>
<br/>
  
<?
   /*Here's where we pull the information from the form into the PHP.*/
   
         $dinner = $_GET["entree_choice"];
        
                     
       //function to pair the entree choice and beverage together
        function select_beverage($dinner) {
 
 
    
    if ($dinner == "Steak") {
      $beverage = "Fruit Punch";
    }
    else if ($dinner == "Salmon") {
      $beverage = "Ginger Ale";
    }
    else if ($dinner == "Barbecue Pork") {
      $beverage = "Sparkling Cider";
    }
    else if ($dinner == "Chicken") {
      $beverage = "Diet Coke";
    }
    
   else {
      echo "ERROR: Please return to our menu and make a selection.";
   }
    return $beverage;
  
  }

 //defines the $beverage value so it can be used in the tally
$beverage = select_beverage($dinner);
  
   

//this is where we display the data from the form and the function along with static HTML text

  $appetizer = "House Salad";
  $drink = $beverage;
  $entree = $dinner;
  $dessert = "Apple Pie";
  
  $appetizer_price = 5.95;
  $drink_price = 8.95;
  $entree_price = 9.75;
  $dessert_price = 4.75;
  
  $subtotal = $appetizer_price + $drink_price + $entree_price + $dessert_price;//cost of menu items in order
  $tax = $subtotal *.08;//cost with tax
  $tip = $subtotal * .15;//cost including tip
  $grand_total = $subtotal + $tax + $tip;
  
   
?>

<table>
  <tr><td><strong>Your Menu Choice</strong></td><td><strong>Item Price</strong></td></tr>
  <tr><td><? echo $appetizer; ?></td><td><? echo number_format($appetizer_price,2); ?></td></tr>
  <tr><td><? echo $drink; ?></td><td><? echo number_format($drink_price,2); ?></td></tr>
  <tr><td><? echo $entree; ?></td><td><? echo number_format($entree_price,2); ?></td></tr>
  <tr><td><? echo $dessert; ?></td><td><? echo number_format($dessert_price,2); ?></td></tr>
  <tr><td><strong>Subtotal</strong></td><td><? echo number_format($subtotal,2); ?></td></tr>
  <tr><td><strong>Tax</strong></td><td><? echo number_format($tax,2); ?></td></tr>
  <tr><td><strong>Tip</strong></td><td><? echo number_format($tip,2); ?></td></tr>
  <tr><td><strong>Grand Total</strong></td><td><? echo number_format($grand_total,2); ?></td></tr>
</table>
<br/>
Please come see us again!