<?php

function createMenuCard($num, $Starter1, $Starter2, $Starter3,
                        $Main1, $Main2, $Main3,
                        $Dessert1, $Dessert2, $Dessert3, $Price){
  // check starters
  if (is_null($Starter1)) {
    $Starter1 = "";
  }
  if (is_null($Starter2)) {
    $Starter2 = "";
  }
  if (is_null($Starter3)) {
    $Starter3 = "";
  }

  // check mains
  if (is_null($Main1)) {
    $Main1 = "";
  }
  if (is_null($Main2)) {
    $Main2 = "";
  }
  if (is_null($Main3)) {
    $Main3 = "";
  }

  // check desserts
  if (is_null($Dessert1)) {
    $Dessert1 = "";
  }
  if (is_null($Dessert2)) {
    $Dessert2 = "";
  }
  if (is_null($Dessert3)) {
    $Dessert3 = "";
  }

  $element= "
    
    <div class=\"card border shadow-0 mx-1 my-2 \" style= \"max-width: 18rem;\">
    <div class= \"card-header bg-transparent fw-bold text-center \">Menu $num</div>
        <div class= \"card-body \">
          <p class= \"fw-bold \">Starters</p> 
          <p class= \"card-text fst-italic \">$Starter1</p>
          <p class= \"card-text fst-italic \">$Starter2</p>
          <p class= \"card-text fst-italic \">$Starter3</p>
          <p class= \"fw-bold \">Mains</p>
          <p class= \"card-text fst-italic \">$Main1</p>
          <p class= \"card-text fst-italic \">$Main2</p>
          <p class= \"card-text fst-italic \">$Main3</p>
          <p class= \"fw-bold \">Dessert</p>
          <p class= \"card-text fst-italic \">$Dessert1</p>   
          <p class= \"card-text fst-italic \">$Dessert2</p>
          <p class= \"card-text fst-italic \">$Dessert3</p>                          
      </div>
      <div class= \"card-footer d-flex justify-content-center\">
            <div class=\"row text-center\"><p>Price: $Price</p</div>
            <div=\"row mb-2\">
              <button type=\"submit\" class=\"btn btn-rounded btn-primary\" id=\"menuSelectionButton\"name=\"add\" onclick=\"displayPlusMinus(); hideSelectButton()\" style=\"display:block\">Select</button>
              <div id=\"addMoreLess\" style=\"display:none\">                  
              <button type=\"button\" class=\"btn btn-primary btn-floating btn-sm\" onclick=\"addLess()\">
                <i class=\"fas fa-minus\"></i>
              </button>
                <span class=\"mx-2\" id=\"numberSelected\"></span>
                <button type=\"button\" class=\"btn btn-primary btn-floating btn-sm\" onclick=\"addMore()\">
                    <i class=\"fas fa-plus\"></i>
                </button>
              </div>
            </div>
        </div>
        </div>
        </div>
</div>
    
     ";
echo $element;
    };


function createBeveragesCard(){
  $element=  "
  
  <div class= \"row my-lg-5 dflex flex-wrap justify-content-center \">
  <div class= \"card mx-1 my-2 \" style= \"max-width: 18rem; \">
      <img src= \"./images/wineBottleRed.png \" class= \"card-img-top my-2 \" alt= \"Fissure in Sandstone \"/>
      <div class= \"card-footer text-center \">
        <p class= \"fw-bold \">RED WINE<p>
          <p class= \"fw-light \">France</p>
          <p>€59,00</p>
        <div>
          <div class= \"container col-7 d-flex justify-content-center \">
            <div class= \"form-outline mb-2 \" >
              <input type=\"number \" class= \"form-control text-center \" value= \"0 \" min= \"0 \"/>
            </div>
          </div>
        </div>
    </div>
  </div>
  
    ";
  echo $element;
      };