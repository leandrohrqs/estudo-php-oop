<?php
// message, code, file, line
class Newsletter
{
    public function registerEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception("Invalid email!", 1);
        }
        else
        {
            echo "Email has been registered!";
        }
    }
}

$newsletter = new Newsletter();

try
{
    $newsletter->registerEmail('test..@');
}
catch (Exception $e)
{
    echo "Message: ".$e->getMessage() . "<br>";
    echo "Code: ".$e->getCode() . "<br>";
    echo "File: ".$e->getFile() . "<br>";
    echo "Line: ".$e->getLine() . "<br>";
}