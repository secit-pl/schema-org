<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Interface TypeInterface.
 */
interface TypeInterface {

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId();

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl();
}