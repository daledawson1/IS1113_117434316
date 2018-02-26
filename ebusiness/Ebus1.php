<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
       
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <link rel="stylesheet" href="ebusiness.css" type="text/css"/>

    </head>
    
    <body>
        <div class="econtent">
          <h1 class="headingnumber1">Select a Product</h1>
              
          <br>
              
          <form method="POST" action="Ebus2.php">
            
            
            <!-- Display radio buttons for cloud service options -->
            <label for="salesforce" class="dale">
              <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
              SalesForce @ $100
            </label>
                
            <br>
            
            <label for="cloud9" class="dawson">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               Cloud9 @ $200
            </label>
                
            <br>
                
            <label for="aws" class="gemma">
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
              AWS @ $300
            </label>
                
            <br>
                
            <label for="gmail" class="kevin">
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
              Gmail @ $400
            </label>
            <!-- Breakdown -->
            </br>
            <h1 class="headingnumber2">Breakdown</h1>
            </br>
            
            <label for="subtotal" class="jason">
              Sub Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
               </br>
            </label>
            
             </br>
            
            <label for="discount" class="ryan">
              Discount @ 5% &nbsp;&nbsp;&nbsp; <input type="text" id="discount" name="discount" value="0.00" readonly/>
               </br>
              (- Discount)
            </label>
                
             </br>
              </br>
            
            <label for="vat" class="ben">
               </br>
              VAT @ 10% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="vat" name="vat" value="0.00" readonly/>
              </br>
             ( + VAT)
             </br>
             
            </label>
                
             </br>
            
                
            <label for="total" class="nathan">
               </br>
                </br>
              Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="total" name="total" value="0.00" readonly/>
               </br>
              (- Discount + VAT)
            </label>
      
             </br>
            
            <div class="shoppingcart"> 
             </br>
              </br>
              <button class="shoppingcartstyle" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
               </br>
            </div>  
              
          </form>

          <!-- button for calculating price breakdown of the selected option -->  
           </br>
          <button class="calcbutton" onClick="calcSub()">Calculate Cost</button>
             
          <br>
            
          <!-- button for clearing the selected options -->    
           </br>
          <a class="cancelbutton" role="button" href="Ebus1.php">Clear Choice</a>
        </div>
    </body>
</html>
