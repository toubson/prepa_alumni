<?php
namespace App\Entity;

use App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $login;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $noms;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $prenoms;

    
    /**
     * @ORM\Column(type="integer")
     */
    protected $telephone;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $email;

    
    /**
     * @ORM\Column(name="promo_prepa", type="integer")
     */
    protected $promoPrepa;

    /**
     * @ORM\Column(name="niveau_etude", type="integer")
     */
    protected $niveauEtude;
    
    
    /**
     * @ORM\Column(name="situation_actu", type="string", length=255)
     */
    protected  $situationActu;

    /**
     * @ORM\Column(name="intitule_poste", type="string", length=255)
     */
    protected  $intitulePoste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected  $entreprise;

    /**
     * @ORM\Column(name="derniere_ecole", type="string", length=255)
     */
    protected  $derniereEcole;

    /**
     * @ORM\Column(name="intitule_dernier_diplome", type="string", length=255)
     */
    protected  $intituleDernierDiplome;




    
   
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
     * Get user  key id
     *
     * @ORM\return integer
     */
    public function getId() 
    {
        return $this->id;
    }
    
    /**
     * Get Noms
     *
     * @ORM\return string
     */
    public function getNoms()
    {
        return $this->noms;
    }

    /**
     * Get Prenoms
     *
     * @ORM\return string
     */
    public function getPrenoms()
    {
        return $this->prenoms;
    }

    /**
     * Get Telephone
     *
     * @ORM\return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Get Email
     *
     * @ORM\return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get PromoPrepa
     *
     * @ORM\return integer
     */
    public function getPromoPrepa()
    {
        return $this->promoPrepa;
    }

    /**
     * Get NiveauEtude
     *
     * @ORM\return integer
     */
    public function getNiveauEtude()
    {
        return $this->niveauEtude;
    }

    /**
     * Get SituactionActu
     *
     * @ORM\return string
     */
    public function getSituationActu()
    {
        return $this->email;
    }

    /**
     * Get IntitulePoste
     *
     * @ORM\return string
     */
    public function getIntitulePoste()
    {
        return $this->intitulePoste;
    }

    /**
     * Get Entreprise
     *
     * @ORM\return string
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Get DerniereEcole
     *
     * @ORM\return string
     */
    public function getDerniereEcole()
    {
        return $this->derniereEcole;
    }

    /**
     * Get IntituleDernierDiplome
     *
     * @ORM\return string
     */
    public function getIntituleDernierDiplome()
    {
        return $this->intituleDernierDiplome;
    }









}