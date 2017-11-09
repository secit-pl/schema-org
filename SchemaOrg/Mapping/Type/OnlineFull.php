<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class OnlineFull.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OnlineFullType instead.
 */
class OnlineFull implements TypeInterface {

	/**
	 */
	private $id;

	/**
	 * OnlineFull constructor.
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
		return 'https://schema.org/OnlineFull';
	}
}