<?php
function verif_mail($mail)
{
    global $connection;

    try
    {
        $query = $connection->prepare('SELECT COUNT(*) 
                                        FROM Bp_users 
                                        WHERE email=:email');

        $query->bindValue(':email', $mail['email'], PDO::PARAM_STR);

        $query->execute();
        
        if($query->fetchColumn() == 1) {
            return false;
        }else{
            return true;
        }
    }
    catch(Exception $e)
    {
        return false;
    }
}