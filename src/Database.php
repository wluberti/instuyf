<?php


namespace Spuyt;

/**
 * Class Database
 *
 * Nameing scheme:
 *      User: person who logs into the website
 *      Player: a User that is going to play in a Game
 *      Game: Location, Date & Time a game
 */
class Database
{
    /** @var \PDO */
    private $dbconn;

    public function __construct(\PDO $pdo)
    {
        $this->dbconn = $pdo;
    }

    public function addUser(User $user)
    {

    }

    public function getUser(User $user)
    {

    }

    public function getAllUsers()
    {
        $result = $this->dbconn->query("SELECT * FROM instuyf_users");
        return $result->fetchAll();
    }

    public function searchUser(string $searchString)
    {
        $statement = $this->dbconn->prepare("SELECT * FROM instuyf_users WHERE displayname LIKE '%:searchString%' OR email LIKE '%:searchString%'");
        $statement->execute(['searchString' => $searchString]);

        return $statement->fetchAll();
    }
}
