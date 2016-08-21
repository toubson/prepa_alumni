<?php
namespace App\Entity;

use App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Contrats")
 */
class Contrat
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=16)
     */
    protected $numeroContrat;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $versionContrat;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $idContrat;

    
    /**
     * @ORM\Column(type="integer")
     */
    protected $coclico;
    
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected  $raisonSociale;
    
   
    /**
     * Get array copy of object
     *
     * @return array
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
    
    
    /**
     * Get contrat  key id
     *
     * @ORM\return integer
     */
    public function getId() 
    {
        
        return $this->id;
    }
    
    /**
     * Get NumeroContrat
     *
     * @ORM\return string
     */
    public function getNumeroContrat() 
    {
        return $this->numeroContrat;
    }	
    
    
    /**
     * Get versionContrat
     *
     * @ORM\return integer
     */
    public function getVersionContrat() 
    {
        return $this->versionContrat; 
    }
    
    /**
     * Get idContrat
     *
     * @ORM\return string
     */
    public function getIdContrat() 
    {
        return $this->idContrat;
    }
    
    /**
     * Get Coclico
     *
     * @ORM\return integer
     */
    public function getCoclico() 
    {

        return $this->coclico;
    }
    
    /**
     * Get RaisonSociale
     *
     * @ORM\return string
     */
    public function getRaisonSociale() 
    {

        return $this->raisonSociale;
    }
    
    
   
    
    
    
    
    
}