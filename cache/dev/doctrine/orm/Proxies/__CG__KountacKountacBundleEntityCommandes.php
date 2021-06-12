<?php

namespace Proxies\__CG__\Kountac\KountacBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Commandes extends \Kountac\KountacBundle\Entity\Commandes implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'id', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'image', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'utilisateur', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'marque', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'categorie', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'produit', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'intitule', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'mesures', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'contenu', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'prixCommande', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'date', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'dateacceptation', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'dateachat', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'datelivraison', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'acheter', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'terminer', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'envoyer', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'livrer'];
        }

        return ['__isInitialized__', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'id', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'image', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'utilisateur', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'marque', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'categorie', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'produit', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'intitule', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'mesures', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'contenu', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'prixCommande', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'date', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'dateacceptation', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'dateachat', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'datelivraison', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'acheter', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'terminer', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'envoyer', '' . "\0" . 'Kountac\\KountacBundle\\Entity\\Commandes' . "\0" . 'livrer'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Commandes $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenu($contenu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenu', [$contenu]);

        return parent::setContenu($contenu);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenu', []);

        return parent::getContenu();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setTerminer($terminer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTerminer', [$terminer]);

        return parent::setTerminer($terminer);
    }

    /**
     * {@inheritDoc}
     */
    public function getTerminer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTerminer', []);

        return parent::getTerminer();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntitule($intitule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntitule', [$intitule]);

        return parent::setIntitule($intitule);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntitule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntitule', []);

        return parent::getIntitule();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtilisateur(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtilisateur', [$utilisateur]);

        return parent::setUtilisateur($utilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtilisateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtilisateur', []);

        return parent::getUtilisateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarque(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $marque = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarque', [$marque]);

        return parent::setMarque($marque);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarque()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarque', []);

        return parent::getMarque();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie(\Kountac\KountacBundle\Entity\Categories $categorie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', [$categorie]);

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', []);

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setMesures($mesures)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMesures', [$mesures]);

        return parent::setMesures($mesures);
    }

    /**
     * {@inheritDoc}
     */
    public function getMesures()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMesures', []);

        return parent::getMesures();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixCommande($prixCommande)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixCommande', [$prixCommande]);

        return parent::setPrixCommande($prixCommande);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixCommande()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixCommande', []);

        return parent::getPrixCommande();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateacceptation($dateacceptation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateacceptation', [$dateacceptation]);

        return parent::setDateacceptation($dateacceptation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateacceptation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateacceptation', []);

        return parent::getDateacceptation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatelivraison($datelivraison)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatelivraison', [$datelivraison]);

        return parent::setDatelivraison($datelivraison);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatelivraison()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatelivraison', []);

        return parent::getDatelivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function setLivrer($livrer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLivrer', [$livrer]);

        return parent::setLivrer($livrer);
    }

    /**
     * {@inheritDoc}
     */
    public function getLivrer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLivrer', []);

        return parent::getLivrer();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnvoyer($envoyer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnvoyer', [$envoyer]);

        return parent::setEnvoyer($envoyer);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnvoyer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnvoyer', []);

        return parent::getEnvoyer();
    }

    /**
     * {@inheritDoc}
     */
    public function setProduit(\Kountac\KountacBundle\Entity\Produits_2 $produit = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProduit', [$produit]);

        return parent::setProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduit', []);

        return parent::getProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\Kountac\KountacBundle\Entity\Media_motif $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setAcheter($acheter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcheter', [$acheter]);

        return parent::setAcheter($acheter);
    }

    /**
     * {@inheritDoc}
     */
    public function getAcheter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcheter', []);

        return parent::getAcheter();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateachat($dateachat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateachat', [$dateachat]);

        return parent::setDateachat($dateachat);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateachat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateachat', []);

        return parent::getDateachat();
    }

}
