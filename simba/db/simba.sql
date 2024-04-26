-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2016 at 06:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simba`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

--CREATE TABLE users (
  --  id INT AUTO_INCREMENT PRIMARY KEY,
  --  full_name VARCHAR(255) NOT NULL,
  --  email VARCHAR(255) UNIQUE NOT NULL,
    --password_hash VARCHAR(255) NOT NULL,
   -- created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP



--
-- Dumping data for table `users`
--
--INSERT INTO users (full_name, email, password_hash) VALUES ('John Doe', 'john@example.com', 'hashed_password');

--ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
  

CREATE TABLE ticket (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    pickup_point VARCHAR(255) NOT NULL,
    payment_method VARCHAR(255) NOT NULL,
    seat_class VARCHAR(255) NOT NULL,
    parcel_registry VARCHAR(255) NOT NULL,
    preferred_time TIME NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO tickets (full_name, email, pickup_point, payment_method, seat_class, parcel_registry, preferred_time, phone_number, address) 
VALUES ('Alice Smith', 'alice@example.com', 'Magufuli Terminal', 'M-pesa', 'VIP', 'Hand bag', '12:00:00', '1234567890', '123 Main St, Dar es Salaam');


CREATE TABLE ticket_hire (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    driving_license_number VARCHAR(50) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    car_type VARCHAR(255) NOT NULL,
    payment_method VARCHAR(255) NOT NULL,
    model VARCHAR(255),
    id_type VARCHAR(255) NOT NULL,
    id_details TEXT NOT NULL,
    request_date DATE NOT NULL,
    return_date DATE NOT NULL,
    request_return_time TIME NOT NULL,
    residential_address TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO ticket_hire (full_name, driving_license_number, phone_number, email, car_type, payment_method, model, id_type, id_details, request_date, return_date, request_return_time, residential_address) 
VALUES ('Bob Johnson', 'DL123456', '9876543210', 'bob@example.com', 'Bus for hire', 'Airtel Money', 'Toyota', 'National ID', 'ABC123', '2024-04-25', '2024-04-27', '09:00:00', '456 Oak St, Dodoma');


CREATE TABLE ticket_goods (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    good_type VARCHAR(255) NOT NULL,
    payment_method VARCHAR(255) NOT NULL,
    weight_scale VARCHAR(255) NOT NULL,
    good_registry VARCHAR(255) NOT NULL,
    preferred_time TIME NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    pickup_address TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO ticket_goods (full_name, email, good_type, payment_method, weight_scale, good_registry, preferred_time, phone_number, pickup_address) 
VALUES ('Eve Brown', 'eve@example.com', 'Food & Beverage', 'Simbanking', 'Less than 10 tons', 'Tax Payable', '15:30:00', '5551234567', '789 Elm St, Dodoma');



ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
