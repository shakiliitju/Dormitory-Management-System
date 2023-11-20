# Dormitory-Management-System

## ABSTRACT

This report describes the development of a dormitory management system website designed to improve the efficiency and effectiveness of managing dormitories or student housing. The website addresses the specific challenges faced by dormitory management, such as managing room assignments, maintaining accurate occupancy records, and processing billing and payment information. The proposed system provides user registration and login, room assignment management, and payment processing functionality. The website was implemented using a combination of programming languages and frameworks, and rigorous testing and validation processes were performed to ensure its reliability and effectiveness. The results of the project showed that the website provided significant benefits to both students and administrators, such as reducing paperwork, increasing transparency, and improving communication. The report concludes with potential areas for future development and improvement, such as integrating with other campus management systems or adding new
features to the website. Overall, the dormitory management system website has the potential to revolutionize the management of dormitories and student housing, and provide significant benefits to both students and administrators.

## Objectives

The objectives of the “Dormitory Management System” are:
<ul>
  <li>To provide a digital management system for JU hall.</li>
  <li>To develop a user-friendly and intuitive website for dormitory management that can be accessed and utilized by both students and administrators.</li>
  <li>To improve the efficiency of managing dormitories by providing automated tools for managing room assignments, occupancy records, and billing and payment processing.</li>
  <li>Reduce paperwork and administrative burden by providing a digital platform for managing dormitories.</li>
  <li>To provide accurate and up-to-date information on dormitory occupancy, room assignments, and billing and payment information.</li>
  <li>To ensure the security and confidentiality of student and administrator data by implementing robust security measures.</li>
  <li>To provide a reliable and scalable system that can accommodate future growth and expansion.</li>
  <li>To improve the overall student experience by providing a streamlined and efficient process for managing dormitories.</li>
</ul> 


## Requirement Collection and Analysis

These are some modules present in the website.
<ul>
  <li>Administrator module</li>
  <li>User Module</li>
  <li>Hostile Module</li>
  <li>Registration Module</li>
</ul> 

## Database Schema

Admin (A_ID, Password) <br>
Provost (P_ID, Name, Email, Phone) <br>
Staff (St_ID, Name, Phone, Email, Post, Salary, Address) <br>
Student (S_ID, Name, Phone, Email, Registration, Batch, Department) <br>
Room (R_ID, Block, Floor, No of Bed, S_ID) <br>
Dinning (D_ID, Meal Type, Meal Rate, Menu, S_ID, St_ID) <br>
Hall Charge (H_ID, Charge, A_ID, S_ID) <br>
Facility (F_ID, PR_ID, ER_ID, RR_ID, S_ID) <br>
Prayer Room (S_ID, PR_ID) <br>
Entertainment Room (ER_ID, S_ID, TV, Table Tennis) <br>
Reading Room (RR_ID, S_ID) <br>

## Diagram of Entity Relationship

<img src="https://github.com/shakiliitju/Dormitory-Management-System/blob/master/ER%20Diagram/ER%20Diagram.drawio.png">


## Design

### Home Page
<img src="https://github.com/shakiliitju/Dormitory-Management-System/blob/master/Design/home%20page.png">

### About Page
<img src="https://github.com/shakiliitju/Dormitory-Management-System/blob/master/Design/about.png">

### Hall Page
<img src="https://github.com/shakiliitju/Dormitory-Management-System/blob/master/Design/hall.png">

### Admin Home Page
<img src="https://github.com/shakiliitju/Dormitory-Management-System/blob/master/Design/admin%20home.png">

## Conclusion

Dormitory management systems are software tools that streamline the management of dormitories and student housing facilities. These systems typically include features such as room assignment and scheduling, facility maintenance and repairs, rent payment tracking, and communication tools for residents and staff. Overall, dormitory management systems can greatly benefit both students and staff by increasing efficiency and reducing administrative workload. By automating many of the tasks associated with managing a dormitory, staff members can devote more time to providing support and resources to students. Additionally, these systems often provide valuable data and analytics that can inform decision-making around facility management and student programming. For example, usage patterns and feedback from residents can help staff optimize resource allocation and improve the overall living experience for students. In summary, dormitory management systems offer a variety of benefits for both students and staff, including improved efficiency, better communication, and data-driven decisionmaking. As such, they are increasingly becoming a standard tool for managing student housing facilities.
