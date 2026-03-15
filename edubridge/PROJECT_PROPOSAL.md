# Community Project Proposal

## Formatting Note

When preparing the final printed proposal, apply the following formatting in Word or Google Docs:

- Font face: Times New Roman
- Font size: 11 pt
- Line spacing: 1.5

## Title of the Project

Parent-Teacher Relationship Management System with WhatsApp Notification Support

## Approval for the Community Project by Head of the Selected Institution

### Approval of Community Project

1. Index No: [Enter Index Number]
2. Name with Initials: [Enter Name with Initials]
3. Email: [Enter Email Address]
4. Mobile No: [Enter Mobile Number]
5. Title of the Community Project: Parent-Teacher Relationship Management System with WhatsApp Notification Support
6. Name of the Mentor: [Enter Mentor Name]
7. Mentor's Designation: [Enter Mentor Designation]
8. Mentor's Organization: [Enter Organization Name]

For office use only:

Approved/Not Approved

Signature of the Head of the Institution: ____________________

Date: ____________________

Suggestions if any: ________________________________________

## Index

| No. | Section | Suggested Page |
| --- | --- | --- |
| 1 | Title of the Project | 1 |
| 2 | Approval Sheet | 2 |
| 3 | Index | 3 |
| 4 | Acknowledgement | 4 |
| 5 | Introduction and Objectives | 5-6 |
| 6 | Analysis | 7-10 |
| 7 | Hardware and Software Requirements | 11 |
| 8 | Tables and Structure | 12-14 |
| 9 | Proposed System | 15-17 |
| 10 | Modules Split-up and Gantt Chart | 18-19 |
| 11 | References | 20 |
| 12 | Cost Analysis | 21 |
| 13 | Appendix: Current Pages Developed | 22-24 |

## Acknowledgement

I would like to express my sincere gratitude to my mentor, the academic staff, and the management of the selected institution for their valuable guidance, support, and encouragement in preparing this community project proposal. I am also grateful to the school administration, teachers, and parents whose communication challenges inspired the idea behind this system. Their practical needs helped define the project scope and objectives. Finally, I would like to thank my family and colleagues for their continuous support throughout this proposal preparation.

## Introduction and Objectives of the Community Project

### Introduction

Communication between schools and parents is one of the most important factors in student development. In many schools, information related to attendance, homework, examinations, fee reminders, class announcements, and student performance is still shared manually through paper notes, phone calls, or fragmented messaging methods. These practices often cause delays, communication gaps, and missing records.

The proposed Parent-Teacher Relationship Management System is a web-based application developed using Laravel. The system is designed to improve communication among administrators, teachers, and parents by centralizing school-related information and sending timely WhatsApp notifications. Through this platform, teachers can record attendance, upload homework, manage grades, generate reports, and respond to parent queries. Parents can monitor their children's academic progress, receive important alerts, confirm home arrival, and communicate directly with teachers. Administrators can manage users, classes, announcements, and notification templates.

This project is intended to provide a practical digital solution that improves school-home engagement while supporting day-to-day academic administration.

### Main Objective

To develop a Parent-Teacher Relationship Management System that improves communication and information sharing between the school, teachers, and parents through a secure web platform integrated with WhatsApp notifications.

### Specific Objectives

- To provide separate dashboards for administrators, teachers, and parents.
- To notify parents about student attendance, homework, examinations, fee reminders, and announcements.
- To allow teachers to manage attendance, grades, reports, homework, and class messages.
- To help parents monitor their child's progress and communicate with teachers more efficiently.
- To centralize institutional data and reduce manual communication errors.
- To maintain secure, role-based access for different types of users.
- To improve response time and transparency in school-parent communication.

## Analysis

### Existing System

The current communication process in many schools is largely manual. Teachers send messages through students, parents receive late updates, attendance information is not delivered in real time, and records are difficult to track. Important details such as homework deadlines, exam notices, and student reports may be missed. There is also no single platform where parents can easily view student information and communicate with teachers.

### Problems in the Existing System

