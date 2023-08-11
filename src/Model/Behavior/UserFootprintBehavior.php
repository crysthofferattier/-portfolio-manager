<?php

namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Event\Event;
use Cake\Utility\Text;
use Cake\Auth;

class UserFootprintBehavior extends Behavior
{
    public function getFootprint(EntityInterface $entity)
    {    
        //$user = $this->Authentication->getIdentity();
        
        $entity->set('user_id', 222);
    }

    public function beforeSave(EventInterface $event, EntityInterface $entity, ArrayObject $options)
    {    
        print_r($event);
        exit();
        $this->getFootprint($entity);
    }
}
