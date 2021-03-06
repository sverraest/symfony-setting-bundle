<?php

namespace Webmakers\SettingBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SettingRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SettingRepository extends EntityRepository
{

    public function getSetting($name)
    {
        $setting = $this->findOneByName($name);
        if( empty($setting) ) {
            throw new \RuntimeException(sprintf('Setting "%s" couldn\'t be found.', $name));
        }

        return $setting;
    }
}
