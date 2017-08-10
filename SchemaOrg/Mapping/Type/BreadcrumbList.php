<?php

namespace SecIT\SchemaOrg\Mapping\Type;

/**
 * Class BreadcrumbList.
 */
class BreadcrumbList {

	/**
	 */
	private $id;

	/**
	 * BreadcrumbList constructor.
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
		return 'https://schema.org/BreadcrumbList';
	}
}