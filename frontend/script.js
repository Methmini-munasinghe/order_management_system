function placeOrder() {
    let selectedProducts = [];
    let checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

    for (let i=0; i < checkboxes.length; i++){
        selectedProducts.push({
            id: checkboxes[i].value,
            price: checkboxes[i].dataset.price
        });
    }
//get the selected value from the dropdown list
    let paymentMethod = document.getElementById('paymentMethod').value;

    if (selectedProducts.length === 0) {
        alert("Please select at least one product");
        return;
    }
//using fetch api to send data to the backend in json format
    fetch('../backend/process_order.php', {
        method: 'POST',
        //tell php that this data is sending in json format
        headers: { 'Content-Type': 'application/json' },
        //convert js object into json
        body: JSON.stringify({
            products: selectedProducts,
            payment: paymentMethod
        })
    })
        .then(response => response.text())
        .then(data => {
            document.getElementById('result').innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('result').innerHTML = "Something went wrong!";
        });
}
