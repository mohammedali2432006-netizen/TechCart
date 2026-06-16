DROP TABLE IF EXISTS orders;

CREATE TABLE orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_name VARCHAR(255),
  customer_email VARCHAR(255),
  customer_address TEXT,
  total DECIMAL(10,2),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO orders (customer_name, customer_email, customer_address, total, created_at)
VALUES
('customer','email@example.com','address',1299.00,'2026-06-12 16:43:51');

DROP TABLE IF EXISTS products;

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  description TEXT,
  price DECIMAL(10,2),
  image VARCHAR(255),
  category VARCHAR(100)
);

INSERT INTO products (name, description, price, image, category)
VALUES
('MacBook Pro','Powerful laptop',2499.00,'macbook.jpg','Laptops'),
('iPhone 16 Pro','Premium smartphone',1299.00,'iphone.jpg','Phones'),
('AirPods Max','Premium headphones',599.00,'airpods.jpg','Audio'),
('MacBook Pro M4 Max','Apple Professional Laptop',3499.00,'macbookm4.jpg','Laptops'),
('Dell XPS 15','Premium Windows Laptop',1899.00,'xps15.jpg','Laptops'),
('ASUS ROG Strix G18','Gaming Laptop',2499.00,'rogstrix.jpg','Laptops'),
('Lenovo ThinkPad X1 Carbon','Business Laptop',1799.00,'thinkpadx1.jpg','Laptops'),
('iPhone 17 Pro Max','Apple Premium Smartphone',1599.00,'iphone17.jpg','Phones'),
('Samsung Galaxy S25 Ultra','Flagship Android Phone',1399.00,'s25ultra.jpg','Phones'),
('Google Pixel 10 Pro','AI Smartphone',1199.00,'pixel10.jpg','Phones'),
('OnePlus 14 Pro','Performance Smartphone',999.00,'oneplus14.jpg','Phones'),
('AirPods Pro 3','Wireless Earbuds',299.00,'airpodspro3.jpg','Audio'),
('Sony WH-1000XM6','Noise Cancelling Headphones',499.00,'sonyxm6.jpg','Audio'),
('Bose QuietComfort Ultra','Premium Headphones',449.00,'boseqc.jpg','Audio'),
('Apple Watch Ultra 3','Premium Smart Watch',899.00,'watchultra.jpg','Wearables'),
('Samsung Galaxy Watch 8','Android Smart Watch',499.00,'galaxywatch8.jpg','Wearables'),
('iPad Pro M4','Professional Tablet',1299.00,'ipadpro.jpg','Tablets'),
('Samsung Galaxy Tab S11 Ultra','Premium Android Tablet',1199.00,'tabs11.jpg','Tablets');


DROP TABLE IF EXISTS users;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  password VARCHAR(255),
  role VARCHAR(20),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (name,email,password,role)
VALUES
('Mohammed','admin@techcart.com','123456','admin');