<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Periodical.
 */
class Periodical {

	/**
	 */
	private $id;

	/**
	 * @var Property\Issn
	 */
	private $issn;

	/**
	 * Periodical constructor.
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
	 * Get issn.
	 * 
	 * @return Property\Issn
	 */
	public function getIssn() {
		return $this->issn;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Periodical';
	}

	/**
	 * Set issn.
	 * 
	 * @param Property\Issn $issn
	 * @return Periodical
	 */
	public function setIssn(Property\Issn $issn) {
		$this->issn = $issn;

		return $this;
	}
}