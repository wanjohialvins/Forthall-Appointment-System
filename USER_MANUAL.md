# 📄 Forthall System - User Manual

Welcome to the **Forthall Patient Access and Scheduling System** User Manual. This guide provides instructions for navigating the clinical environment.

---

## 📑 Table of Contents
1. [Introduction](#introduction)
2. [Patient Portal](#patient-portal)
3. [Doctor Portal](#doctor-portal)
4. [Administrative Controls](#administrative-controls)
5. [System Configuration](#system-configuration)
6. [Troubleshooting](#troubleshooting)

---

## 1. Introduction
Forthall is designed to minimize wait times and maximize clinical efficiency. The system is split into three main access nodes: Patients, Doctors, and Administrators.

---

## 2. Patient Portal
### Account Creation
- Navigate to the **Sign Up** page.
- Enter your personal details (Name, DOB, Address).
- Create your login credentials (Email & Password).

### Booking an Appointment
1. Login to your dashboard.
2. Select **Book Appointment**.
3. Choose your preferred doctor and available time slot.
4. Confirm the booking to lock the slot.

---

## 3. Doctor Portal
### Managing Schedule
- Doctors can view all scheduled appointments for the day/week.
- Mark appointments as "Completed" or "Cancelled".
- View patient medical summaries (if shared).

---

## 4. Administrative Controls
### System Oversight
- Administrators have full visibility into system metrics.
- Manage doctor shifts and department assignments.
- Control user access and reset credentials if necessary.

---

## 5. System Configuration
### Database Settings
All database interactions are routed through `Appointment/connection.php`. To change the environment:
- Open `connection.php`.
- Modify the `mysqli` parameters to match your server.

---

## 6. Troubleshooting
- **Login Failures**: Ensure you are selecting the correct role (Patient/Doctor/Admin) implicitly via your registered email.
- **Database Error**: Check if the MySQL service is running on your server.
- **Empty Schedule**: Ensure doctors have been added to the database by the administrator.

---

**Developed & Maintained by eragondevs**  
*Version 2.0.0 // January 2026*
