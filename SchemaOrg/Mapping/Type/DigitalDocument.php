<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DigitalDocument.
 */
class DigitalDocument {

	/**
	 * @var Property\HasDigitalDocumentPermission
	 */
	private $hasDigitalDocumentPermission;

	/**
	 */
	private $id;

	/**
	 * DigitalDocument constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get has digital document permission.
	 * 
	 * @return Property\HasDigitalDocumentPermission
	 */
	public function getHasDigitalDocumentPermission() {
		return $this->hasDigitalDocumentPermission;
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
		return 'https://schema.org/DigitalDocument';
	}

	/**
	 * Set has digital document permission.
	 * 
	 * @param Property\HasDigitalDocumentPermission $hasDigitalDocumentPermission
	 * @return DigitalDocument
	 */
	public function setHasDigitalDocumentPermission(Property\HasDigitalDocumentPermission $hasDigitalDocumentPermission) {
		$this->hasDigitalDocumentPermission = $hasDigitalDocumentPermission;

		return $this;
	}
}