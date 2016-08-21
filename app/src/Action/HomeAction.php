<?php
namespace App\Action;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class HomeAction
{
    private $_view;
    private $_logger;
    
    public function __construct(Twig $view, LoggerInterface $logger)
    {
        $this->_view = $view;
        $this->_logger = $logger;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $this->_logger->info("Home page action dispatched");
        
        $this->_view->render($response, 'home.twig');
        return $response;
    }
}
