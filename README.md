# 🏥 Forthall Patient Access and Scheduling System

An advanced medical appointment scheduling system designed to streamline patient-doctor interactions, medical record management, and clinical workflow optimization.

![Project Status](https://img.shields.io/badge/Status-Stable-brightgreen?style=for-the-badge&logo=statuspage)
![Developer](https://img.shields.io/badge/Developed_by-eragondevs-blue?style=for-the-badge)

## 🌟 Key Features

- **Multi-Role Access**: Dedicated portals for Patients, Doctors, and Administrators.
- **Dynamic Scheduling**: Real-time appointment booking and availability management.
- **Medical Dashboard**: Comprehensive dashboards tailored to user roles.
- **Automated Alerts**: System notifications for upcoming appointments.
- **Secure Architecture**: Robust authentication and data protection protocols.
- **Responsive Interface**: Fully optimized for mobile and desktop clinical environments.

## 📖 Documentation & Security

- **[USER_MANUAL.md](USER_MANUAL.md)**: Detailed operating instructions for all roles.
- **[LICENSE](LICENSE)**: Proprietary software license for KONSUT Ltd.

## 🚀 Getting Started

### Prerequisites
- **Web Server**: Apache/Nginx (XAMPP/WAMP recommended)
- **PHP**: Version 7.4 or higher
- **Database**: MySQL/MariaDB

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/wanjohialvins/Forthall-Appointment-System.git
   ```

2. **Database Setup**
   - Import the provided SQL dump (if available) or create a database named `Forthall`.
   - Update `Appointment/connection.php` with your database credentials.

3. **Deploy**
   - Move the project folder to your web server's root (e.g., `htdocs`).
   - Navigate to `http://localhost/Forthall-Appointment-System/homepage.html`.

## 📁 Project Structure

```bash
Forthall-Appointment-System/
├── Appointment/         # Core application logic
│   ├── admin/           # Administrative portal
│   ├── doctor/          # Medical professional portal
│   ├── patient/         # Patient service portal
│   └── connection.php   # Database bridge
├── assets/              # Static assets (CSS, JS, Images)
├── homepage.html        # Public-facing landing page
└── LICENSE              # Proprietary License
```

---

**Developed by eragondevs**  
*Igniting healthcare digital transformation.*
