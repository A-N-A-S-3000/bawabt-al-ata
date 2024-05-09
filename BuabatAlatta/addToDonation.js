let discount = 0; // Declare discount variable outside the onload function

window.onload = function() {
    const age = parseInt(prompt("How old are you?"));
    
    // Check if input is valid
    while (!Number.isInteger(age)) {
        alert("Invalid input");
        age = parseInt(prompt("How old are you?"));
    }
    
    // Give discount in terms of user age
    if (age < 18) {
        discount = 0.1;
    } else {
        discount = 0.05;
    }

    // Retrieve quantities from localStorage and update the input fields
    for (var i = 1; i <= 6; i++) {
        var inputId = 'num' + i;
        var currentValue = localStorage.getItem(inputId);
        if (currentValue) {
            document.getElementById(inputId).value = currentValue;
        }
    }
    calculate();
};

function calculate() {
    // Get all the input elements
    var inputs = document.querySelectorAll('input[type="text"]');
    var subtotal = 0;
    
    // Loop through each input
    inputs.forEach(function(input) {
        var id = input.id.replace('num', '');
        var quantity = parseInt(input.value);
        if (id === "firstName" || id === "lastName" || id === "username" || id === "cc-name" || id === "cc-ber" || id === "cc-expiration" || id === "cc-cvv"){
            return;
        }
        var price = parseInt(document.getElementById('totalProduct' + id).textContent);
        
        // Calculate subtotal
        subtotal += quantity * price;
    });

    // Calculate total
    var total = subtotal - (subtotal * discount); // Apply the discount to the subtotal
    
    // Update the HTML with the calculated values
    document.getElementById('subtotal').textContent = subtotal;
    document.getElementById('discount').textContent = discount * 100 + '%'; // Display discount as percentage
    document.getElementById('total').textContent = total;
}

function showBill() {
    var cardItems = document.getElementById("cardItems");
    var billingDonationForm = document.getElementById("billing");
    cardItems.style.display = "none";
    billingDonationForm.style.display = "block";
}