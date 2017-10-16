<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MobileApplication.
 */
class MobileApplication {

	/**
	 * @var Property\CarrierRequirements
	 */
	private $carrierRequirements;

	/**
	 */
	private $id;

	/**
	 * MobileApplication constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get carrier requirements.
	 * 
	 * @return Property\CarrierRequirements
	 */
	public function getCarrierRequirements() {
		return $this->carrierRequirements;
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
		return 'https://schema.org/MobileApplication';
	}

	/**
	 * Set carrier requirements.
	 * 
	 * @param Property\CarrierRequirements $carrierRequirements
	 * @return MobileApplication
	 */
	public function setCarrierRequirements(Property\CarrierRequirements $carrierRequirements) {
		$this->carrierRequirements = $carrierRequirements;

		return $this;
	}
}