<?php

namespace Sonic\Models;

use Sonic\Utils\Database;

class Type extends CoreModel
{
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
}