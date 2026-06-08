CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10,2),
    image VARCHAR(255),
    category VARCHAR(100)
);

INSERT INTO products (name, description, price, image, category)
VALUES
('Laptop', 'Gaming Laptop', 1200.00, 'laptop.jpg', 'Electronics'),
('Phone', 'Smart Phone', 600.00, 'phone.jpg', 'Electronics'),
('Headphones', 'Wireless Headphones', 80.00, 'headphones.jpg', 'Accessories');