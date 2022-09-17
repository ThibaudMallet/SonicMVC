<?php

namespace Sonic\Models;

use Sonic\Utils\Database;

class Character extends CoreModel
{
    /**
     * description of the character
     *
     * @var string
     */
    protected $description;
    /**
     * picture of the character
     *
     * @var string
     */
    protected $picture;
    /**
     * type_id of the character
     *
     * @var int
     */
    protected $type_id;

    /**
     * Get type_id of the character
     *
     * @return  int
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set type_id of the character
     *
     * @param  int  $type_id  type_id of the character
     *
     * @return  self
     */ 
    public function setType_id(int $type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Get picture of the character
     *
     * @return  string
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set picture of the character
     *
     * @param  string  $picture  picture of the character
     *
     * @return  self
     */ 
    public function setPicture(string $picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get description of the character
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description of the character
     *
     * @param  string  $description  description of the character
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }
        /**
     * Set iD of the type
     *
     * @param  int  $id  ID of the type
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set name og the type
     *
     * @param  string  $name  name og the type
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set creation date
     *
     * @param  string  $created_at  Creation date
     *
     * @return  self
     */ 
    public function setCreated_at(string $created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Set update date
     *
     * @param  string  $updated_at  Update date
     *
     * @return  self
     */ 
    public function setUpdated_at(string $updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
    public function findAll()
    {
        $sql = '
        SELECT character.name, character.picture, character.description, type.name as type_id
        FROM `character`
        INNER JOIN type
        ON character.type_id = type.id
        ORDER BY character.name ASC;
        ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, '\Sonic\Models\Character');

        return $results;
    }
}