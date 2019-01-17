<?php


namespace App\Helper;

use Symfony\Contracts\Translation\TranslatorInterface;

class Helper3
{
    /** @var TranslatorInterface */
    public $translator;

    public function showWelcome(): string
    {
        return $this->translator->trans('label_welcome_from_helper3_service');
    }
}
