SQL Queries

-- Create the Consumer table:
CREATE TABLE Consumer (
    consumer_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Create the Items table:
CREATE TABLE Items (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(255),
    stock INT
);

-- Insert sample data into the Items table:
INSERT INTO Items (name, description, price, image_url, stock) VALUES
('Fresh Apples', 'Locally grown, crisp and delicious.', 2.50, 'https://source.unsplash.com/featured/?apple', 100),
('Organic Bananas', 'Imported, fair trade bananas.', 1.00, 'https://source.unsplash.com/featured/?banana', 150),
('Whole Wheat Bread', 'Baked fresh daily.', 3.00, 'https://source.unsplash.com/featured/?bread', 50),
('Milk 1L', 'Full cream, pasteurized milk.', 2.00, 'https://source.unsplash.com/featured/?milk', 80),
('Eggs (Dozen)', 'Free-range, brown eggs.', 4.00, 'https://source.unsplash.com/featured/?eggs', 60),
('Cheddar Cheese', 'Aged cheddar, 200g block.', 5.00, 'https://source.unsplash.com/featured/?cheese', 40),
('Chicken Breast', 'Boneless, skinless, 500g pack.', 6.00, 'https://source.unsplash.com/featured/?chicken', 30),
('Salmon Fillet', 'Fresh, wild-caught salmon.', 8.00, 'https://source.unsplash.com/featured/?salmon', 20),
('Broccoli', 'Fresh, organic broccoli.', 2.50, 'https://source.unsplash.com/featured/?broccoli', 70),
('Carrots 1kg', 'Fresh, locally sourced carrots.', 1.50, 'https://source.unsplash.com/featured/?carrots', 90);


--  Get all items from the Items table:
SELECT * FROM Items;

-- Get a specific item by its ID:
SELECT * FROM Items WHERE item_id = 1;

-- Get items within a price range:
SELECT * FROM Items WHERE price BETWEEN 2.00 AND 5.00;

-- Get items that contain a specific word in their name or description:
SELECT * FROM Items WHERE name LIKE '%Fresh%' OR description LIKE '%Fresh%';

-- Get users from the Consumer table
SELECT * FROM Consumer;

-- Insert a new consumer into the Consumer table:
INSERT INTO Consumer (name, username, email, password) VALUES ('John Doe', 'johndoe', 'john.doe@example.com', 'hashed_password_here');

-- Verify user login:
SELECT consumer_id, name FROM Consumer WHERE username = 'johndoe' AND password = 'hashed_password_here';
