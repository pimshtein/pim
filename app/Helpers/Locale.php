<?php
namespace App\Helpers;


class Locale
{
    /**
     * @return null|string
     */
    static public function getPrefix(): ?string
    {
        $prefix = request()->segment(1);
        if (!empty($prefix) && in_array($prefix, config('localization.locales'))) {
            return $prefix;
        }
        return null;
    }
}