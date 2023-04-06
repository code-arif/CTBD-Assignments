<?php

include 'database.php';
class user extends database
{

    ///ragistraton process
    public function ragister($username, $email, $password)
    {
        $sql = "INSERT INTO users_info(username, email, password)
        VALUES ('$username', '$email', '$password')";
        $this->exec($sql);

    }

    ///after ragistration user check process
    public function checkPriviousUser($username, $email)
    {
        $sql = "SELECT * FROM users_info WHERE username = '$username' OR email ='$email'";
        return $this->fetch($sql);
    }

    ///login process
    public function checkOneUser($username, $password)
    {
        $password = md5($password);
        $sql = "SELECT * FROM users_info WHERE username = '$username' AND password ='$password'";
        return $this->fetch($sql);
    }


}

?>