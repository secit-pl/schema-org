<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class TollFreeType.
 */
class TollFreeType implements TypeInterface {

	/**
	 */
	private $id;

	/**
	 * TollFreeType constructor.
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
		return 'https://schema.org/TollFree';
	}
}