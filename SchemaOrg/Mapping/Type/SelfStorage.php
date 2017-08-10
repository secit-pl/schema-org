<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class SelfStorage.
 */
class SelfStorage {

	/**
	 */
	private $id;

	/**
	 * SelfStorage constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SelfStorage';
	}
}