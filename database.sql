-- ============================================
-- Database: akademik
-- Jalankan file ini di phpMyAdmin (tab SQL) atau via terminal mysql
-- ============================================

CREATE DATABASE IF NOT EXISTS akademik;
USE akademik;

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Contoh data (opsional)
INSERT INTO mahasiswa (nama, nim, alamat) VALUES
('Arraya Andika', '101306', 'Perum Pamulang Lestari Blok L no.2'),
('Lionel Messi', '101930', 'Argentina'),
('Cristiano Ronaldo', '0071728', 'Portugal'),
('James Bond', '007', 'London, UK');
