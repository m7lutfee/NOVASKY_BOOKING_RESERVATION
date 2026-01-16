# NovaSky Hotel Reservation System

## Course Information
INFO 3305 – Web Application Development

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
The system allows users to register, log in, browse hotel rooms, make reservations, and contact the hotel through an online interface.  

An admin dashboard is included to help administrators monitor bookings and view customer messages efficiently.  
This project demonstrates the implementation of a full-stack MVC web application for the INFO 3305 course.

---

## System Features

### User Features
- User registration and login using secure authentication (Laravel Jetstream + Fortify)
- Browse available rooms via Our Rooms page
- Room booking with validation:
  - All booking form fields are required
  - If the selected date is already booked, an alert popup will prompt the user to choose a different date
- Contact Us form for users to send messages/inquiries to the hotel

### Admin Features
- Admin dashboard overview
- View total number of bookings, rooms, and users
- View latest reservations
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
- Vite
- Git & GitHub

---

## Authentication & Authorization
The system uses Laravel Jetstream with Fortify for user authentication.  
Users must be logged in before making reservations.  
Admin authorization is implemented using an `is_admin` attribute in the `users` table to restrict access to admin-only pages.

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
- `contacts` (customer messages)

---

## How to Run the Project Locally

1. Clone the repository:
   ```bash
   git clone https://github.com/m7lutfee/NOVASKY_BOOKING_RESERVATION.git
   cd NOVASKY_BOOKING_RESERVATION
