<?php
class evalcours{


    private int $idEval;
    public string $emailEleve;
    public int $idC;
    public int $rate;

    public string $comment;

    public function _construct(int $idEval, string $emailEleve, int $idC, int $rate, string $comment){
        $this->idEval=$idEval;
        $this->emailEleve=$emailEleve;
        $this->idC=$idC;
        $this->rate=$rate;
        $this->comment=$comment;
    }


       /**
     * Get the value of idEval
     */ 
    public function getIdEval()
    {
        return $this->idEval;
    }

    /**
     * Set the value of idEval
     *
     * @return  self
     */ 
    public function setIdEval($idEval)
    {
        $this->idEval = $idEval;

        return $this;
    }
       /**
     * Get the value of emailEleve
     */ 
    public function getEmailEleve()
    {
        return $this->emailEleve;
    }

    /**
     * Set the value of emailEleve
     *
     * @return  self
     */ 
    public function setEmailEleve($emailEleve)
    {
        $this->emailEleve = $emailEleve;

        return $this;
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
     * Get the value of rate
     */ 
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @return  self
     */ 
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }
   

    /**
     * Get the value of comment
     */ 
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @return  self
     */ 
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

 
 

 

    

  
}