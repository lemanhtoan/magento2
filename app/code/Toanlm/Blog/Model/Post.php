<?php
namespace Toanlm\Blog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Toanlm\Blog\Api\Data\PostInterface;

class Post extends AbstractModel implements PostInterface, IdentityInterface
{
    const CACHE_TAG = 'toanlm_blog_post';

    protected function _construct()
    {
        $this->_init('Toanlm\Blog\Model\ResourceModel\Post');
    }

    public function getTitle()
    {
        // TODO: Implement getTitle() method.
        return $this->getData(self::TITLE);
    }

    public function getContent()
    {
        // TODO: Implement getContent() method.
        return $this->getData(self::CONTENT);
    }

    public function getCreatedAt()
    {
        // TODO: Implement getCreatedAt() method.
        return $this->getData(self::CREATED_AT);
    }

    public function getIdentities()
    {
        // TODO: Implement getIdentities() method.
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function setTitle($title)
    {
        // TODO: Implement setTitle() method.
        return $this->setData(self::TITLE, $title);
    }

    public function setContent($content)
    {
        // TODO: Implement setContent() method.
        return $this->setData(self::CONTENT, $content);
    }

    public function setCreatedAt($createdAt)
    {
        // TODO: Implement setContent() method.
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    public function setId($id)
    {
        // TODO: Implement setId() method.
        return $this->setId(self::POST_ID, $id);
    }
}