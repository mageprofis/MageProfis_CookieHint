<?php

class MageProfis_CookieHint_IndexController extends Mage_Core_Controller_Front_Action
{
    public function setcookieAction()
    {
        $cookie = Mage::getSingleton('core/cookie');

        if ($this->getCookieType() == 'lifetime')
        {
            $cookie->set('cookiehint', '1', time() + 2592000, '/');
        } else
        {
            $cookie->set('cookiehint', '1', '', '/');
        }

        return $this;
    }

    public function getCookieType()
    {
        $config = Mage::getStoreConfig('mageprofis_cookiehint/general/cookie_type');

        if ($config != 'session' && $config != 'lifetime')
            $config = 'session';

        return $config;
    }

}
