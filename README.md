Backend Architecture

1.OOP Approach: i used Object-Oriented Programming with an abstract PaymentMethod class.
2.Polymorphism: CardPayment and CashPayment extend the base class to handle payments differently.
3.Order Logic: The Order class aggregates Product objects and calculates totals dynamically.
4.Processing: process_order.php acts as the controller, taking JSON input, mapping IDs to names, and executing the correct payment strategy.

Frontend Architecture
Simple User Interface :
1.Technologies: HTML5, CSS3, JavaScript (ES6+).
2.Communication: Uses AJAX (Fetch API) to send asynchronous requests to the PHP backend.
3.Data Format: Sends data as a raw JSON payload ensuring compatibility with the `php://input` stream used by the backend.
