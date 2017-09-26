<?php

namespace AppBundle\Entity;

/**
 * Colocation
 */
class Colocation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var int
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
     * Get id
     *
     * @return int
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
     * @return int
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
     * @var integer
     */
    private $nombrePersonnes;

    /**
     * @var string
     */
    private $dateCreation;

    /**
     * @var integer
     */
    private $jardin;

    /**
     * @var integer
     */
    private $ressource;

    /**
     * @var integer
     */
    private $consommation;

    /**
     * @var integer
     */
    private $alimentation;

    /**
     * @var integer
     */
    private $espace;

    /**
     * @var integer
     */
    private $communauté;

    /**
     * @var integer
     */
    private $quartier;

    /**
     * @var integer
     */
    private $art;

    /**
     * @var integer
     */
    private $education;


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
     * Set jardin
     *
     * @param integer $jardin
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
     * @return integer
     */
    public function getJardin()
    {
        return $this->jardin;
    }

    /**
     * Set ressource
     *
     * @param integer $ressource
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
     * @return integer
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * Set consommation
     *
     * @param integer $consommation
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
     * @return integer
     */
    public function getConsommation()
    {
        return $this->consommation;
    }

    /**
     * Set alimentation
     *
     * @param integer $alimentation
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
     * @return integer
     */
    public function getAlimentation()
    {
        return $this->alimentation;
    }

    /**
     * Set espace
     *
     * @param integer $espace
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
     * @return integer
     */
    public function getEspace()
    {
        return $this->espace;
    }

    /**
     * Set communauté
     *
     * @param integer $communauté
     *
     * @return Colocation
     */
    public function setCommunauté($communauté)
    {
        $this->communauté = $communauté;

        return $this;
    }

    /**
     * Get communauté
     *
     * @return integer
     */
    public function getCommunauté()
    {
        return $this->communauté;
    }

    /**
     * Set quartier
     *
     * @param integer $quartier
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
     * @return integer
     */
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * Set art
     *
     * @param integer $art
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
     * @return integer
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Set education
     *
     * @param integer $education
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
     * @return integer
     */
    public function getEducation()
    {
        return $this->education;
    }
    /**
     * @var integer
     */
    private $communaute;


    /**
     * Set communaute
     *
     * @param integer $communaute
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
     * @return integer
     */
    public function getCommunaute()
    {
        return $this->communaute;
    }
}
