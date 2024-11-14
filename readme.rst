# CodeIgniter

## What is CodeIgniter?
CodeIgniter is an **Application Development Framework** for people who build websites using PHP. It provides a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter enables you to develop projects much faster than writing code from scratch by minimizing the amount of code required for common tasks.

---

## Release Information
This repository contains **in-development code** for future releases. For the **latest stable release**, please visit the [CodeIgniter Downloads](https://codeigniter.com/download) page.

---

## Changelog and New Features
You can find a list of all changes for each release in the [user guide changelog](https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst).

---

## Server Requirements
- PHP version 5.6 or newer is recommended.
- It should work on PHP 5.3.7 as well, but we strongly advise against running such old versions due to potential security and performance issues, as well as missing features.

---

## Installation Instructions
Please follow the steps in the [CodeIgniter Installation Guide](https://codeigniter.com/userguide3/installation/index.html) to set up CodeIgniter on your system.

### **Important Configuration Step: Database Setup**
Before starting your project, make sure you configure the database settings correctly:

1. **Open `application/config/database.php`**.
2. **Modify the database connection settings** according to your local or production server:

```php
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',  // Change to your database server
    'username' => 'your_db_username',  // Your database username
    'password' => 'your_db_password',  // Your database password
    'database' => 'your_db_name',  // Your database name
    'dbdriver' => 'mysqli',  // Or another supported database driver
    'dbprefix' => '', // Prefix for all table names (optional)
    'pconnect' => FALSE, // Persistent connection (set to TRUE for better performance in some cases)
    'db_debug' => (ENVIRONMENT !== 'production'), // Show debug messages in non-production environments
    'cache_on' => FALSE, // Enable query caching
    'cachedir' => '', // Set the path to cache folder (optional)
    'char_set' => 'utf8', // Character set for the database connection
    'dbcollat' => 'utf8_general_ci', // Collation for the database connection
);
