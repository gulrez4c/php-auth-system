# 🔐 PHP Premium Authentication System

![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue)
![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-orange)
![License](https://img.shields.io/badge/License-MIT-green)
![UI](https://img.shields.io/badge/UI-Glassmorphism-purple)

A complete, secure, and modern authentication system built with **PHP** and **MySQL**.  
Features **login**, **registration**, **forgot password**, **email-based password reset**, and a **premium dashboard** with a beautiful glassmorphic UI.

Perfect for admin panels, membership sites, or as a foundation for larger web applications.

---

## ✨ Features

- ✅ User Registration – with validation and duplicate email check  
- ✅ Secure Login – password hashing (bcrypt) + session management  
- ✅ Forgot Password – generates secure token and email reset link  
- ✅ Password Reset – token expires in 1 hour (one-time use)  
- ✅ Protected Dashboard – accessible only after login  
- ✅ Logout – session destroy  
- ✅ Premium Glassmorphism UI  
- ✅ SQL Injection Protection – prepared statements  
- ✅ XSS Protection – sanitized output

---

## 🛠️ Tech Stack

| Layer    | Technology |
|----------|------------|
| Backend  | PHP (Core PHP) |
| Database | MySQL |
| Frontend | HTML5, CSS3 |
| UI Style | Glassmorphism |
| Auth     | Sessions + password_hash |

---

## 📁 Project Structure

```text
php-auth-system/
│
├── index.php                 # Protected dashboard (main)
├── login.php
├── register.php
├── logout.php
├── dashboard.php             # Alternative protected page
├── forgot.php                # Password reset request
├── reset_password.php        # Reset password using token
│
├── config/
│   └── db.php                # Database connection + session start
│
├── assets/
│   ├── css/
│   │   └── style.css         # Glassmorphism UI styles
│   └── js/
│       └── main.js           # Optional JS effects
│
└── database/
    └── database.sql         # Database structure file