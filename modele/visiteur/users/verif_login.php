<?php
function verif_login($login)
{
    global $connection;

    try
    {
        $query = $connection->prepare('SELECT COUNT(*) 
                                        FROM Bp_users 
                                        WHERE login=:login');

        $query->bindValue(':login', $login['login'], PDO::PARAM_STR);

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