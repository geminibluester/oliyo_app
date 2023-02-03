<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Exception\Handler;

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\ExceptionHandler\ExceptionHandler;
use Hyperf\HttpMessage\Stream\SwooleStream;
use Psr\Http\Message\ResponseInterface;
use Hyperf\Validation\ValidationException;
use Throwable;

class AppExceptionHandler extends ExceptionHandler
{
    public function __construct(protected StdoutLoggerInterface $logger)
    {
    }

    public function handle(Throwable $throwable, ResponseInterface $response)
    {
        $this->logger->error(sprintf('%s[%s] in %s', $throwable->getMessage(), $throwable->getLine(), $throwable->getFile()));
        $this->logger->error($throwable->getTraceAsString());
        // $this->stopPropagation();
        $data = [
            'code'=>$throwable->getCode(),
            'msg'=>$throwable->getMessage(),
            'body'=>null
        ];
        if($throwable instanceof ValidationException ) {
            $data['body'] = $throwable->validator->errors()->all();
        }
        return $response->withHeader('Server', 'Oliyo_App')
        ->withAddedHeader('content-type', 'application/json;')
        ->withStatus(500)
        ->withBody(new SwooleStream(json_encode($data,JSON_UNESCAPED_UNICODE)));
    }

    public function isValid(Throwable $throwable): bool
    {
        return true;
    }
}
