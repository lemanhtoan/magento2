<?php
namespace Toanlm\Blog\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Toanlm\Blog\Model\Post', 'Toanlm\Blog\Model\ResourceModel\Post');
    }
}