# NovaSky Hotel Reservation System

## Course Information
INFO 3305 – Web Application Development

---

## Group Information
**Group 4**

### Group Members
- Muhammad Ammar Raziq Bin Abdul Razak (2311619)
- Muhammad Aidid Danial bin Kamaruddin (2315241)
- Muhammadlutfi Luebaesa (2210835)

**Instructor:**  
Dr. Nor Azura Binti Kamarulzaman

---

## Project Description
NovaSky Hotel Reservation System is a web-based hotel booking application developed using the Laravel framework.  
The system is designed to allow users to register, log in, browse hotel rooms, make reservations, and contact the hotel through an online interface.

The system also provides an admin dashboard that enables administrators to monitor bookings, manage rooms, manage gallery images, and view customer messages efficiently.

This project was developed as part of the INFO 3305 course to demonstrate full-stack web application development using the MVC architecture.

---

## System Features

### User Features
- User registration and login using secure authentication
- Browse available rooms through the **Our Rooms** page
- View room details
- Room booking with validation:
  - All booking form fields are required
  - If the selected date is already booked, an alert popup will prompt the user to choose a different date
- Contact Us form for users to send messages or inquiries

### Admin Features
- Admin dashboard overview
- View total number of bookings, rooms, and registered users
- View and manage room reservations
- Approve or reject bookings
- Add, update, and delete rooms
- Manage gallery images
- View messages submitted through the Contact Us form
- Role-based access control using `is_admin`

---

## Technologies Used
- Laravel Framework
- PHP
- MySQL
- Blade Template Engine
- Laravel Jetstream (Authentication)
- Laravel Fortify
- Tailwind CSS
- Bootstrap
- Vite
- Git & GitHub
- XAMPP

---

## Authentication & Authorization
This system uses Laravel Jetstream with Fortify to handle user authentication, including registration and login functionality.

Authorization is implemented using an `is_admin` attribute in the `users` table, ensuring that only administrators can access the admin dashboard and perform management operations.

---

## Project Structure
- Routes: `routes/web.php`
- Controllers: `app/Http/Controllers`
- Models: `app/Models`
- Views: `resources/views`
- Middleware: `app/Http/Middleware`
- Database Migrations: `database/migrations`
- Public Assets: `public/`

---

## Database Tables
- `users` (includes `is_admin`)
- `rooms`
- `bookings`
- `contacts` (or messages table)
- `galleries`

---

## How to Run the Project Locally

### 1. Clone the repository
```bash
git clone https://github.com/m7lutfee/novasky-hotel-reservation-system.git
