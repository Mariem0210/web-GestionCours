<?php

class cours{
    private  int $idC ;
     public string $titre;
    public string $description ;
    public DateTime $date;
    public int $duree;
    public int $prix;
    

    public function _construct(int $idC , string $titre , string $description , DateTime $date, int $duree , int $prix  ) {
        $this->idC=$idC;
        $this->titre=$titre;
        $this->description=$description;
        $this->date=$date;
        $this->duree=$duree;
        $this->prix=$prix;
        
    }
    

    
    
    


    /**
     * Get the value of idC
     */ 
    public function getIdC()
    {
        return $this->idC;
    }

    /**
     * Set the value of idC
     *
     * @return  self
     */ 
    public function setIdC($idC)
    {
        $this->idC = $idC;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }


}

?>
