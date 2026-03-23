<?php
// ============ METHOD 1: define() ============
echo "=== Using define() ===<br>";

// Case-sensitive constant (default)
define("SITE_NAME", "My Awesome Website");
echo "Case-sensitive: " . SITE_NAME . "<br>";     // Works
// echo site_name; // Error! Not defined

// Case-insensitive constant (deprecated in PHP 8.0+)
define("GREETING", "Hello World!", true);  // true = case-insensitive
echo "Case-insensitive: " . GREETING . "<br>";   // Works
echo "Case-insensitive: " . greeting . "<br>";   // Also works (case-insensitive)

// define() with arrays (PHP 7+)
define("COLORS", ["Red", "Green", "Blue"]);
echo "Array constant: " . COLORS[0] . "<br>";


// ============ METHOD 2: const keyword ============
echo "<br>=== Using const ===<br>";

// const is always case-sensitive
const COMPANY_NAME = "Tech Solutions Inc.";
echo "const: " . COMPANY_NAME . "<br>";
// echo company_name; // Error! const is always case-sensitive

// const with arrays (PHP 5.6+)
const FRUITS = ["Apple", "Banana", "Orange"];
echo "Array constant: " . FRUITS[1] . "<br>";

// const inside classes
class MyClass {
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    
    public function showStatus() {
        echo "Active status: " . self::STATUS_ACTIVE . "<br>";
    }
}

echo "Class constant: " . MyClass::STATUS_ACTIVE . "<br>";


// ============ KEY DIFFERENCES DEMO ============
echo "<br>=== Key Differences ===<br>";

// 1. define() can be used conditionally
if (true) {
    define("CONDITIONAL_CONST", "This works");
}
echo CONDITIONAL_CONST . "<br>";

// const cannot be used conditionally (parse-time error)
// if (true) {
//     const BAD_CONST = "This won't work"; // Parse error!
// }

// 2. define() can be used in runtime
$constant_name = "DYNAMIC_CONST";
define($constant_name, "Dynamic value");
echo DYNAMIC_CONST . "<br>";

// const cannot be dynamic
// const $dynamic_name = "value"; // Error!

// 3. const works inside classes, define() doesn't
class Config {
    const VERSION = "1.0";
    // define("OUTSIDE", "value"); // Parse error - define() can't be used in class
}


// ============ PRACTICAL EXAMPLES ============
echo "<br>=== Practical Examples ===<br>";

// Database configuration with define()
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "myapp");

echo "Database: " . DB_NAME . "@" . DB_HOST . "<br>";

// Application configuration with const
class AppConfig {
    const APP_NAME = "My Application";
    const APP_VERSION = "2.0";
    const DEBUG_MODE = true;
    
    public static function getInfo() {
        return self::APP_NAME . " v" . self::APP_VERSION;
    }
}

echo AppConfig::getInfo() . "<br>";


// ============ CASE-INSENSITIVE WARNING ============
echo "<br>=== Case-Insensitive Note ===<br>";

// Case-insensitive constants are DEPRECATED in PHP 8.0+
// They still work but will throw a deprecation warning
if (defined("GREETING")) {
    echo "GREETING constant is defined<br>";
}

// Check if constant exists (case-sensitive)
if (defined("SITE_NAME")) {
    echo "SITE_NAME exists<br>";
}

// Check for case-insensitive constant (not straightforward)
if (defined("greeting")) {
    echo "greeting (lowercase) exists due to case-insensitive<br>";
}


// ============ BEST PRACTICE ============
echo "<br>=== Best Practice ===<br>";

// Always use UPPERCASE for constants
define("MAX_UPLOAD_SIZE", 5242880);  // 5MB in bytes
define("ALLOWED_EXTENSIONS", ["jpg", "png", "gif"]);

// Use const for class constants
class UserRoles {
    const ADMIN = "admin";
    const EDITOR = "editor";
    const VIEWER = "viewer";
}

echo "User role: " . UserRoles::ADMIN . "<br>";


// ============ CHECKING CONSTANTS ============
echo "<br>=== Checking Constants ===<br>";

// Check if constant is defined
if (!defined("API_KEY")) {
    define("API_KEY", "default-api-key-123");
}
echo "API_KEY: " . API_KEY . "<br>";

// Get all defined constants (partial list)
$constants = get_defined_constants(true);
echo "User-defined constants count: " . count($constants['user']) . "<br>";
?>