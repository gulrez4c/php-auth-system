# 🔐 PHP Premium Authentication System

![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue)
![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-orange)
![License](https://img.shields.io/badge/License-MIT-green)
![UI](https://img.shields.io/badge/UI-Glassmorphism-purple)
![Status](https://img.shields.io/badge/Status-Production--Ready-success)

A **secure, scalable, and production-ready authentication system** built using PHP and MySQL.

This project provides a complete login & registration system with modern security practices and a clean glassmorphism UI — suitable for real-world applications like admin panels, SaaS products, and web platforms.

---

## 🚀 Key Highlights

- Secure user authentication system
- Clean and scalable PHP architecture
- Modern glassmorphism UI design
- Production-level folder structure
- Easy to integrate into any web application

---

## ✨ Features

- 👤 User Registration with validation
- 🔐 Secure Login system
- 🔑 Password hashing using `password_hash()`
- 📩 Forgot password with email token system
- ♻️ Password reset with expiry (1 hour)
- 🧠 Session-based authentication
- 🚪 Secure logout system
- 🛡️ SQL Injection protection (Prepared Statements)
- ⚡ XSS protection using output sanitization
- 🎨 Modern Glassmorphism UI design

---

## 🛠️ Tech Stack

| Layer     | Technology |
|-----------|------------|
| Backend   | PHP (Core PHP) |
| Database  | MySQL |
| Frontend  | HTML5, CSS3 |
| UI Design | Glassmorphism |
| Auth      | Sessions + Secure hashing |

---

## 📁 Project Structure

```text
php-auth-system/
│
├── index.php                 # Main protected dashboard
├── login.php                 # User login
├── register.php              # User registration
├── logout.php                # Logout & session destroy
├── dashboard.php             # Protected user dashboard
├── forgot.php                # Password reset request
├── reset_password.php        # Reset password with token
│
├── config/
│   └── db.php                # Database connection file
│
├── assets/
│   ├── css/
│   │   └── style.css         # UI styling (Glassmorphism)
│   └── js/
│       └── main.js           # Frontend interactions (optional)
│
└── database/
    └── database.sql         # SQL schema file