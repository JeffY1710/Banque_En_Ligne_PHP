---BDD name : Banque


---Table users
CREATE TABLE users (
    `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `prenom` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL UNIQUE,
    `password` varchar(255) NOT NULL,
    `role` int(11) NOT NULL DEFAULT '1',
    `verified` int(11) NOT NULL DEFAULT '1',
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);

---Table Bankaccount

CREATE TABLE Bankaccount(
    `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `account_id` int(11) NOT NULL,
    `sold` int(11) NOT NULL
);

---Table deposit

CREATE TABLE deposit(
    `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `deposit_id` int(11) NOT NULL,
    `montant` int(11) NOT NULL,
    `currency` varchar(3) NOT NULL
);


---Table withdraw

CREATE TABLE withdraw(
    `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `withdraw_id` int(11) NOT NULL,
    `montant` int(11) NOT NULL,
    `currency` varchar(3) NOT NULL
);


---Table transactions

CREATE TABLE transactions(
    `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `transac_id` int(11) NOT NULL,
    `operation` varchar(50) NOT NULL,
    `montant` int(11) NOT NULL
);

---Table currencies

CREATE TABLE currencies(
    `symbol` varchar(3) NOT NULL,
    `value` varchar(3) NOT NULL DEFAULT 'EUR'
);