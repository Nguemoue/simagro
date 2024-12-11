<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum ServiceIconEnum: string implements HasLabel , HasIcon
{
    case HOME = 'home';
    case USER = 'user';
    case CHART = 'chart';
    case CODE = 'code';
    case SHIELD = 'shield';
    case ANDROID = 'android';

    case SEARCH = 'search';

    /**
     * Get the class code as fontawesome icons.
     * @return string
     */
    public function toFaClass(): string
    {
        return match ($this) {
            self::HOME => 'fa fa-home',
            self::USER => 'fa fa-user',
            self::CODE => 'fa fa-code',
            self::SHIELD => 'fa fa-shield-alt',
            self::CHART => 'fa fa-chart-pie',
            self::ANDROID => 'fab fa-android',
            self::SEARCH => 'fa fa-search',
        };
    }

    public function getLabel(): ?string
    {
        return str($this->value)->ucfirst()->toString();
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::HOME => 'heroicon-o-home',
            self::USER => 'heroicon-o-user',
            self::CODE => 'heroicon-o-code-bracket',
            self::SHIELD => 'heroicon-o-shield-check',
            self::CHART => 'heroicon-o-chart-pie',
            self::ANDROID => 'heroicon-o-device-phone-mobile',
            self::SEARCH => 'heroicon-o-magnifying-glass',
        };
    }
}
