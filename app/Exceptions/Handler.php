<?php
declare(strict_types=1);

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ValidationException::class,
    ];

    private const SENTRY_REPORT_SERVICE = 'sentry';

    public function report(Throwable $exception): void
    {
        if (app()->bound(self::SENTRY_REPORT_SERVICE) && $this->shouldReport($exception)) {
            app(self::SENTRY_REPORT_SERVICE)->captureException($exception);
        }

        parent::report($exception);
    }
}
