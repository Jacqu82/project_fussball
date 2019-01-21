<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Club extends \AppBundle\Entity\Club implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'players', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'emblem', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'content', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'colours', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'address', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'page', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'stadium', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'capacity', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'chairman', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'coach', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'longitude', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'latitude'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'players', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'emblem', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'content', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'colours', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'address', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'page', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'stadium', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'capacity', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'chairman', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'coach', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'longitude', '' . "\0" . 'AppBundle\\Entity\\Club' . "\0" . 'latitude'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Club $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmblem($emblem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmblem', [$emblem]);

        return parent::setEmblem($emblem);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmblem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmblem', []);

        return parent::getEmblem();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', []);

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setColours($colours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColours', [$colours]);

        return parent::setColours($colours);
    }

    /**
     * {@inheritDoc}
     */
    public function getColours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColours', []);

        return parent::getColours();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setPage($page)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPage', [$page]);

        return parent::setPage($page);
    }

    /**
     * {@inheritDoc}
     */
    public function getPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPage', []);

        return parent::getPage();
    }

    /**
     * {@inheritDoc}
     */
    public function setStadium($stadium)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStadium', [$stadium]);

        return parent::setStadium($stadium);
    }

    /**
     * {@inheritDoc}
     */
    public function getStadium()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStadium', []);

        return parent::getStadium();
    }

    /**
     * {@inheritDoc}
     */
    public function setCapacity($capacity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCapacity', [$capacity]);

        return parent::setCapacity($capacity);
    }

    /**
     * {@inheritDoc}
     */
    public function getCapacity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCapacity', []);

        return parent::getCapacity();
    }

    /**
     * {@inheritDoc}
     */
    public function setChairman($chairman)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChairman', [$chairman]);

        return parent::setChairman($chairman);
    }

    /**
     * {@inheritDoc}
     */
    public function getChairman()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChairman', []);

        return parent::getChairman();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoach($coach)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoach', [$coach]);

        return parent::setCoach($coach);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoach()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoach', []);

        return parent::getCoach();
    }

    /**
     * {@inheritDoc}
     */
    public function addPlayer(\AppBundle\Entity\Player $player)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPlayer', [$player]);

        return parent::addPlayer($player);
    }

    /**
     * {@inheritDoc}
     */
    public function removePlayer(\AppBundle\Entity\Player $player)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePlayer', [$player]);

        return parent::removePlayer($player);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayers', []);

        return parent::getPlayers();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude($longitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude($latitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

}
