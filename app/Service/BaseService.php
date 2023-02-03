<?php


namespace App\Service;

use Hyperf\Di\Annotation\Inject;
use Hyperf\Logger\LoggerFactory;
use Psr\Log\LoggerInterface;
use Hyperf\Di\Container;

class BaseService
{
    /**
     * @var LoggerInterface
     */
    protected $log;
    #[Inject]
    /**
     * @var ContainerInterface
     */
    protected Container $container;

    public function __construct(LoggerFactory $logger)
    {
        $this->log = $logger->get("service", "default");
    }
}
