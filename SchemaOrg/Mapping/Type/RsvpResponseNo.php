<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class RsvpResponseNo.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\RsvpResponseNoType instead.
 */
class RsvpResponseNo implements TypeInterface {

	/**
	 */
	private $id;

	/**
	 * RsvpResponseNo constructor.
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
		return 'https://schema.org/RsvpResponseNo';
	}
}