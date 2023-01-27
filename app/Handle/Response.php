<?php


namespace App\Handle;


use App\Constants\StatusCode;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpMessage\Cookie\Cookie;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\Utils\Context;
use Psr\Http\Message\ResponseInterface as PsrResponseInterface;
use Swoole\Server;

class Response implements ResponseInterface
{
    /**
     * @Inject
     * @var ResponseInterface
     */

    protected ResponseInterface $response;
    /**
     * @inheritDoc
     */
    public function json($data): PsrResponseInterface
    {
        // TODO: Implement json() method.
    }
    /**
     * Chunked transfer encoding.
     */
    public function write(string $data): bool
    {
    }
    /**
     * @inheritDoc
     */
    public function xml($data, string $root = 'root'): PsrResponseInterface
    {
        // TODO: Implement xml() method.
    }

    /**
     * @inheritDoc
     */
    public function raw($data): PsrResponseInterface
    {
        // TODO: Implement raw() method.
    }

    /**
     * @inheritDoc
     */
    public function redirect(string $toUrl, int $status = 302, string $schema = 'http'): PsrResponseInterface
    {
        // TODO: Implement redirect() method.
    }

    /**
     * @inheritDoc
     */
    public function download(string $file, string $name = ''): PsrResponseInterface
    {
        // TODO: Implement download() method.
    }

    /**
     * @inheritDoc
     */
    public function withCookie(Cookie $cookie): ResponseInterface
    {
        // TODO: Implement withCookie() method.
    }

    /**
     * @param array|oject $data
     * @param string|null $msg
     * @return PsrResponseInterface
     */
    public function success($data, string $msg = null): PsrResponseInterface
    {
        $msg = $msg ?? StatusCode::getMessage(StatusCode::SUCCESS);
        $data = array(
            'code' => StatusCode::SUCCESS,
            'msg' => $msg,
            'data' => $data,
        );
        // if (env("APP_ENV", "production") !== "dev") {
        //     $data['data'] = base64_encode(json_encode($data));
        // }
        // $out = $this->rsa->encrypt(base64_encode(json_encode($data)));
        // $des = $this->rsa->decrypt($out);
        return $this->response->json($data);
    }
    /**s
     * @param array $data
     * @param string|null $msg
     * @return PsrResponseInterface
     */
    public function esuccess(array $data = [], string $msg = null): PsrResponseInterface
    {
        $msg = $msg ?? StatusCode::getMessage(StatusCode::SUCCESS);
        $data = array(
            'code' => StatusCode::SUCCESS,
            'msg' => $msg,
            'tick' => time(),
            'entr' => env("APP_ENV", "production"),
            'data' => base64_encode(json_encode($data)),
        );
        return $this->response->json($data);
    }
    public function error(int $code, array $data = [], string $msg = null)
    {
        $msg = $msg ?? StatusCode::getMessage(StatusCode::LOGICERROR);
        $data = array(
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        );
        return $this->response->json($data);
    }
}
