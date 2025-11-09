# SNG-Hospital Management System

A comprehensive hospital management system with a modern frontend interface, secure admin panel, and robust PHP API backend.

## Project Structure

```
├── frontend/               # Client-side web interface
│   ├── index.html         # Main entry point
│   └── assets/
│       ├── css/           # Stylesheets
│       └── js/            # JavaScript files
│
├── jsp-admin/             # Admin panel (JSP)
│   ├── dashboard.jsp      # Admin dashboard
│   ├── login.jsp         # Admin authentication
│   └── WEB-INF/
│       └── web.xml       # Web application configuration
│
└── php-api/              # Backend API services
    ├── appointment.php   # Appointment management
    ├── db.php           # Database connection
    ├── doctors.php      # Doctor management
    └── patients.php     # Patient management
```

## Features

- 🏥 Patient Management System
- 👨‍⚕️ Doctor Directory
- 📅 Appointment Scheduling
- 🔐 Secure Admin Panel
- 📱 Responsive Web Interface
- 🔄 Real-time Updates

## Technologies Used

### Frontend
- HTML5
- CSS3
- JavaScript

### Admin Panel
- JavaServer Pages (JSP)
- Java Servlets
- XML Configuration

### Backend API
- PHP
- MySQL Database

## Setup Instructions

### Prerequisites
- Web Server (Apache/Nginx)
- PHP 7.4+
- MySQL 5.7+
- Java Development Kit (JDK) 8+
- Apache Tomcat 9+

### Installation Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/niteshkumar8848/SNG-Hospital.git
   ```

2. Set up the database:
   - Create a MySQL database
   - Import the database schema (if provided)
   - Update database credentials in `php-api/db.php`

3. Configure the web server:
   - Point your web server to the `frontend` directory for the client interface
   - Deploy the JSP admin panel to Tomcat server
   - Ensure PHP API endpoints are accessible

4. Configure admin panel:
   - Deploy the `jsp-admin` folder to your Tomcat webapps directory
   - Update any necessary configurations in `web.xml`

5. Start the services:
   - Start MySQL service
   - Start Apache/Nginx
   - Start Tomcat server

## API Endpoints

### Patients
- `GET /patients.php` - List all patients
- `POST /patients.php` - Add new patient
- `PUT /patients.php` - Update patient information
- `DELETE /patients.php` - Remove patient

### Doctors
- `GET /doctors.php` - List all doctors
- `POST /doctors.php` - Add new doctor
- `PUT /doctors.php` - Update doctor information
- `DELETE /doctors.php` - Remove doctor

### Appointments
- `GET /appointment.php` - List appointments
- `POST /appointment.php` - Schedule new appointment
- `PUT /appointment.php` - Update appointment
- `DELETE /appointment.php` - Cancel appointment

## Security

- Admin panel access is secured with authentication
- API endpoints include necessary security measures
- Database credentials are protected
- Input validation is implemented
- XSS and SQL injection prevention measures are in place

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Contact

Nitesh Kumar - [@niteshkumar8848](https://github.com/niteshkumar8848)
<br>
Gobinda Bhattarai - [@bhattaraicontact-cmd](https://github.com/bhattaraicontact-cmd)

Project Link: [https://github.com/niteshkumar8848/SNG-Hospital](https://github.com/niteshkumar8848/SNG-Hospital)
