<?php

namespace AppBundle\Service;

use AppBundle\Entity\Base\EntityInterface;
use AppBundle\Entity\User\User;
use AppBundle\Manager\UserManager;
use AppBundle\Utils\AppHelper;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\PersistentCollection;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class EntityConverterService
{
    /**
     * @var User
     */
    private $currentUser;
    private $userManager;

    public function __construct(TokenStorageInterface $tokenStorage, UserManager $userManager)
    {
        $this->currentUser = AppHelper::getCurrentUser($tokenStorage);
        $this->userManager = $userManager;
    }

    public function getCollectionAsJson($collection)
    {
        return json_encode($this->getCollectionAsArray($collection));
    }

    public function getCollectionAsArray($collection)
    {
        $arr = [];

        foreach ($collection as $key => $value) {
            if (is_array($value)) {
                $arr[$key] = $this->getCollectionAsArray($value);
            } else {
                $arr[] = $this->getAsArray($value);
            }
        }

        return $arr;
    }

    public function getAsJson($entity, Array $additionalKeys = null, Array $ignoredKeys = null)
    {
        return json_encode($this->getAsArray($entity, $additionalKeys, $ignoredKeys));
    }

    public function getAsArray($entity, Array $additionalKeys = null, Array $ignoredKeys = null)
    {
        $arr = $this->getKeysAsArray($entity, $additionalKeys, $ignoredKeys);

        switch (true)
        {
            case $entity instanceof User:

                if (is_array($additionalKeys) && in_array('relation', $additionalKeys)) {
                    $arr['relation'] = $this->getAsArray($this->userManager->getRelation($this->currentUser, $entity));
                }

                break;
        }

        return $arr;
    }

    private function getKeysAsArray(EntityInterface $entity = null, Array $additionalKeys = null, Array $ignoredKeys = null)
    {
        if ($entity === null)
            return null;

        $arr = [];

        $keys = $additionalKeys ? array_merge($entity::getArrayKeys(), $additionalKeys) : $entity::getArrayKeys();

        if ($ignoredKeys)
        {
            $keys = array_diff($keys, $ignoredKeys);
        }

        foreach ($keys as $key)
        {
            switch ($key)
            {
                default:

                    $method = sprintf('get%s', ucfirst($key));

                    $value = method_exists($entity, $method) ?
                        $entity->{$method}(true) :
                        (method_exists($entity, $key) ? $entity->{$key}() : null);

                    switch (true)
                    {
                        case $value instanceof ArrayCollection:
                        case $value instanceof PersistentCollection:

                            $arr[$key] = $this->getCollectionAsArray($value);

                            break;

                        case $value instanceof EntityInterface:
                            
                            $arr[$key] = $this->getAsArray($value);

                            break;

                        case $value instanceof \DateTime:

                            $arr[$key] = $value->format('c');

                            break;

                        default:

                            $arr[$key] = $value;
                    }
            }
        }

        return $arr;
    }
}
