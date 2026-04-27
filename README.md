# Glow Beauty – Online Beauty Store

## Përshkrimi
Ky projekt është një web aplikacion i thjeshtë për shitjen e produkteve kozmetike, i zhvilluar në PHP.

Projekti demonstron konceptet bazë të PHP si:
- Sessions & Cookies
- GET & POST
- OOP (klasa, trashëgimi)
- Arrays dhe sortime
- RegEx validation
- Role-based access (Admin & User)

---

## Teknologjitë e përdorura
- PHP
- HTML / CSS
- JavaScript
- XAMPP

---

## Si të ekzekutohet

1. Clone repo:

   git clone https://github.com/gentagara6/Online_Beauty_Store.git

2. Vendose në:

   C:\xampp\htdocs\

3. Start Apache (XAMPP)

4. Hap në browser:

   http://localhost/Online_Beauty_Store/pages/index.php

---

## 👤 Login (të dhëna statike)

| Roli  | Email             | Password |
|------|------------------|----------|
| Admin | admin@test.com   | 1234     |
| User  | genta@test.com   | 1234     |
| User  | ernesa@test.com  | 1234     |
| User  | era@test.com     | 1234     |
| User  | enesa@test.com   | 1234     |
| User  | ermira@test.com  | 1234     |

---

## Funksionalitete

- Login / Logout (POST, SESSION, COOKIE)
- Role-based access (Admin / User)
- Produkte dinamike (arrays + OOP)
- Cart me session & cookie
- Contact form me RegEx validation
- Blog me OOP

---

## Struktura e Projektit
```
Online_Beauty_Store/
│
├── assets/
│   ├── css/
│   ├── img/
│   └── js/
│
├── classes/
│   ├── BlogPost.php
│   ├── BlogRepository.php
│   ├── product.php
│   └── makeupproduct.php
│
├── includes/
│   ├── header.php
│   └── footer.php
│
├── pages/
│   ├── index.php
│   ├── shop.php
│   ├── sproduct.php
│   ├── blog.php
│   ├── about.php
│   ├── contact.php
│   ├── cart.php
│   ├── login.php
│   ├── logout.php
│   ├── submit.php
│   └── admin.php
│
├── visits.txt
├── README.md
└── .gitattributes
```
---

## Demonstrimi

## Screenshots

### Home Page
![Home](assets/screenshots/homepage.png)
![Home](assets/screenshots/shades.png)

### Login
![Login](assets/screenshots/login-form.png)
![Login](assets/screenshots/login-email.png)
![Login](assets/screenshots/welcome.png)
![Login](assets/screenshots/logout.png)

### Admin Panel
![Admin](assets/screenshots/adminpanel.png)

### Shop
![Shop](assets/screenshots/sales.png)

### Blog
![Blog](assets/screenshots/blog-posts.png)

### Contact Form
![Contact](assets/screenshots/form-sent.png)
![Contact](assets/screenshots/invalid-email.png)

### About Page
![About](assets/screenshots/visitors.png)
![About](assets/screenshots/subcribed.png)
![About](assets/screenshots/invalid-newspaper.png)

### Cookies & Sessions
![Cart](assets/screenshots/cookies.png)
---
