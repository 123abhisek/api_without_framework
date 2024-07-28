It looks like the project uses the \`FastRoute\` library for routing.
You\'ll need to ensure that \`FastRoute\` is properly installed and
included in your project. Here\'s how you can update the \`README.md\`
to include information about the \`FastRoute\` library and its
installation:

\`\`\`markdown \# PHP Recipes API

\## Installation and Setup

To get started with the PHP Recipes API, follow these steps to set up
the development environment and initialize the project.

\### Prerequisites

\- \*\*Docker\*\*: Ensure you have Docker installed on your machine. You
can download it from \[Docker\'s official
site\](https://www.docker.com/products/docker-desktop). -
\*\*Composer\*\*: Ensure you have Composer installed to manage PHP
dependencies. You can download it from \[Composer\'s official
site\](https://getcomposer.org/).

\### Installation

1\. \*\*Clone the Repository\*\*

Open your terminal and clone the repository using Git: \`\`\`bash git
clone https://github.com/123abhisek/api_without_framework.git cd
api_without_framework \`\`\`

2\. \*\*Install PHP Dependencies\*\*

Install the necessary PHP libraries using Composer. Run the following
command in the project root directory: \`\`\`bash composer install
\`\`\`

This will install \`FastRoute\` and other dependencies defined in the
\`composer.json\` file.

3\. \*\*Prepare the Database\*\*

Import the provided SQL dump to set up the database schema.

 - Open your terminal and access the MySQL container: \`\`\`bash
docker-compose exec mysql mysql -u root -p \`\`\`  - Create the
database: \`\`\`sql CREATE DATABASE php_test; USE php_test; \`\`\`  -
Import the SQL file: \`\`\`bash docker-compose exec -T mysql mysql -u
root -p php_test \< /path/to/php_test.sql \`\`\`

Replace \`/path/to/php_test.sql\` with the actual path to the
\`php_test.sql\` file.

4\. \*\*Build and Start Containers\*\*

Use Docker Compose to build and start the containers: \`\`\`bash
docker-compose up -d \`\`\`

5\. \*\*Access the API\*\*

The API should now be running at \`http://localhost:8080\`. You can
interact with it using tools like Postman or cURL.

6\. \*\*Run Tests\*\*

If you have tests configured, run them using PHPUnit inside the PHP
container: \`\`\`bash docker-compose exec php vendor/bin/phpunit \`\`\`

\## FastRoute Library

The project uses the \`FastRoute\` library for routing. Ensure it\'s
installed by running \`composer install\`, which will fetch
\`FastRoute\` and other dependencies.

\*\*Usage:\*\* - \*\*Routing\*\*: \`FastRoute\` is configured in the
\`index.php\` file to handle routing for various API endpoints.

\## Project Setup

1\. \*\*Directory Structure\*\*

Ensure your project directory contains the following structure: \`\`\`
C:\\xampp\\htdocs\\PHP Projects\\php-test\\web \`\`\`

2\. \*\*Files and Configuration\*\*

The essential files include:  - \`Dockerfile\`  - \`docker-compose.yml\`
 - \`index.php\` (with routing setup using \`FastRoute\`)  - \`db.php\`
 - \`routes.php\`  - \`composer.json\` (includes \`FastRoute\`)  -
\`README.md\`

Review and modify these files as needed for your development.

3\. \*\*Configuration\*\*

 - \*\*Dockerfile\*\*: Configures the PHP environment.  -
\*\*docker-compose.yml\*\*: Defines the services (PHP, MySQL, Redis) and
their configurations.  - \*\*index.php\*\*: Handles routing and request
dispatching using \`FastRoute\`.  - \*\*db.php\*\*: Manages database
connections and CRUD operations.  - \*\*routes.php\*\*: Defines the API
endpoints and their handlers.

By following these instructions, you will set up the PHP Recipes API and
be ready for development and testing.

For further details or questions, refer to the \[GitHub
repository\](https://github.com/123abhisek/api_without_framework.git).

\-\-- Thank you for setting up the PHP Recipes API! \`\`\`

This updated \`README.md\` includes a section about the \`FastRoute\`
library, clarifying its installation and usage within the project. Make
sure the \`composer.json\` file in your project includes \`FastRoute\`
as a dependency.
