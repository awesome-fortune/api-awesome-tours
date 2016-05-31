<?php

namespace UserBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use UserBundle\Entity\User;

class UserRepository extends EntityRepository implements UserLoaderInterface
{
    /**
     * @return User
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findAny()
    {
        return $this->createQueryBuilder('user')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
    
    /**
     * @param $email
     * @return User
     */
    public function findUserByEmail($email) 
    {
        return $this->findOneBy(array(
            'email' => $email
        ));
    }
    
    /**
     * @param $username
     * @return User
     */
    public function findUserByUsername($username) 
    {
        return $this->findOneBy(array(
            'username' => $username
        ));        
    }
    
    /**
     * Loads the user for the given username.
     *
     * This method must return null if the user is not found.
     *
     * @param string $username The username
     *
     * @return UserInterface|null
     */
    public function loadUserByUsername($username)
    {
        $user = $this->findUserByUsername($username);
        
        // allow login by email too
        if(!$user) {
            throw new UsernameNotFoundException(sprintf('Email "%s" does not exist. ', $username));
        }
        
        return $user;
    }
}
