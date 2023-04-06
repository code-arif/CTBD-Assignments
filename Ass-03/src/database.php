<?php
class database
{
    public $conn;
    public function __construct()
    {
        // Database connection settings
        $host = "localhost"; //database host (usually localhost)
        $dbname = "first_project"; //database name
        $username = "root"; //database username
        $password = ""; //database password

        // Create a PDO instance
        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Database connection successful!";
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
        }
    }

    public function exec($sql)
    {
        $statement = $this->conn->prepare($sql);
        $statement->execute();
    }

    public function fetch($sql)
    {
        $statement = $this->conn->prepare($sql);
        $statement->execute();

        return $statement->fetchAll();
    }
}
?>
