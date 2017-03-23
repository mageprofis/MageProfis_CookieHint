<?php

class MageProfis_CookieHint_Model_Adminhtml_System_Config_Source_Cookietype
{
    public function toOptionArray()
    {
        $out = array(
            array('value' => 'session', 'label' => 'Session'),
            array('value' => 'lifetime', 'label' => 'Lifetime'),
        );

        return $out;
    }

}
