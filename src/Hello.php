<?php

namespace Tulpar\Extension\Hello;

use Tulpar\Extension\Contracts\ExtensionInterface;
use Tulpar\Extension\Hello\Commands\HelloCommand;

class Hello implements ExtensionInterface
{
    /**
     * @inheritdoc
     */
    public static function getCommands(): array
    {
        return [
            HelloCommand::class,
        ];
    }

    /**
     * @inheritdoc
     */
    public static function getFilters(): array
    {
        return [];
    }
}
