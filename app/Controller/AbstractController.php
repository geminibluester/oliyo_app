<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use App\Handle\Response;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Di\Container;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\Logger\LoggerFactory;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

abstract class AbstractController
{
    /**
     * @Inject()
     * @var ContainerInterface
     */
    protected Container $container;

    /**
     * @Inject()
     * @var RequestInterfaces
     */
    protected RequestInterface $request;

    /**
     * @Inject()
     * @var Response
     */
    protected Response $response;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected LoggerInterface $logger;

    public function __construct(LoggerFactory $logger)
    {
        $this->logger = $logger->get('controller', 'default');
    }
}
