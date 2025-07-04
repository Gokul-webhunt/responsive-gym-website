
# GFitness Website 🏋️‍♂️

## 📄 Project Description
The **GFitness Website** is a responsive, modern, and clean website designed for fitness clubs, gyms, and training centers. This project includes a fully functional feedback form with backend integration using PHP and MySQL. Visitors can learn about the gym's courses, coaches, offers, and even submit their feedback directly through the website.

## 🎯 Key Benefits
- ✅ Fully responsive and mobile-friendly design.
- ✅ Clean UI with easy navigation.
- ✅ Feedback form connected to MySQL database.
- ✅ Showcases courses, offers, coaches, and gallery.
- ✅ Simple to set up on local or web servers.

## 🚀 Features Used
### 🔹 Frontend
- HTML5 for structure
- CSS3 for styling
- Bootstrap 5 for responsive design
- Font Awesome for icons

### 🔹 Backend
- PHP for server-side scripting
- MySQL for database management

### 🔹 UI Sections
- Homepage with navigation bar
- About section with gym introduction
- Courses and services display
- Offers and promotions section
- Coaches profile
- Photo gallery
- Contact/Feedback form
- Footer with contact details and social links

## ⚙️ How to Run This Project
1. Install **XAMPP** or **WAMP** on your system.
2. Place the project folder into the `htdocs` (for XAMPP) or `www` (for WAMP) directory.
3. Open **phpMyAdmin** and create a database named `project2`.
4. Execute the following SQL to create the feedback table:
```sql
CREATE TABLE feedback (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  message TEXT,
  newsletter VARCHAR(10)
);
```
5. Start Apache and MySQL in XAMPP/WAMP.
6. Visit `http://localhost/GFitness-Website/index.html` in your browser to run the website.

## 💻 Technologies Used
- HTML, CSS, Bootstrap
- PHP, MySQL

## 👨‍💻 Author
**Gokul**

## 📜 License
This project is open for educational and personal use.
