<?php

namespace App\Resource;

use App\AbstractResource;

/**
 * Class Resource
 * @package App
 */
class UserResource extends AbstractResource
{
    /**
     * @param string|null $slug
     *
     * @return array
     */
    public function get($criterias = null)
    {
        if ($criterias === null) {
            $users = $this->entityManager->getRepository('App\Entity\User')->findAll();
            $users = array_map(
                function ($user) {
                    return $user->getArrayCopy();
                },
                $users
            );

            return $users;
        } 
        
        if( $criterias != null) {
        	
        	$user = $this->entityManager->getRepository('App\Entity\User')->findOneBy(
        			$criterias);
        	if ($user) {
        		return $user->getArrayCopy();
        	}
        	
        }
        return false;
    }
}