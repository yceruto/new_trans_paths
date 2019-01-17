<?php


namespace App\Helper;

use Symfony\Contracts\Translation\TranslatorInterface;

class Helper1
{
    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function showWelcome(): string
    {
        return $this->translator->trans('label_welcome_from_helper1_service');
    }
}
