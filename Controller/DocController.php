<?php

namespace AppVentus\AlmanachBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ShowcaseController extends Controller
{
    /**
     * @Route("/{framework}")
     * @Template()
     */
    public function indexAction($framework) {
        $almanach            = $this->getParameter('almanach_' . $framework);
        $container           = ($almanach['container']) ? : null;
        $label               = ($almanach['label']) ? : null;
        $alert               = ($almanach['alert']) ? : null;
        $title               = ($almanach['title']) ? : null;
        $inlineText          = ($almanach['inlineText']) ? : null;
        $transformText       = ($almanach['transformText']) ? : null;
        $alignmentText       = ($almanach['alignmentText']) ? : null;
        $list                = ($almanach['list']) ? : null;
        $listItem            = ($almanach['listItem']) ? : null;
        $button              = ($almanach['button']) ? : null;
        $dropdownButton      = ($almanach['dropdownButton']) ? : null;
        $splitDropdownButton = ($almanach['splitDropdownButton']) ? : null;
        $buttonGroup         = ($almanach['buttonGroup']) ? : null;

        return array(
            'framework'                  => $framework,
            'config_container'           => $container,
            'config_label'               => $label,
            'config_alert'               => $alert,
            'config_title'               => $title,
            'config_inlineText'          => $inlineText,
            'config_transformText'       => $transformText,
            'config_alignmentText'       => $alignmentText,
            'config_list'                => $list,
            'config_listItem'            => $listItem,
            'config_button'              => $button,
            'config_dropdownButton'      => $dropdownButton,
            'config_splitDropdownButton' => $splitDropdownButton,
            'config_buttonGroup'         => $buttonGroup,
        );
    }
}