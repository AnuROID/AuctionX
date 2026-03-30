<p align="center">
  <h1 align="center">🔥 AuctionX - Online Auction Platform</h1>
  <p align="center">
    A full-stack auction web application built with Laravel where users can sell products and place bids.
  </p>
</p>

<p align="center">
<a href="#"><img src="https://img.shields.io/badge/Laravel-Framework-red" alt="Laravel"></a>
<a href="#"><img src="https://img.shields.io/badge/PHP-Backend-blue" alt="PHP"></a>
<a href="#"><img src="https://img.shields.io/badge/TailwindCSS-UI-38bdf8" alt="Tailwind"></a>
<a href="#"><img src="https://img.shields.io/badge/MySQL-Database-orange" alt="MySQL"></a>
<a href="#"><img src="https://img.shields.io/badge/Status-Active-success" alt="Status"></a>
</p>

---

# 🧾 Project Overview

**AuctionX** is a web-based auction platform where users can:

- Create accounts  
- List products for auction  
- Place bids on other users’ items  

The system ensures that every new bid is **higher than the current highest bid**, maintaining a fair auction process.

This project demonstrates full-stack development using **Laravel, Blade, Tailwind CSS, and MySQL**.

---

# 🚀 Features

## 🔐 Authentication System
- User Registration
- User Login
- Secure Password Hashing
- Logout functionality
- Session-based authentication
- Protected routes using middleware

---

## 📦 Product Management
- List products for auction
- Upload product images
- Set base price
- View products on dashboard

---

## 💰 Bidding System
- Place bids on products
- Validation: bid must be higher than current bid
- Automatic highest bid tracking
- Bid history stored in database

---

## 🎨 User Interface
- Landing page with hero section
- Responsive dashboard
- Product cards with hover effects
- Toast notifications
- Clean UI using Tailwind CSS

---

# 🧱 Database Structure

## Users
| Field | Description |
|------|------------|
| id | Primary key |
| name | User name |
| email | User email |
| password | Hashed password |
| timestamps | Created & updated time |

---

## Products
| Field | Description |
|------|------------|
| id | Primary key |
| title | Product name |
| image | Product image |
| base_price | Starting price |
| user_id | Owner |
| timestamps | Created & updated time |

---

## Bids
| Field | Description |
|------|------------|
| id | Primary key |
| product_id | Related product |
| user_id | Bidder |
| bid_amount | Bid value |
| timestamps | Created & updated time |

---

# ⚙️ Tech Stack

## Backend
- Laravel
- PHP
- Eloquent ORM
- Middleware

## Frontend
- Blade Templates
- Tailwind CSS
- HTML
- JavaScript

## Database
- MySQL

## Storage
- Laravel Storage (Images)

---

# 🔑 Core Concepts

## Authentication Middleware

```php
Route::middleware('auth')->group(function () {
