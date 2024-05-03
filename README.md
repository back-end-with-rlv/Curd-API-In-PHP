# Curd Api in php for beginners

# Token Authentication PHP Script
This PHP script provides token-based authentication for user access to an API. It verifies the validity of the provided token against a database table (api_token). The script checks whether the token exists, is active, and then allows or denies access accordingly.

Usage
Setup Database: Ensure you have a MySQL database set up. Import the provided db.sql file to create the necessary api_token table.
Include Script: Place the token.php file in your PHP project directory.
Integration: Integrate this script into your API or application authentication process. Make sure to include it at the beginning of your API endpoints or wherever authentication is required.
Token Verification: When making requests to your API, include the token parameter in the URL. Example: http://example.com/api/endpoint?token=YOUR_TOKEN.
Response Codes
1: No token provided.
2: Invalid token provided.
3: Token is deactivated.
