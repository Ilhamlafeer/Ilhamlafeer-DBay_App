-- Create the table
CREATE TABLE Products (
    title VARCHAR(50),
    price DECIMAL(10, 2),
    quantity INT
);

-- Insert values into the table
INSERT INTO Products (title, price, quantity) VALUES
('Photoshop', 999.99, 10),
('XAMPP', 1500.00, 50),
('Windows 11', 3000.00, 20),
('Figma', 499.00, 100),
('MS Office', 700.00, 30);

-- Query to display the table data
SELECT * FROM Products;
