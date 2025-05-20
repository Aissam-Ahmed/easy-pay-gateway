# EasyPayGateway

A simple electronic payment system implementing the Factory Method design pattern in PHP.

---

## Project Description
EasyPayGateway is a lightweight PHP application that allows selecting multiple payment gateways (PayPal, Stripe, Bank Transfer) to process payments.  
This project demonstrates how to use the **Factory Method** pattern to decouple the creation of payment gateway objects from their usage, making the system easy to extend and maintain.
---

## How to Use

1. Upload the project files to a PHP-supported web server.  
2. Open your browser and access the URL with the payment method query parameter:

http://your-server/index.php?method=paypal
http://your-server/index.php?method=stripe
http://your-server/index.php?method=bank


3. The page will display a message confirming the payment processed via the selected gateway.

---

## Possible Extensions

- Add more payment gateways (e.g., Payoneer, Apple Pay, etc.)  
- Accept payment amount input via an HTML form  
- Log payment transactions to a database  
- Implement email confirmation for payments

---

## Requirements

- PHP 7.4 or higher  
- Web server supporting PHP (Apache, Nginx, etc.)

---

## License

This project is open source under the MIT License.

---

## Author

Aissam Ait Ahmed Ouhamou
