# Student Record Management System

A three-tier web application deployed on AWS using Docker and Amazon RDS.

## Project Overview

This project is a Student Record Management System developed using PHP and MySQL. The application allows users to add, view, edit, and delete student records through a simple web interface.

The application is containerized using Docker and hosted on an AWS EC2 instance. The database is hosted separately on Amazon RDS MySQL, implementing a basic three-tier architecture.

---

## Architecture

User Browser
        |
        v
AWS EC2 Instance
(Docker Container)
        |
        v
Amazon RDS MySQL Database

---

## Technologies Used

### Frontend
- HTML
- CSS
- JavaScript

### Backend
- PHP

### Database
- MySQL
- Amazon RDS

### DevOps & Cloud
- Docker
- Git
- GitHub
- AWS EC2
- Amazon RDS
- Linux (Ubuntu)

---

## Features

- Add Student Records
- View Student Records
- Edit Existing Records
- Delete Student Records
- Responsive User Interface
- Dockerized Deployment
- Cloud Database Integration

---

## Deployment Process

### Step 1: Launch AWS EC2 Instance

Ubuntu EC2 instance was created to host the application.

### Step 2: Install Docker

Docker was installed on the EC2 server and used to containerize the PHP application.

### Step 3: Create Amazon RDS Database

A MySQL RDS instance was created and configured.

### Step 4: Connect Application to Database

The PHP application was connected to the RDS endpoint using MySQL credentials.

### Step 5: Build Docker Image

```bash
docker build -t student-record-app .
```

### Step 6: Run Container

```bash
docker run -d \
--name student_app \
-p 8080:80 \
student-record-app
```

### Step 7: Access Application

```text
http://<EC2-PUBLIC-IP>:8080
```

---

# Screenshots

## Application Running Successfully

![Application](application.png)

---

## Docker Container Running

![Docker Container](docker_container_running.png)

---

## AWS EC2 Instance

![EC2 Instance](ec2.png)

---

## Amazon RDS Instance

![RDS](rds.png)

---

## Database Records Stored Successfully

![Database](mysql_database.png)

---

## Database Schema

Database Name:

```sql
user_management
```

Table:

```sql
stdrec
```

Columns:

```sql
rollno
name
class
address
city
```

---

## Challenges Faced

- Configuring Docker networking
- Connecting EC2 with Amazon RDS
- Managing AWS Security Groups
- Containerizing PHP application
- Database connectivity troubleshooting

---

## Learning Outcomes

Through this project I learned:

- Linux server administration
- Docker containerization
- AWS EC2 deployment
- Amazon RDS configuration
- Cloud networking concepts
- Security Groups management
- Git and GitHub workflow
- Three-tier architecture implementation

---

## Future Improvements

- Jenkins CI/CD Integration
- Nginx Reverse Proxy
- HTTPS using SSL Certificates
- Docker Compose
- Kubernetes Deployment
- Monitoring using CloudWatch

---

## Author

Niharika Karkra
