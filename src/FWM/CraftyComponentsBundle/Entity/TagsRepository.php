<?php

namespace FWM\CraftyComponentsBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TagsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TagsRepository extends EntityRepository
{
	public function synchronizeTags($tags, $component) {
        $em = $this->_em;

        return $tags;
    }
}