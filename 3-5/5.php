<?php

// Tabel employees
$employeesTable = "
CREATE TABLE employees (
    NIK INT PRIMARY KEY,
    Departemen_ID INT,
    Section_ID INT,
    FOREIGN KEY (Departemen_ID) REFERENCES departments(Departemen_ID),
    FOREIGN KEY (Section_ID) REFERENCES sections(Section_ID)
);
";

// Tabel employee_details
$employeeDetailsTable = "
CREATE TABLE employee_details (
    NIK INT PRIMARY KEY,
    FOREIGN KEY (NIK) REFERENCES employees(NIK)
);
";

// Tabel departments
$departmentsTable = "
CREATE TABLE departments (
    Departemen_ID INT PRIMARY KEY
);
";

// Tabel sections
$sectionsTable = "
CREATE TABLE sections (
    Section_ID INT PRIMARY KEY
);
";

// Contoh ERD SQL
$erdSQL = $employeesTable . $employeeDetailsTable . $departmentsTable . $sectionsTable;

echo $erdSQL;
