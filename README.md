# Mpumi Lets Eat

A responsive portfolio and booking-enquiry website for Chef Mpumi, built for a friend's catering and private dining business. Visitors can browse her work, learn about her services, and send an event enquiry that is saved to a MySQL database.

> This is a showcase site, not an online ordering platform. It does not take payments or confirm bookings automatically.

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/9f41a8e5-53ba-48a0-8671-1a419607f40d" />


## Features

- **Home** – hero section, brand introduction and calls to action
- **About** – chef profile and brand philosophy
- **My Work** – auto-advancing image slideshow with next/previous buttons and clickable dots (vanilla JavaScript)
- **Services** – private dining, catering and special events
- **Contact / booking enquiry form** – collects name, email, phone, service, event date, guests, location and message
- **Server-side processing** – `process-booking.php` validates input (required fields, email format, guest count) and saves each enquiry using **MySQLi prepared statements**
- **Reusable layout** – shared header and footer through PHP includes
- **Responsive design** – custom CSS with a cream, dark brown and terracotta palette

## Tech Stack

| Layer | Technology |
|---|---|
| Frontend | HTML5, CSS3, JavaScript |
| Backend | PHP (MySQLi) |
| Database | MySQL |
| Local environment | XAMPP (Apache + MySQL), phpMyAdmin |
| Version control | Git, GitHub Desktop |

## Database

Database name: `mpumi_lets_eat`

| Table | Purpose |
|---|---|
| `services` | Available service types |
| `enquiries` | Client details and event requests submitted through the form |
| `admin` | Reserved for future administrator login |

The full schema is in [`database.sql`](database.sql).

## Run It Locally

1. Install [XAMPP](https://www.apachefriends.org/) and start **Apache** and **MySQL** from the control panel.
2. Copy or clone this project into `C:\xampp\htdocs\mpumiletseat`.
3. Open `http://localhost/phpmyadmin`, create a database named `mpumi_lets_eat`, then use **Import** to load `database.sql`.
4. In the `config` folder, copy `dbcon.example.php` and rename the copy to `dbcon.php`. Update the credentials if yours differ from the XAMPP defaults.
5. Visit `http://localhost/mpumiletseat/`.

> `config/dbcon.php` is listed in `.gitignore` so real database credentials are never committed.

## Project Structure

```
mpumiletseat/
├── index.php              Home page
├── about.php              About page
├── work.php               Work slideshow
├── services.php           Services
├── contact.php            Booking enquiry form
├── process-booking.php    Form validation and database insert
├── config/
│   └── dbcon.example.php  Database connection template
├── includes/              Shared header and footer
├── css/style.css          Styles
├── js/script.js           Slideshow logic
├── assets/                Images
└── database.sql           Database schema
```

## Roadmap

- [ ] Admin login and enquiry dashboard
- [ ] Email notification when an enquiry is received
- [ ] Friendlier success and error messages on the form
- [ ] Replace placeholder content with Mpumi's final copy and confirmed services

## What I Learned

- Designing a relational schema and connecting it to a PHP application
- Server-side validation and preventing SQL injection with prepared statements
- Structuring a multi-page PHP site with reusable components
- Managing a project with Git and keeping credentials out of version control

## Author

**Ikageng** – Final-year BCom (Information Systems and Management), Rhodes University
GitHub: [IkagengThatohatsi](https://github.com/IkagengThatohatsi)