- Delays in delivering important school information to parents.
- Lack of centralized records for communication and academic updates.
- Difficulty in tracking attendance and homework completion.
- Limited transparency between teachers and parents.
- Manual communication increases workload and the chance of human error.
- No structured notification history or role-based access control.

### Proposed Solution

The proposed system is a Laravel-based web application that digitizes communication workflows between parents, teachers, and administrators. It supports dashboards for each user role, student progress monitoring, messaging, announcements, attendance handling, report generation, and WhatsApp-based notifications.

### Feasibility Study

#### Technical Feasibility

The project is technically feasible because it uses widely available technologies such as Laravel, PHP, MySQL, Blade templates, HTML, CSS, JavaScript, and WhatsApp API integration. The development environment can be set up on standard computers using XAMPP or Laragon.

#### Operational Feasibility

The system is operationally feasible because teachers, parents, and administrators can use it with basic digital literacy. WhatsApp is already a commonly used communication platform, so adoption barriers are low.

#### Economic Feasibility

The initial development cost is moderate because the project uses open-source tools. The main costs are internet usage, optional hosting, domain registration, and WhatsApp API messaging charges.

#### Schedule Feasibility

The core modules can be developed within a single academic project period by following an incremental approach. Essential modules such as login, dashboards, attendance, homework, reports, and notifications can be completed first, followed by refinements and testing.

### DFD Summary

#### Level 0 DFD

External entities:

- Admin
- Teacher
- Parent
- WhatsApp Notification Service

Central system:

- Parent-Teacher Relationship Management System

Main data flows:

- Admin manages users, classes, announcements, templates, and settings.
- Teacher records attendance, grades, homework, reports, and messages.
- Parent views child data, receives notifications, sends queries, and confirms arrival.
- System sends alerts and notifications through WhatsApp.

#### Level 1 DFD Processes

- Process 1: User Authentication and Role Management
- Process 2: Student and Class Management
- Process 3: Attendance and Homework Management
- Process 4: Grades and Report Generation
- Process 5: Messaging and Announcements
- Process 6: Notification Processing and Delivery

### ER Diagram Summary

Main entities and relationships:

- User belongs to one role.
- Parent can be linked to one or more students.
- Teacher manages one or more classes.
- Class contains many students.
- Student has many attendance records.
- Student has many grade records.
- Student has many homework items and reports.
- Users exchange messages.
- Admin and teachers create announcements.
- System stores notification templates and notification logs.

Suggested major entities:

- users
- roles
- parents
- teachers
- students
- classes
- class_student
- parent_student
- attendance
- grades
- homework
- reports
- messages
- announcements
- notifications
- notification_logs

## Hardware and Software Requirements

### Hardware Requirements

| Item | Minimum Requirement |
| --- | --- |
| Processor | Intel Core i3 or above |
| RAM | 4 GB minimum, 8 GB recommended |
| Storage | 20 GB free disk space, SSD recommended |
| Display | 1366 x 768 or above |
| Internet | Stable broadband or mobile data connection |
| Smartphone | Android or iPhone with WhatsApp for parent alerts |

### Software Requirements

| Item | Requirement |
| --- | --- |
| Operating System | Windows 10/11, Linux, or macOS |
| Backend | PHP 8.2+ |
| Framework | Laravel 11 |
| Database | MySQL or PostgreSQL |
| Frontend | Blade, HTML5, CSS3, JavaScript, Bootstrap |
| Local Server | XAMPP, Laragon, or Laravel Sail |
| IDE | Visual Studio Code |
| Browser | Google Chrome, Edge, or Firefox |
| Version Control | Git and GitHub |
| Notification Integration | WhatsApp Business API or approved provider |
| PDF Generation | DOMPDF package or equivalent |

## Tables and Structure, Number of Modules, Details of Modules, Data Structure

### Number of Modules

The proposed system can be divided into 6 main modules.

1. Authentication and User Management Module
2. Admin Management Module
3. Teacher Management Module
4. Parent Portal Module
5. Communication and Notification Module
6. Reporting and Monitoring Module

### Details of Modules

#### 1. Authentication and User Management Module

- User login and registration
- Password reset and account recovery
- Role-based access control for admin, teacher, and parent

