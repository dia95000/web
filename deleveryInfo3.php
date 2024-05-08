<html>
    <head>
        <title> Delevery Information </title>
        <style>
            .show-result-div{
                display:grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                margin-left:  100px;
                margin-right:  100px;
            }

            .show-result-div div{
                background-color:lightgray;
                border-color:black;
                border-width:2px;
                border-style:solid;
                font-size:18px;
                padding:5px;
                
            }

            p{
                font-size:30px;
                font-style:bold;
                margin-top:100px;
                margin-left:100px;
            }

            .totalAmount-div{
                font-size:20px;
                font-style:bold;
                margin-top:10px;
                margin-left:100px;

            }

        </style>
    </head>
    <body>
    
    <p><u>Your Order Details </u></p>
    <?php
$item1 = filter_input(INPUT_POST,"item1",FILTER_VALIDATE_BOOL); 
$itemName1 = "Air Refreshner 1";
$quantity1 = $_POST["quantity1"];
$amount1 = $_POST['amount1'];

$item2 = filter_input(INPUT_POST,"item2",FILTER_VALIDATE_BOOL);
$itemName2 = "Air Refreshner 2";
$itemPrice = 160;
$quantity2 = $_POST["quantity2"];
$amount2 = $_POST['amount2'];

$item3 =  filter_input(INPUT_POST,"item3",FILTER_VALIDATE_BOOL);
$itemName3 = "Air Refreshner 3";
$quantity3 = $_POST["quantity3"];
$amount3 = $_POST['amount3'];

$totalOrderAmount = $amount1 + $amount2 + $amount3;

if($item1 || $item2 || $item3)
{
    echo "<div class='show-result-div'> ". 
                "<div>". "Item Name" ."  </div> 
                <div> ". "Item Price" . " </div>
                <div> ". "Quantity". " </div>
                <div>  " . "Amount" . "</div>
          </div>";

    if($item1){
        echo "<div class='show-result-div'> ". 
                "<div>".$itemName1."  </div> 
                <div> ". $itemPrice. " </div>
                <div> ". $quantity1. " </div>
                <div>  " . $amount1 . "</div>
            </div>";
        }

    if($item2){
        echo "<div class='show-result-div'> ". 
                "<div>".$itemName2."  </div> 
                <div> ". $itemPrice. " </div>
                <div> ". $quantity2. " </div>
                <div>  " . $amount2 . "</div>
            </div>";
        } 
        
    if($item3){
        echo "<div class='show-result-div'> ". 
                "<div>".$itemName3."  </div> 
                <div> ". $itemPrice. " </div>
                <div> ". $quantity3. " </div>
                <div>  " . $amount3 . "</div>
            </div>";
        }

    echo "<div class='totalAmount-div'>Total Amount = " . $totalOrderAmount .  " </div>" ;

} else
{
    echo "<p>You did NOT choose any product !!!!. Please go back to order now</p>" ;
}

?>

    
</body>
</html>