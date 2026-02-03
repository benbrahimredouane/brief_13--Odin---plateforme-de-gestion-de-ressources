#  LaraBookmarks – Bookmark Management Application

##  Project Overview

LaraBookmarks is a web application developed with **Laravel** that allows users to save, organize, and manage their favorite links in one place.

The platform provides an easy way to classify bookmarks into categories, assign tags, and search through saved resources efficiently.

This project was built as an individual learning experience to practice Laravel fundamentals and database relationships.

---

##  Learning Objectives

Through this project, I explored and implemented the following concepts:

- **Authentication System** – User registration, login, and session handling  
- **MVC Architecture** – Understanding Laravel’s Model-View-Controller structure  
- **Eloquent ORM** – Working with Laravel’s database abstraction layer  
- **Database Relationships** – One-to-Many and Many-to-Many relations  
- **Middleware Security** – Blocking inactive accounts (`is_active = false`)  
- **Blade Templating** – Creating reusable layouts and dynamic views  
- **Form Validation** – Ensuring clean and secure user inputs  

---

##  Features

- User registration, login, and logout  
- Middleware protection for disabled accounts  
- Full CRUD management for categories  
- Add and organize bookmarks by category  
- Tag system with Many-to-Many relationship  
- Search and filtering by category or tag  
- OTP email verification during signup (bonus feature)  

---

##  Technologies Used

- **Laravel** – PHP Framework  
- **MySQL** – Relational Database  
- **Blade** – Templating Engine  
- **Eloquent ORM** – Database Management  
- **Laravel Middleware** – Access control and security  

---

##  Database Structure

The project contains at least five main tables:

- `users`  
- `categories`  
- `links`  
- `tags`  
- `link_tag` (pivot table for Many-to-Many relationship)

---

##  Installation

To run this project locally:

```bash
git clone https://github.com/your-username/LaraBookmarks.git
```
```bash
cd LaraBookmarks
```
```bash
composer install
```
```bash
cp .env.example .env
```
```bash
php artisan key:generate
```
```bash
php artisan migrate
```
```bash
php artisan serve
```