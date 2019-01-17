<?php


namespace App\Helper;

use Symfony\Contracts\Translation\TranslatorInterface;

class Helper4
{
    private $translator;

    public function setTranslator(TranslatorInterface $translator): void
    {
        $this->translator = $translator;
    }

    public function showWelcome(): string
    {
        return $this->translator->trans('label_welcome_from_helper4_service');
    }
}