#### 2. Admin Management Module

- Manage users
- Manage classes
- Manage announcements
- Manage notification templates and logs
- Configure system settings

#### 3. Teacher Management Module

- Dashboard access
- Manage classes and students
- Mark attendance
- Enter grades
- Create homework
- Generate student reports
- Send messages and announcements

#### 4. Parent Portal Module

- View child dashboard
- Track attendance and academic performance
- View homework and reports
- Receive alerts and announcements
- Send and receive messages
- Confirm child's arrival at home

#### 5. Communication and Notification Module

- WhatsApp notifications
- System alerts
- Parent-teacher messaging
- Broadcast announcements
- Notification history and template management

#### 6. Reporting and Monitoring Module

- Student progress reports
- Attendance summaries
- Grade summaries
- Message logs
- Notification logs

### Suggested Database Tables and Structures

| Table Name | Key Fields | Purpose |
| --- | --- | --- |
| users | id, name, email, password, role_id | Stores login users |
| roles | id, role_name | Stores roles such as admin, teacher, parent |
| parents | id, user_id, contact_no, address | Stores parent profile details |
| teachers | id, user_id, subject, contact_no | Stores teacher profile details |
| students | id, full_name, admission_no, class_id | Stores student details |
| classes | id, class_name, grade_level, teacher_id | Stores class records |
| parent_student | id, parent_id, student_id | Links parents and students |
| class_student | id, class_id, student_id | Links students to classes |
| attendance | id, student_id, date, status, remarks | Stores daily attendance |
| grades | id, student_id, subject, marks, term | Stores academic marks |
| homework | id, class_id, title, description, due_date | Stores homework details |
| reports | id, student_id, term, file_path, summary | Stores generated reports |
| messages | id, sender_id, receiver_id, message, sent_at | Stores chat and communication |
| announcements | id, created_by, title, body, audience | Stores public or group notices |
| notifications | id, user_id, type, content, status | Stores notification events |
| notification_logs | id, notification_id, channel, delivered_at | Stores delivery history |

### Data Structure Notes

- The system uses a relational database model.
- Primary keys are used in each master table.
- Foreign keys maintain relationships between users, students, classes, and records.
- The design supports normalization up to at least the Third Normal Form to reduce data duplication.
- Audit-friendly fields such as created_at and updated_at can be included in all major tables.

## Proposed System

### Functional Requirements

- The system shall allow users to log in according to their assigned roles.
- The admin shall be able to create, update, and remove users.
- The admin shall be able to manage classes, announcements, and notification templates.
- Teachers shall be able to mark student attendance.
- Teachers shall be able to assign homework and enter grades.
- Teachers shall be able to generate and view student reports.
- Parents shall be able to view attendance, grades, homework, and reports of their child.
- Parents shall be able to send queries to teachers through the system.
- The system shall send WhatsApp notifications for attendance, homework, exams, announcements, and fee reminders.
- The system shall store logs of messages and notifications for monitoring purposes.
- Parents shall be able to confirm whether the child has arrived home safely.

### Non-Functional Requirements

- Security: Role-based access and protected user data.
- Availability: The system should be accessible during school operating hours and beyond.
- Usability: Simple interfaces for school staff and parents.
- Performance: Common page requests should load quickly under normal usage.
- Maintainability: The system should use modular code for future enhancements.
- Reliability: Records should be stored consistently without loss.
- Scalability: The design should allow future expansion to more classes and users.
- Compatibility: The system should function on desktop and mobile browsers.

### Methodology

The project can follow an Agile-based incremental development methodology.

1. Requirement gathering from school staff, parents, and mentor.
2. System analysis and database design.
3. UI design and module planning.
4. Development of authentication and dashboards.
5. Development of teacher, parent, and admin modules.
6. Integration of messaging and notification features.
7. Testing and bug fixing.
8. User feedback and final improvements.
9. Documentation and deployment.

## Modules Split-up and Gantt Chart

### Module Split-up

