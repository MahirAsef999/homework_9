CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    category VARCHAR(50),
    price DECIMAL(10,2)
);

INSERT INTO products (name, category, price) VALUES
('Apple AirPods Pro 2', 'Wearable', 249.99),
('Mechanical Keyboard', 'Accessories', 99.99),
('Gaming Chair', 'Furniture', 299.99),
('Acer Laptop', 'Laptop', 799.99),
('MacBook Air M2', 'Laptop', 999.99),
('iPhone 16', 'Phone', 849.99),
('iPhone 13', 'Phone', 599.99),
('Samsung Galaxy S24', 'Phone', 749.99),                                  
('Dell XPS 13', 'Laptop', 1099.99),
('Tecknet Wireless Mouse', 'Accessories', 14.99),
('Apple Watch Series 9', 'Wearable', 429.99),
('Oura Ring 5', 'Wearable', 349.99),
('Wireless Bluetooth Ear Buds', 'Wearable', 34.99),
('Canon EOS M50 Camera', 'Camera', 649.99),
('Google Pixel 8', 'Phone', 699.99),
('Wooden Black Desk', 'Furniture', 129.99),
('Lenovo Gaming Laptop', 'Laptop', 1449.99),
('Xbox Series X', 'Console', 499.99),
('PlayStation 5', 'Console', 449.99),
('Xiaomi 13 Pro', 'Phone', 999.99);
