<?php

declare(strict_types=1);

namespace Pest\Installers;

final readonly class PluginBrowser
{
    public static function install(): void
    {
        echo 'Using the visit() function requires the Pest Plugin Browser to be installed.

Run:

- composer require pestphp/pest-plugin-browser:^4.0 --dev
- npm install playwright@latest
- npx playwright install
';

    }
}
