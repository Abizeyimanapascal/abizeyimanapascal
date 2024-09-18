// Function to handle currency conversion
        function convert() {
            // Get input values
            var amount = parseFloat(document.getElementById("amount").value);
            var currency = document.getElementById("currency").value;
            var rate = parseFloat(document.getElementById("rate").value);
    
            // Perform conversion
            var convertedAmount;
            if (currency === "USD") {
                convertedAmount = amount * rate;
            } else if (currency === "EURO") {
                convertedAmount = amount * rate;
            } else {
                // Invalid or empty currency selected
                alert("Please select a valid currency");
                return;
            }
    
            // Display result
            document.getElementById("result").innerHTML = "Converted Amount: " + convertedAmount.toFixed(2) + " " + currency;
        }