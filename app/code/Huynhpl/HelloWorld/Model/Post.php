<?php

namespace Huynhpl\HelloWorld\Model;


class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'huynhpl_helloworld_post';

	protected $_cacheTag = 'huynhpl_helloworld_post';

	protected $_eventPrefix = 'huynhpl_helloworld_post';

	protected function _construct()
	{
		$this->_init('Huynhpl\HelloWorld\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
