<?php

namespace App\Action;

use App\Resource\ContratResource;
use Slim\Views\Twig;
use Psr\Log\LoggerInterface;

final class ContratAction
{
    private $_contratResource;
    private $_view;
    private $_logger;
    /**
     * Constructeur de la classe 
     * 
     * @param ContratResource $contratResource
     * @param Twig $view
     * @param LoggerInterface $logger
     * 
     * @return nothing 
     */
    public function __construct(
            ContratResource $contratResource, 
            Twig $view, 
            LoggerInterface $logger) 
    {
        $this->_contratResource = $contratResource;
        $this->_view = $view;
        $this->_logger = $logger;
    }
    
    
    public function fetch($request, $response, $args) 
    {
        $contrats = $this->_contratResource->get();
        
        $data ['contrats'] = $contrats;
        
        $this->_view->render($response, 'contrats.twig', $data);
        return $response;
    }
    public function fetchOne($request, $response, $args) 
    {
        $criterias = $args ['criterias'];
        
        $contrat = $this->_contratResource->get(criterias);
        if ($contrat) {
            return $response->withJSON($contrat);
        }
        return $response->withStatus(
            404,
            'Aucun contrat trouvé avec ces critères'
        );
    }
}