<?php

namespace App\Action;

use App\Resource\UserResource;
use Slim\Views\Twig;
use Psr\Log\LoggerInterface;

final class UserAction
{
    private $_userResource;
    private $_view;
    private $_logger;
    /**
     * Constructeur de la classe 
     * 
     * @param UserResource $userResource
     * @param Twig $view
     * @param LoggerInterface $logger
     * 
     * @return nothing 
     */
    public function __construct(
            UserResource $userResource,
            Twig $view, 
            LoggerInterface $logger) 
    {
        $this->_userResource = $userResource;
        $this->_view = $view;
        $this->_logger = $logger;
    }
    
    
    public function fetch($request, $response, $args) 
    {
        $users = $this->_userResource->get();
        
        $data ['users'] = $users;
        
        $this->_view->render($response, 'users.twig', $data);
        return $response;
    }
    public function fetchOne($request, $response, $args) 
    {
        $criterias = $args ['criterias'];
        
        $user = $this->_userResource->get(criterias);
        if ($user) {
            return $response->withJSON($user);
        }
        return $response->withStatus(
            404,
            'Aucun user trouvé avec ces critères'
        );
    }
}