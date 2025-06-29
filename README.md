# 🧘‍♂️ Zen Task — The Calm Way to Manage Chaos 🧩

Welcome to **Zen Task**, a **task management web app** built with simplicity, clarity, and productivity in mind.  
Whether you're an **Admin** assigning tasks or an **Employee** managing them, Zen Task helps keep everything organized — without the unnecessary fluff.

This is a clean, lightweight project developed using **PHP**, **HTML**, and **CSS**, perfect for internal team use or learning backend systems 🚀

---

## 🌐 What is Zen Task?

Zen Task is a **role-based task management application** where:

- 👨‍💼 **Admins** can manage users and assign tasks.
- 👷‍♀️ **Employees** can view and manage their assigned tasks.

It's responsive, easy to use, and highly customizable for small teams or individual use.

---

## 📸 Sneak Peek


**Login Page**  
![Login](https://github.com/user-attachments/assets/db00ddf2-d016-4b75-8b5e-26396345d417)

**Signup Page**  
![Signup](https://github.com/user-attachments/assets/be4ba392-af58-4586-8329-26ff688bcc97)

**Admin Dashboard**  
![Admin Dashboard](https://github.com/user-attachments/assets/e08aeea7-4718-453c-b87f-b01f17e357d5)

**Employee Dashboard**  
![Employee Dashboard](https://github.com/user-attachments/assets/04f68169-74ce-4149-a5dd-e55af7f057de)

**Users Page**  
![Users](https://github.com/user-attachments/assets/be83e061-7c5e-404f-92c9-8783a770466d)

**Create Task Page**  
![Create Task](https://github.com/user-attachments/assets/a7005bb7-c9fb-45d9-9a78-03e30f90c5f0)

**All Tasks Page**  
![All Tasks](https://github.com/user-attachments/assets/a579baac-342c-4c4a-b057-953d96acf929)

---

## 🎬 Demo Video

https://github.com/user-attachments/assets/2d0f2692-b354-4b8a-bf6f-742bf5d50ab8

---

## 🛠️ Tech Stack

- 🐘 **PHP** — Backend logic, authentication, and database operations.
- 🎨 **HTML + CSS** — Clean and responsive UI.
- 🗃️ **MySQL** — Stores user and task info.
- ⚡ **Vanilla JavaScript** — For minor dynamic UI features.
- 🧪 **XAMPP** — For local development.
- 🌐 **Replit** — For live deployment and testing.

---

## ✨ Features

- 🔐 **Secure Login System**  
  Session-based login for both Admin and Employee roles.

- 🧑‍💼 **Admin Dashboard**  
  Manage users, assign tasks, and track overall progress.

- 👷‍♂️ **Employee Dashboard**  
  View personal tasks, update status, see deadlines.

- 📊 **Task Overview Cards**  
  Visual representation of task status — pending, completed, overdue, in progress, due today.

- 🕒 **Deadline Highlights**  
  Color-coded overdue/today's tasks for better visibility.

- 💻 **Modern & Responsive UI**  
  Custom transitions, hover effects, and mobile-friendly design.

- 🔄 **Real-Time Task Status**  
  Employees can update task progress from the dashboard.

---

## 🧪 Try the App

### 🟢 **Replit Link (Live)**  
Hosted on Replit Free version:  
🔗 `https://dcfa65bb-c923-4fa4-9307-5f4df978e9d3-00-326rb7p7r6ok9.riker.replit.dev/`

🕓 **Note:** Replit free hosting sleeps after inactivity.  
If you want to test the app live and it's currently inactive:

📧 **Email me** at `chatterjeeanata091@gmail.com`  
→ I’ll activate it immediately for you.

---

### 🖥️ Try Locally

You can run it on your system using **XAMPP** or **any LAMP stack**:

#### ⚙️ Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/zenta-task.git
    ```
2. Import the SQL dump (task_management_db.sql) into your MySQL database using phpMyAdmin.
3. Set database connection in DB_connection.php:
   ```bash
    $sName = "localhost";
    $uName = "root";
    $pass  = "";
    $db_name = "task_management_db";
   ```
4. Start Apache & MySQL using XAMPP.
5. Open http://localhost/zen-task/login.php in your browser.
---


## 📁 Project Structure

```bash
zen-task/
├── app/
│   └── Model/       # PHP models for DB queries
├── css/
│   └── style.css    # Full custom styling
├── inc/
│   ├── header.php   # Header layout
│   └── nav.php      # Sidebar navigation
├── login.php
├── logout.php
├── dashboard.php    # Main dashboard for users
├── DB_connection.php
├── README.md
└── ...
```

## Contact
Have suggestions or want a demo?

📧 chatterjeeanata091@gmail.com
📌 GitHub Issues or pull requests are welcome!

This project helped me a lot in understanding the basic concepts of PHP and backend systems and allowed me to dive deeper into full-stack website development. It was a great hands-on experience to connect frontend with databases and user roles.

Thank you for checking out this project!
Feel free to fork, improve, and share it with others.
