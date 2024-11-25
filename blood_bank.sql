-- SQL script to create tables for the Blood Bank Project

-- Create the database
CREATE DATABASE IF NOT EXISTS blood_bank;
USE blood_bank;

-- Create the Donor table
CREATE TABLE IF NOT EXISTS Donor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    blood_group VARCHAR(10) NOT NULL,
    contact VARCHAR(15) NOT NULL
);

-- Create the Request table
CREATE TABLE IF NOT EXISTS Request (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(100) NOT NULL,
    blood_group VARCHAR(10) NOT NULL,
    contact VARCHAR(15) NOT NULL
);
