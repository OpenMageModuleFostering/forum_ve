<?php

class Ve_Forum_Model_Observer
{
    public function addToTopmenu(Varien_Event_Observer $observer)
    {
        $configValue = Mage::getStoreConfig('forum/forumtopic/forum_topic'); 
        if ($configValue==1) {
            $menu = $observer->getMenu();
            $tree = $menu->getTree();
         
            $node = new Varien_Data_Tree_Node(array(
                    'name'   => 'Forum',
                    'id'     => 'forum',
                    'url'    => Mage::getUrl('forum'), // point to forum
            ), 'id', $tree, $menu);
         
            $menu->addChild($node);
        }
    }
}