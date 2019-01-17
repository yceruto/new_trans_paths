<?php


namespace App\Controller;

use App\Helper\Helper1;
use App\Helper\Helper2;
use App\Helper\Helper3;
use App\Helper\Helper4;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Translation\TranslatorInterface;

class DefaultController extends AbstractController
{
    public function __construct(Helper1 $helper1, Helper2 $helper2, Helper3 $helper3, Helper4 $helper4)
    {
    }

    public function index(TranslatorInterface $translator)
    {
        return new Response($translator->trans('label_welcome_from_controller'));
    }
}
