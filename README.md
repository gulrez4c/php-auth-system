# 🔐 PHP Premium Authentication System

![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue)
![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-orange)
![License](https://img.shields.io/badge/License-MIT-green)
![UI](https://img.shields.io/badge/UI-Glassmorphism-purple)

A complete, secure, and modern authentication system built with **PHP** and **MySQL**.  
Features **login**, **registration**, **forgot password**, **email‑based password reset**, and a **premium dashboard** with a beautiful glassmorphic UI.

Perfect for admin panels, membership sites, or as a foundation for larger web applications.

---

## ✨ Features

- ✅ **User Registration** – with validation and duplicate email check  
- ✅ **Secure Login** – password hashing (bcrypt) + session management  
- ✅ **Forgot Password** – generates a secure token, sends reset link via email  
- ✅ **Password Reset** – token expires in 1 hour, one‑time use  
- ✅ **Protected Dashboard** – accessible only after login (`index.php`)  
- ✅ **Logout** – destroys session  
- ✅ **Premium Glassmorphism UI** – gradients, shadows, smooth animations  
- ✅ **SQL Injection Protection** – all queries use prepared statements  
- ✅ **XSS Protection** – output escaped with `htmlspecialchars`

---

## 🛠️ Tech Stack

| Layer       | Technology                          |
|-------------|-------------------------------------|
| Backend     | PHP (Core, no frameworks)           |
| Database    | MySQL                               |
| Frontend    | HTML5, CSS3 (custom glassmorphic)   |
| Fonts       | Google Fonts (Poppins)              |
| Auth        | Sessions, `password_hash()` / `password_verify()` |

---

## 📁 Project Structure
