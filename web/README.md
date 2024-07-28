Here is a simplified \`README.md\` focusing only on the installation and project setup information, including the SQL content for setting up the database:

\`\`\`markdown

\# PHP Recipes API

\## Installation

1\. \*\*Clone the Repository\*\*

\`\`\`bash

git clone https://github.com/123abhisek/api\_without\_framework.git

cd api\_without\_framework

\`\`\`

2\. \*\*Install Docker\*\*

Ensure you have Docker installed on your machine. If not, download and install Docker from the \[official Docker website\](https://www.docker.com/products/docker-desktop).

3\. \*\*Build and Start Containers\*\*

Build and start the Docker containers using Docker Compose:

\`\`\`bash

docker-compose up -d

\`\`\`

4\. \*\*Database Setup\*\*

\- Access the MySQL container:

\`\`\`bash

docker-compose exec mysql mysql -u root -p

\`\`\`

\- Create the \`php\_test\` database:

\`\`\`sql

CREATE DATABASE php\_test;

\`\`\`

\- Use the \`php\_test\` database:

\`\`\`sql

USE php\_test;

\`\`\`

\- Import the provided SQL schema to set up the \`recipes\` table:

\`\`\`sql

\-- phpMyAdmin SQL Dump

\-- version 5.2.1

\-- https://www.phpmyadmin.net/

\--

\-- Host: 127.0.0.1

\-- Generation Time: Jul 28, 2024 at 11:20 AM

\-- Server version: 10.4.32-MariaDB

\-- PHP Version: 8.2.12

SET SQL\_MODE = "NO\_AUTO\_VALUE\_ON\_ZERO";

START TRANSACTION;

SET time\_zone = "+00:00";

/\*!40101 SET @OLD\_CHARACTER\_SET\_CLIENT=@@CHARACTER\_SET\_CLIENT \*/;

/\*!40101 SET @OLD\_CHARACTER\_SET\_RESULTS=@@CHARACTER\_SET\_RESULTS \*/;

/\*!40101 SET @OLD\_COLLATION\_CONNECTION=@@COLLATION\_CONNECTION \*/;

/\*!40101 SET NAMES utf8mb4 \*/;

\--

\-- Database: \`php\_test\`

\--

\-- --------------------------------------------------------

\--

\-- Table structure for table \`recipes\`

\--

CREATE TABLE \`recipes\` (

\`id\` int(11) NOT NULL,

\`name\` varchar(255) NOT NULL,

\`prep\_time\` time NOT NULL,

\`difficulty\` int(11) NOT NULL,

\`vegetarian\` tinyint(1) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4\_general\_ci;

\--

\-- Indexes for dumped tables

\--

\--

\-- Indexes for table \`recipes\`

\--

ALTER TABLE \`recipes\`

ADD PRIMARY KEY (\`id\`);

\--

\-- AUTO\_INCREMENT for dumped tables

\--

\--

\-- AUTO\_INCREMENT for table \`recipes\`

\--

ALTER TABLE \`recipes\`

MODIFY \`id\` int(11) NOT NULL AUTO\_INCREMENT;

COMMIT;

/\*!40101 SET CHARACTER\_SET\_CLIENT=@OLD\_CHARACTER\_SET\_CLIENT \*/;

/\*!40101 SET CHARACTER\_SET\_RESULTS=@OLD\_CHARACTER\_SET\_RESULTS \*/;

/\*!40101 SET COLLATION\_CONNECTION=@OLD\_COLLATION\_CONNECTION \*/;

\`\`\`

5\. \*\*Access the API\*\*

Visit \`http://localhost:8080\` in your web browser to interact with the API.

6\. \*\*Run Tests\*\*

Execute tests using PHPUnit:

\`\`\`bash

docker-compose exec php vendor/bin/phpunit

\`\`\`

\## Project Setup

1\. \*\*Ensure Docker is Running\*\*

Make sure Docker is running on your machine before starting the containers.

2\. \*\*Start the Development Environment\*\*

Build and run the Docker containers:

\`\`\`bash

docker-compose up -d

\`\`\`

3\. \*\*Database Configuration\*\*

Follow the steps in the \*\*Database Setup\*\* section to configure the database and import the schema.

4\. \*\*Access the Application\*\*

Once the containers are running, you can access the application via \`http://localhost:8080\`.

For further assistance or contributions, please visit the \[GitHub repository\](https://github.com/123abhisek/api\_without\_framework.git).

\---

Thank you for setting up and working with the PHP Recipes API!

\`\`\`

This \`README.md\` focuses on the installation and project setup, including database configuration. Adjust any specific details as needed based on your project requirements.