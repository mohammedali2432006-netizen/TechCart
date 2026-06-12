-- =========================
-- DATABASE
-- =========================
CREATE DATABASE IF NOT EXISTS techcart;
USE techcart;

-- =========================
-- PRODUCTS
-- =========================
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

-- =========================
-- USERS (Login System)
-- =========================
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =========================
-- ORDERS
-- =========================
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NULL,
    total DECIMAL(10,2) NOT NULL,
    address VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =========================
-- ORDER ITEMS
-- =========================
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    price DECIMAL(10,2),
    quantity INT
    CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    customer_email VARCHAR(255) NOT NULL,
    customer_address TEXT NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);