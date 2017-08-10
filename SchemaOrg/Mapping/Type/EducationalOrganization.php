<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EducationalOrganization.
 */
class EducationalOrganization {

	/**
	 * @var Property\Alumni
	 */
	private $alumni;

	/**
	 */
	private $id;

	/**
	 * EducationalOrganization constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get alumni.
	 * 
	 * @return Property\Alumni
	 */
	public function getAlumni() {
		return $this->alumni;
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
		return 'https://schema.org/EducationalOrganization';
	}

	/**
	 * Set alumni.
	 * 
	 * @param Property\Alumni $alumni
	 * @return EducationalOrganization
	 */
	public function setAlumni(Property\Alumni $alumni) {
		$this->alumni = $alumni;

		return $this;
	}
}