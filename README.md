OOP Approach: i used Object-Oriented Programming with an abstract PaymentMethod class.
Polymorphism: CardPayment and CashPayment extend the base class to handle payments differently.
Order Logic: The Order class aggregates Product objects and calculates totals dynamically.
Processing: process_order.php acts as the controller, taking JSON input, mapping IDs to names, and executing the correct payment strategy.
