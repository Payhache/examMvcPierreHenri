<?php

class Car {

    private $marque;
    private $modele;
    private $energy;
    private $isAuto;
    private $picture;
    private $id;

    public function __construct($marque, $modele, $energy, $isAuto, $picture, $id=null)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->energy = $energy;
        $this->isAuto = $isAuto;
        $this->picture = $picture;
        $this->id = $id;
    }



    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of modele
     */ 
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get the value of energy
     */ 
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Set the value of energy
     *
     * @return  self
     */ 
    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }

    /**
     * Get the value of isAuto
     */ 
    public function getIsAuto()
    {
        return $this->isAuto;
    }

    /**
     * Set the value of isAuto
     *
     * @return  self
     */ 
    public function setIsAuto($isAuto)
    {
        $this->isAuto = $isAuto;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}