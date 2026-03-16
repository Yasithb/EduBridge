# 📘 Parent–Teacher Relationship Management System (PTRMS)

A Laravel-based web application that strengthens communication between **parents**, **teachers**, and **school administrators**.  
The system allows parents to track their children’s academic progress, attendance, and daily activities while receiving **automated WhatsApp notifications** for important updates such as homework, exams, and fee payments.

---

## 🚀 Key Features

- 📊 **Student Progress Reports** – View academic results and download progress reports as **PDF files**.  
- 🧑‍🏫 **Teacher–Parent Messaging** – Secure two-way communication between teachers and parents.  
- 📱 **WhatsApp Notifications** – Real-time alerts for attendance, homework, exams, and fee reminders.  
- 🕒 **Attendance Management** – Teachers can mark attendance, and parents receive instant notifications.  
- 🏠 **Home Arrival Confirmation** – Parents can confirm whether their child has safely arrived home.  
- 🔐 **Role-Based Access Control** – Separate dashboards for Admin, Teacher, and Parent users.  
- 💬 **Class Announcements** – Broadcast important notices and events.  

---

## 🧩 Tech Stack

| Layer | Technology |
|-------|-------------|
| Framework | Laravel 11 (PHP 8.2+) |
| Frontend | Blade Templates / Bootstrap / Vue.js (optional) |
| Database | MySQL / PostgreSQL |
| Notifications | WhatsApp Business API (via HTTP integration) |
| Authentication | Laravel Breeze / Jetstream |
| PDF Reports | `barryvdh/laravel-dompdf` |
| Hosting | XAMPP / Laragon / Laravel Vapor / Shared Hosting |

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/yourusername/parent-teacher-relationship-system.git
cd parent-teacher-relationship-system
