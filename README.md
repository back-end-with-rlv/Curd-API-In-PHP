# CRUD API in PHP for Beginners

## Token Authentication PHP Script

This PHP script provides token-based authentication for user access to an API. It verifies the validity of the provided token against a database table (`api_token`). The script checks whether the token exists, is active, and then allows or denies access accordingly.

### Usage

1. **Setup Database**: Ensure you have a MySQL database set up. Import the provided `db.sql` file to create the necessary `api_token` table.
2. **Include Script**: Place the `token.php` file in your PHP project directory.
3. **Integration**: Integrate this script into your API or application authentication process. Make sure to include it at the beginning of your API endpoints or wherever authentication is required.
4. **Token Verification**: When making requests to your API, include the `token` parameter in the URL. Example: `http://example.com/api/endpoint?token=YOUR_TOKEN`.

### Response Codes

- **1**: No token provided.
- **2**: Invalid token provided.
- **3**: Token is deactivated.

## User Data Retrieval API

This PHP script serves as an API endpoint to retrieve user data from a database table (`users`). It provides functionality to fetch all users or a specific user by their ID. The script ensures authentication using a token-based system implemented in the `token.php` file.

### Usage

1. **Setup Database**: Ensure you have a MySQL database set up with a table named `users` containing user data.
2. **Token Authentication**: The script includes a token file (`token.php`) for authentication. Ensure this file is correctly configured to validate user tokens.
3. **Endpoint**: Access the API endpoint (`index.php`) to retrieve user data. You can optionally provide an `id` parameter in the URL to fetch data for a specific user. Example: `http://example.com/api/index.php?id=1`.

## User Data Deletion API

This PHP script serves as an API endpoint to delete user data from a database table (`users`). It ensures authentication using a token-based system implemented in the `token.php` file.

### Usage

1. **Setup Database**: Ensure you have a MySQL database set up with a table named `users` containing user data.
2. **Token Authentication**: The script includes a token file (`token.php`) for authentication. Ensure this file is correctly configured to validate user tokens.
3. **Endpoint**: Access the API endpoint (`delete.php`) to delete user data. You need to send a POST request to this endpoint with the `id` parameter specifying the ID of the user to delete.

#### Request Parameters

- `id`: The ID of the user to delete from the database.

## Installation and Usage

1. Clone the repository to your local environment.
2. Set up your MySQL database by importing the provided `db.sql` file.
3. Place the PHP files (`token.php`, `index.php`, `delete.php`) in your PHP project directory.
4. Integrate the scripts into your API endpoints or application as needed.
5. Make requests to your API endpoints to retrieve user data or delete user records.

Feel free to customize and extend the functionality of the scripts according to your project requirements.
