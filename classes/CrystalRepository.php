<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CrystalRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create($name, $zodiac, $chakra)
    {
        $sql = "INSERT INTO `crystals` (name, zodiac, chakra)
                VALUES ('$name', '$zodiac', '$chakra')";
        $this->databaseManager->database->query($sql);
    }

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {

        $sql = "SELECT * FROM `crystals`";
        $result = $this->databaseManager -> database -> query($sql);

        return $result;

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->database-> (runYourQueryHere)
    }

    public function update(int $id, string $name, string $zodiac, string $chakra)
    {
        $sql="UPDATE `crystals` 
                SET name='$name', zodiac='$zodiac', chakra='$chakra'
                WHERE id= '$id'";
        $this->databaseManager->database->query($sql);
    }

    public function delete(int $id)
    {
        $sql="DELETE FROM `crystals` WHERE id='$id'";
        $this->databaseManager->database->query($sql);
    }


}