CREATE DATABASE driver_management;
USE driver_management;
CREATE TABLE drivers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    vehicle_number VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE routes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    driver_id INT NOT NULL,
    start_lat FLOAT NOT NULL,
    start_lng FLOAT NOT NULL,
    end_lat FLOAT NOT NULL,
    end_lng FLOAT NOT NULL,
    midpoints TEXT NOT NULL,  -- Stores midpoints as JSON
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (driver_id) REFERENCES drivers(id) ON DELETE CASCADE
);

ALTER TABLE drivers ADD COLUMN username VARCHAR(50) UNIQUE NOT NULL;
ALTER TABLE drivers ADD COLUMN password VARCHAR(255) NOT NULL;
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);
INSERT INTO admin (username, password) VALUES ('admin', SHA2('admin123', 256));
INSERT INTO drivers (name, phone, vehicle_number, username, password) VALUES
('John Doe', '9876543210', 'DL01AB1234', 'johndoe', SHA2('password123', 256)),
('Jane Smith', '9876543222', 'DL02XY5678', 'janesmith', SHA2('mypassword', 256)),
('Michael Johnson', '9876543333', 'DL03LM9876', 'michael', SHA2('securepass', 256)),
('dhruv gupta', '9876543333', 'DL03LM9876', 'dhruv', SHA2('123', 256));
INSERT INTO routes (driver_id, start_lat, start_lng, end_lat, end_lng, midpoints) VALUES
(1, 28.7041, 77.1025, 19.0760, 72.8777, '["26.9124,75.7873", "21.1702,72.8311"]'),  -- Delhi to Mumbai via Jaipur and Surat
(2, 12.9716, 77.5946, 13.0827, 80.2707, '["12.7400,77.8250", "12.9165,79.1325"]'),  -- Bengaluru to Chennai via Hosur and Vellore
(3, 22.5726, 88.3639, 25.5941, 85.1376, '["23.7926,86.4304", "24.7720,84.9914"]'),  -- Kolkata to Patna via Dhanbad and Gaya
(4, 19.0760, 72.8777, 18.5204, 73.8567, '["19.2183,72.9781", "18.7500,73.4167"]');  -- Mumbai to Pune via Thane and Lonavala
