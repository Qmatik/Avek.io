<?php
declare(strict_types=1);

namespace App\Providers;

use App\Http\Requests\AbstractRequest;
use Illuminate\Support\ServiceProvider;

class RequestServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->resolving(AbstractRequest::class, function (AbstractRequest $request) {
            $request->validate();
        });
    }
}
