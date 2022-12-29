<?php


namespace App\Constants;


use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

/**
 * @Constants
 */
class StatusCode extends AbstractConstants
{
    /**
     * @Message("success")
     */
    const SUCCESS = 200;
    /**
     * @Message("info not found")
     */
    const NOTFOUND = 404;
    /**
     * @Message("method not allowed")
     */
    const NOTALLOWED = 405;

    /**
     * @Message("logic error")
     */
    const LOGICERROR = 500;

}