<?php

declare(strict_types=1);

namespace App\Process;

use Hyperf\Process\AbstractProcess;
use Hyperf\Process\Annotation\Process;

/**
 * @Process(name="Reporter")
 */
#[Process(name: 'Service reporter')]
class Reporter extends AbstractProcess
{
    public function handle(): void
    {
    }
    public function isEnable($server): bool
    {
        // 不跟随服务启动一同启动
        return false;   
    }
}
