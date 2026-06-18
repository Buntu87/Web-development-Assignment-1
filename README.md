**Pastimes — Second‑Hand Clothing Web Application**

** Overview**
Pastimes is a PHP‑based web application designed to facilitate the buying and selling of second‑hand branded clothing in excellent condition. Developed as part of the IIE Rosebank Portfolio of Evidence (PoE), the project demonstrates proficiency in PHP scripting, MySQL database management, and user‑centric web design.

The platform promotes sustainable fashion by enabling users to trade pre‑owned clothing easily and securely.

---

**Features**

**User Functionality**

- Registration & Login: Users register with name, email, username, and password (minimum 8 characters).  
- Password Confirmation: Ensures secure authentication.  
- Delivery Details: Users can enter residential or work addresses for courier delivery.  
- Shopping Cart: Buyers can view, edit, and manage items before purchase.

🛒 Seller Functionality
- Seller Verification: Admin confirms seller registration before listing items.  
- Item Management: Admin uploads clothing details and removes sold items from the database.  
- Communication: Admin liaises between buyers and sellers regarding available items.

---

**Technical Stack**

| Component          | Technology              |
| ------------------ | ----------------------- |
| Frontend           | HTML5, CSS3, JavaScript |
| Backend            | PHP 8.x                 |
| Database           | MySQL                   |
| Server Environment | Apache (XAMPP / WAMP)   |
| Version Control    | GitHub                  |

---
**Find below link to youtube video
https://youtu.be/x-kM6MJywN4?si=ZD2I5x2piS8edus6

**Installation Instructions**

1. Clone or download the repository:
   `bash
   git clone https://github.com/Buntu87/Web-development-Assignment-1.git
2. Move the folder into your local server directory (htdocs for XAMPP).
3. Import pasttimes.sql into your MySQL database.
4. Update database credentials in includes/db_connect.php.
5. Start Apache and MySQL services.

---

**Database Schema**
Tables:

- users — stores user registration details.  
- items — stores clothing listings.  
- orders — tracks purchases and deliveries.  
- messages — facilitates buyer‑seller communication.
