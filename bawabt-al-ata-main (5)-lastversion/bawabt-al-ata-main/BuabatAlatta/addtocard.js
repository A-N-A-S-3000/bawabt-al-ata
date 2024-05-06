// read age for discount amount
/** 
const age = parseInt(prompt("How old are you?"));
let discount = 0;
// check if input is valid
while(!Number.isInteger(age)){
    alert("Invalid input");
    age = parseInt(prompt("How old are you?"));
}
// give discount in term of user age
if(age<18){
    discount = 0.1;
}else{ discount= 0.05;}
*/
// function calculate
function calculate(){
    // first element 
    // read price 
    var elem1price = parseInt(document.getElementById("firselementPrice").textContent);
    // read quantity
    var elem1quant = parseInt(document.getElementById("num1").value);
    // compute total for this product
    var subtotal_Ele1 = (elem1price * elem1quant);
    // check quantity is valid
    if(!Number.isInteger(subtotal_Ele1)){
        alert("Invalid input");
        return;
    }
    // write the total in html file
    document.getElementById("totalProduct1").innerHTML = subtotal_Ele1;
    // second elemnet
    // read price 
    var elem2price = parseInt(document.getElementById("secondelementPrice").textContent);
    // read quantity
    var elem2quant = parseInt(document.getElementById("num2").value);
    // compute total for this product
    var subtotal_Ele2 = (elem2price * elem2quant);
    // check quantity is valid
    if(!Number.isInteger(subtotal_Ele2)){
        alert("Invalid input");
        return;
    }
    // write the total in html file
    document.getElementById("totalProduct2").innerHTML = subtotal_Ele2;
    // third elemnet
    // read price 
    var elem3price = parseInt(document.getElementById("thirdelementPrice").textContent);
    // read quantity
    var elem3quant = parseInt(document.getElementById("num3").value);
    // compute total for this product
    var subtotal_Ele3 = (elem3price * elem3quant);
    // check quantity is valid
    if(!Number.isInteger(subtotal_Ele3)){
        alert("Invalid input");
        return;
    }
    // write the total in html file
    document.getElementById("totalProduct3").innerHTML = subtotal_Ele3;
    // calculation
    var solution = (elem1price * elem1quant) + (elem2price * elem2quant) + (elem3price * elem3quant);
    //var discountvalue = solution * discount;
    //var total  = solution - discountvalue;
    // write data in html file
    document.getElementById("subtotal").innerHTML = solution;
    //document.getElementById("discount").innerHTML = discountvalue;
    //document.getElementById("total").innerHTML = total;
}

