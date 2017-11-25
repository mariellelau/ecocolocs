<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Colocation
 */
class Colocation
{
    public function __toString()
    {
        return $this->photo;
    }

    /**
     * @var file
     */
    public $file;

    protected function getUploadDir()
    {
        return 'images';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/uploads/'.$this->getUploadDir();
    }

    public function getWebPath()
    {
        return null === $this->photo ? null : $this->getUploadDir().'/'.$this->photo;
    }

    public function getAbsolutePath()
    {
        return null === $this->photo ? null : $this->getUploadRootDir().'/'.$this->photo;
    }


    /**
     * @ORM\PrePersist
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // "uniquid()" permet de créer une id de manière aléatoire
            // Récupère l'extension du fichier
            $this->url = uniqid().'.'.$this->file->guessExtension();
        }
    }


    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }
// If there is an error when moving the file, an exception will
// be automatically thrown by move(). This will properly prevent
// the entity from being persisted to the database on error
        $this->file->move($this->getUploadRootDir(), $this->photo);

        unset($this->file);
    }


    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $nombrePersonnes;

    /**
     * @var string
     */
    private $dateCreation;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $jardin;

    /**
     * @var boolean
     */
    private $ressource;

    /**
     * @var boolean
     */
    private $consommation;

    /**
     * @var boolean
     */
    private $alimentation;

    /**
     * @var boolean
     */
    private $espace;

    /**
     * @var boolean
     */
    private $communaute;

    /**
     * @var boolean
     */
    private $quartier;

    /**
     * @var boolean
     */
    private $art;

    /**
     * @var boolean
     */
    private $education;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var integer
     */
    private $codePostal;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $longitude;

    /**
     * @var string
     */
    private $latitude;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var string
     */
    private $site;

    /**
     * @var string
     */
    private $facebook;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Colocation
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nombrePersonnes
     *
     * @param integer $nombrePersonnes
     *
     * @return Colocation
     */
    public function setNombrePersonnes($nombrePersonnes)
    {
        $this->nombrePersonnes = $nombrePersonnes;

        return $this;
    }

    /**
     * Get nombrePersonnes
     *
     * @return integer
     */
    public function getNombrePersonnes()
    {
        return $this->nombrePersonnes;
    }

    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     *
     * @return Colocation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Colocation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set jardin
     *
     * @param boolean $jardin
     *
     * @return Colocation
     */
    public function setJardin($jardin)
    {
        $this->jardin = $jardin;

        return $this;
    }

    /**
     * Get jardin
     *
     * @return boolean
     */
    public function getJardin()
    {
        return $this->jardin;
    }

    /**
     * Set ressource
     *
     * @param boolean $ressource
     *
     * @return Colocation
     */
    public function setRessource($ressource)
    {
        $this->ressource = $ressource;

        return $this;
    }

    /**
     * Get ressource
     *
     * @return boolean
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * Set consommation
     *
     * @param boolean $consommation
     *
     * @return Colocation
     */
    public function setConsommation($consommation)
    {
        $this->consommation = $consommation;

        return $this;
    }

    /**
     * Get consommation
     *
     * @return boolean
     */
    public function getConsommation()
    {
        return $this->consommation;
    }

    /**
     * Set alimentation
     *
     * @param boolean $alimentation
     *
     * @return Colocation
     */
    public function setAlimentation($alimentation)
    {
        $this->alimentation = $alimentation;

        return $this;
    }

    /**
     * Get alimentation
     *
     * @return boolean
     */
    public function getAlimentation()
    {
        return $this->alimentation;
    }

    /**
     * Set espace
     *
     * @param boolean $espace
     *
     * @return Colocation
     */
    public function setEspace($espace)
    {
        $this->espace = $espace;

        return $this;
    }

    /**
     * Get espace
     *
     * @return boolean
     */
    public function getEspace()
    {
        return $this->espace;
    }

    /**
     * Set communaute
     *
     * @param boolean $communaute
     *
     * @return Colocation
     */
    public function setCommunaute($communaute)
    {
        $this->communaute = $communaute;

        return $this;
    }

    /**
     * Get communaute
     *
     * @return boolean
     */
    public function getCommunaute()
    {
        return $this->communaute;
    }

    /**
     * Set quartier
     *
     * @param boolean $quartier
     *
     * @return Colocation
     */
    public function setQuartier($quartier)
    {
        $this->quartier = $quartier;

        return $this;
    }

    /**
     * Get quartier
     *
     * @return boolean
     */
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * Set art
     *
     * @param boolean $art
     *
     * @return Colocation
     */
    public function setArt($art)
    {
        $this->art = $art;

        return $this;
    }

    /**
     * Get art
     *
     * @return boolean
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Set education
     *
     * @param boolean $education
     *
     * @return Colocation
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return boolean
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Colocation
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Colocation
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Colocation
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Colocation
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Colocation
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Colocation
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Colocation
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Colocation
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Colocation
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }
}
