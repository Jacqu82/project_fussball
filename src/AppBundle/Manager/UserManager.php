<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Base\EntityInterface;
use AppBundle\Entity\User\User;
use AppBundle\Manager\Base\EntityManager;
//use AppBundle\Service\ImageService;
use AppBundle\Service\MailerService;
use AppBundle\Utils\EntityHelper;
use AppBundle\Utils\Helper;
//use Gregwar\Image\Image;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class UserManager extends EntityManager
{
    const Secret = 'clajIa44iuyoatriestiawrlu6h7at2lwIu07ErLAsoEth2eglejIUTroaPhlaph';

    protected $namespace = 'User\\';
    protected $entityName = 'User';

    /**
     * @var EncoderFactoryInterface
     */
    private $encoderFactory;
    /**
     * @var MailerService
     */
    private $mailer;

//    /**
//     * @var ImageService
//     */
//    private $imageService;

    /**
     * @required
     * @param EncoderFactoryInterface $encoderFactory
     * @param MailerService $mailerService
     */
    public function inject(EncoderFactoryInterface $encoderFactory, MailerService $mailerService)
    {
        $this->encoderFactory = $encoderFactory;
        $this->mailer = $mailerService;
//        $this->imageService = $imageService;
    }

    /**
     * @inheritdoc
     */
    public function getCurrentUser()
    {
        return parent::getCurrentUser();
    }

//    public function getUserById($id)
//    {
//        return $this->repository->find($id);
//    }

    public function getAllUsersByName()
    {
        return $this->repository->findBy(array(), array('username' => 'ASC'));
    }

    public function editUser(User $user)
    {
        $this->em->persist($user);
        $this->em->flush();
    }

    public function deleteUser(User $user)
    {
        $this->em->remove($user);
        $this->em->flush();
    }

    /**
     * Update user last update date information
     *
     * @param User $user
     */
    public function updateLastUpdateDate(User $user)
    {
        $user->updateLastUpdateAt();
        $this->save($user);
    }

//    /**
//     * Change  password for the user
//     *
//     * @param User $user
//     * @param string $password
//     *
//     * @return void
//     */
//    public function changePassword(User $user, $password)
//    {
//        $password = $this->getEncodedPassword($user, $password);
//
//        $user->setPassword($password);
//        $this->save($user);
//    }
//
//    /**
//     * Change email of the user
//     *
//     * @param User $user
//     * @param string $email
//     * $param string $token
//     *
//     * @return boolean
//     */
//    public function changeEmail(User $user, $email, $token)
//    {
//        if ($email === $user->getEmail())
//            return false;
//
//        if ($this->getUserToken($user, 'email', $email) == $token)
//        {
//            $user->setEmail($email);
//            $this->save($user);
//
//            return true;
//        }
//
//        return false;
//    }

//    /**
//     * Send email activation message
//     *
//     * @param User $user
//     *
//     * @return void
//     */
//    public function sendEmailActivationMessage(User $user, $email)
//    {
//        $token = $this->getUserToken($user, 'email', $email);
//
//        $this->mailer->sendEmailActivationMessage($user, $email, $token);
//    }

    /**
     * Check email activation token and enable user
     *
     * @param User $user
     * @param string $token
     * @param boolean $admin
     *
     * @return boolean
     */
    public function activate(User $user, $token, $admin = false)
    {
        if ($token != $this->getUserToken($user, 'account') && !$admin)
            return false;

        $user->enable();
        $this->save($user);

        return true;
    }

    /**
     * Create new user account and send activation email
     *
     * @param User $user
     */
    public function create(User $user)
    {
        $password = $user->getPassword();
        $user->setPassword(0);
        $this->save($user);

        $user->setPassword($this->getEncodedPassword($user, $password));
        $this->save($user);

        $this->mailer->sendRegisterMessage($user, $password, $this->getUserToken($user, 'account'));
    }

    /**
     * Recovery access for the user account
     *
     * @param User $user
     * @param string $token
     *
     * @return boolean
     */
    public function recovery(User $user, $token)
    {
        if ($token != $this->getUserToken($user, 'password'))
            return false;

        $password = Helper::getRandomToken(12);

        $user->setPassword($this->getEncodedPassword($user, $password));

        $this->save($user);

        $this->mailer->sendRecoveryPasswordMessage($user, $password);

        return true;
    }

    /**
     * Send recovery message to the user
     *
     * @param User $user
     *
     * @return void
     */
    public function sendRecoveryMessage(User $user)
    {
        $token = $this->getUserToken($user, 'password');

        $this->mailer->sendRecoveryMessage($user, $token);
    }

    /**
     * Get token of the user for the activate action
     *
     * @param User $user
     * @param string $type
     * @param string|null $value
     *
     * @return string
     */
    protected function getUserToken(User $user, $type, $value = null)
    {
        switch($type)
        {
            case 'account':

                return substr(sha1(sprintf('%d:account:%s', $user->getId(), self::Secret)), 5, 20);

            case 'password':

                return substr(sha1(sprintf('%d:password:%s', $user->getId(), $user->getPassword(), self::Secret)), 4, 20);

            case 'email':

                return substr(sha1(sprintf('%d:email:%s', $user->getId(), $value, self::Secret)), 3, 20);
        }

        return new \InvalidArgumentException();
    }

    /**
     * Get encoded version of user plain password
     *
     * @param User $user
     * @param string $password
     *
     * @return string
     */
    private function getEncodedPassword(User $user, $password)
    {
        $encoder = $this->encoderFactory->getEncoder($user);

        return $encoder->encodePassword($password, $user->getSalt());
    }

    /**
     * Get filtered users list query
     *
     * @param array $params
     * @return mixed
     */
    public function getByParamsQuery($params = [])
    {
        $this->repository->setCurrentUser($this->getCurrentUser());

        return $this->repository->findByParamsQuery($params);
    }
    
    /**
     * Get filtered users list
     *
     * @param array $params
     * @return mixed
     */
    public function getByParams($params = [])
    {
        return $this->repository->findByParamsQuery($params)->getArrayResult();
    }

    /**
     * @inheritdoc
     *
     * Optionally upload and save avatar/logo
     *
     * @param EntityInterface $user
     * @param null $avatar
     * @param null $logo
     */
    public function save(EntityInterface $user, $avatar = null, $logo = null)
    {
        parent::save($user);

        if ($logo !== null) {
            $logo->move(EntityHelper::getUserDirectory($user, false), 'logo.png');
            $this->imageService->makeDimensionsAndUpload($user,
                new Image(sprintf('%s/logo.png', EntityHelper::getUserDirectory($user, false))),
                'logo');
        }

        if ($avatar !== null) {
            $avatar->move(EntityHelper::getUserDirectory($user, false), 'avatar.png');
            $this->imageService->makeDimensionsAndUpload($user,
                new Image(sprintf('%s/avatar.png', EntityHelper::getUserDirectory($user, false))),
                'avatar');
        }
    }
}
