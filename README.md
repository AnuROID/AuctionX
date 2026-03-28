<p align="center">
  <h1 align="center">🔥 Auction System (Laravel)</h1>
  <p align="center">A full-stack auction web app where users can sell products and place bids.</p>
</p>

---

## About Auction System

This project is a full-stack web application built using Laravel that allows users to participate in an online auction system.

Users can register, list products for sale, and place bids on other users' products. The system ensures that only valid bids (higher than the current bid) are accepted.

---

## Features

- 🔐 User Authentication (Login & Signup)
- 📦 Product Listing (Sell items)
- 💰 Bidding System (Highest bid logic)
- 🖼️ Image Upload using Laravel Storage
- 📊 Dashboard showing all products
- ⚡ Toast Notifications
- 🔒 Route Protection using Auth Middleware
- 🎨 Responsive UI using Tailwind CSS

---

## Tech Stack

- Backend: Laravel (PHP)
- Frontend: Blade + Tailwind CSS
- Database: MySQL
- Storage: Laravel File Storage

---

## How It Works

- Users register and log in  
- Users can add products for auction  
- Other users can place bids  
- System validates: new bid must be higher than current bid  
- Highest bid is displayed dynamically  

---

## Installation

git clone https://github.com/AnuROID/AuctionX.git  
cd AuctionX  

### Install Dependencies
composer install  
npm install && npm run dev  

### Setup Environment
cp .env.example .env  
php artisan key:generate  

### Configure Database (.env)

DB_DATABASE=auction  
DB_USERNAME=root  
DB_PASSWORD=  

### Run Migrations
php artisan migrate  

### Storage Link
php artisan storage:link  

### Run Project
php artisan serve  

Open: http://127.0.0.1:8000  

---

## Security

- CSRF Protection  
- Auth Middleware for protected routes  
- Environment variables secured via `.env`  

---

## Future Improvements

- Real-time bidding (WebSockets / Pusher)  
- Auction timer system  
- Payment integration  
- Notification system  

---

## Author

Anurag Sharma  

---

## License

This project is open-source and available under the MIT License.
