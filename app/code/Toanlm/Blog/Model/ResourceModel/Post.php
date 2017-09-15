<?php
namespace Toanlm\Blog\Model\ResourceModel;
use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    protected function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init('toanlm_blog_post', 'post_id');
    }
}