<?php

namespace App\Resource;

use App\AbstractResource;

/**
 * Class Resource
 * @package App
 */
class ContratResource extends AbstractResource
{
    /**
     * @param string|null $slug
     *
     * @return array
     */
    public function get($criterias = null)
    {
        if ($criterias === null) {
            $contrats = $this->entityManager->getRepository('App\Entity\Contrat')->findAll();
            $contrats = array_map(
                function ($contrat) {
                    return $contrat->getArrayCopy();
                },
                $contrats
            );

            return $contrats;
        } 
        
        if( $criterias != null) {
        	
        	$contrat = $this->entityManager->getRepository('App\Entity\Contrat')->findOneBy(
        			$criterias);
        	if ($contrat) {
        		return $contrat->getArrayCopy();
        	}
        	
        }
        return false;
    }
}