| Phase | Work Item |
| --- | --- |
| Phase 1 | Requirement gathering and proposal preparation |
| Phase 2 | System analysis, DFD, ER design, and database planning |
| Phase 3 | Authentication and role-based dashboards |
| Phase 4 | Teacher module development |
| Phase 5 | Parent module development |
| Phase 6 | Admin module development |
| Phase 7 | Notification and messaging integration |
| Phase 8 | Testing, documentation, and presentation |

### Sample Gantt Chart

| Activity | W1 | W2 | W3 | W4 | W5 | W6 | W7 | W8 | W9 | W10 | W11 | W12 |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| Requirement Gathering | X | X |  |  |  |  |  |  |  |  |  |  |
| Feasibility and Analysis |  | X | X |  |  |  |  |  |  |  |  |  |
| Database and UI Design |  |  | X | X |  |  |  |  |  |  |  |  |
| Authentication Module |  |  |  | X | X |  |  |  |  |  |  |  |
| Teacher Module |  |  |  |  | X | X | X |  |  |  |  |  |
| Parent Module |  |  |  |  |  | X | X | X |  |  |  |  |
| Admin Module |  |  |  |  |  |  | X | X |  |  |  |  |
| Notification Integration |  |  |  |  |  |  |  | X | X |  |  |  |
| Testing and Bug Fixing |  |  |  |  |  |  |  |  | X | X |  |  |
| Documentation |  |  |  |  |  |  |  |  |  | X | X |  |
| Final Review and Presentation |  |  |  |  |  |  |  |  |  |  | X | X |

## References

1. Laravel Documentation. https://laravel.com/docs
2. PHP Documentation. https://www.php.net/docs.php
3. MySQL Documentation. https://dev.mysql.com/doc
4. WhatsApp Business Platform Documentation. https://developers.facebook.com/docs/whatsapp
5. Bootstrap Documentation. https://getbootstrap.com/docs
6. Visual Studio Code Documentation. https://code.visualstudio.com/docs
7. DOMPDF for Laravel. https://github.com/barryvdh/laravel-dompdf

## Cost Analysis

The following is a sample estimated cost analysis. Values can be adjusted according to the actual project environment and whether existing resources are already available.

| Item | Estimated Cost (LKR) |
| --- | --- |
| Internet and Communication | 12,000 |
| Domain Registration | 5,000 |
| Hosting | 12,000 |
| WhatsApp API Testing and Messaging | 5,000 |
| Printing and Binding | 2,500 |
| Transport and Meetings | 3,500 |
| Miscellaneous and Contingency | 4,000 |
| Total Estimated Cost | 44,000 |

## Appendix: Current Pages Developed in This Project

Based on the current Blade templates available in the Laravel workspace, the project already contains the following developed pages.

### 1. Public and Authentication Pages

- Welcome page
- Login page
- Register page
- Forgot password page
- Reset password page

### 2. Admin Pages

- Admin dashboard
- User list page
- Create user page
- Edit user page
- Class list page
- Create class page
- Edit class page
- Reports list page
- Report view page
- Announcements list page
- Create announcement page
- Edit announcement page
- Notification dashboard
- Notification templates page
- Notification log page
- Settings page

### 3. Teacher Pages

- Teacher dashboard
- Classes list page
- Students in class page
- Attendance overview page
- Attendance mark page
- Grades list page
- Create grade page
- Reports index page
- Generate report page
- Homework list page
- Create homework page
- Messages inbox page
- Chat page
- Announcements list page
- Create announcement page
- Settings page

### 4. Parent Pages

- Parent dashboard
- Child tracker page
- Reports page
- Profile page
- Homework page
- Messages page
- Notifications page
- Home arrival confirmation page

### 5. Reusable Component Currently Present

- Teacher sidebar component

### Summary Count

- Total page views currently present: 45
- Reusable component partial currently present: 1

### Important Note About the Current Codebase

The route file currently references several teacher pages that are not yet available as Blade files. These include class create and edit pages, attendance report, grade report, homework edit and submissions, message compose, student progress reports, class performance reports, teacher profile pages, and schedule pages. In addition, admin page templates exist in the workspace, but admin routes are not yet defined in the current web route file.