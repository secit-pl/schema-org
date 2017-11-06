<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WarrantyPromise.
 * 
 * @method WarrantyPromise setAdditionalType(Property\AdditionalType $additionalType)
 * @method WarrantyPromise setAlternateName(Property\AlternateName $alternateName)
 * @method WarrantyPromise setDescription(Property\Description $description)
 * @method WarrantyPromise setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method WarrantyPromise setIdentifier(Property\Identifier $identifier)
 * @method WarrantyPromise setImage(Property\Image $image)
 * @method WarrantyPromise setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method WarrantyPromise setName(Property\Name $name)
 * @method WarrantyPromise setPotentialAction(Property\PotentialAction $potentialAction)
 * @method WarrantyPromise setSameAs(Property\SameAs $sameAs)
 * @method WarrantyPromise setUrl(Property\Url $url)
 */
class WarrantyPromise extends Thing {

	/**
	 * @var Property\DurationOfWarranty
	 */
	private $durationOfWarranty;

	/**
	 * @var Property\WarrantyScope
	 */
	private $warrantyScope;

	/**
	 * Get duration of warranty.
	 * 
	 * @return Property\DurationOfWarranty
	 */
	public function getDurationOfWarranty() {
		return $this->durationOfWarranty;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WarrantyPromise';
	}

	/**
	 * Get warranty scope.
	 * 
	 * @return Property\WarrantyScope
	 */
	public function getWarrantyScope() {
		return $this->warrantyScope;
	}

	/**
	 * Set duration of warranty.
	 * 
	 * @param Property\DurationOfWarranty $durationOfWarranty
	 * @return WarrantyPromise
	 */
	public function setDurationOfWarranty(Property\DurationOfWarranty $durationOfWarranty) {
		$this->durationOfWarranty = $durationOfWarranty;

		return $this;
	}

	/**
	 * Set warranty scope.
	 * 
	 * @param Property\WarrantyScope $warrantyScope
	 * @return WarrantyPromise
	 */
	public function setWarrantyScope(Property\WarrantyScope $warrantyScope) {
		$this->warrantyScope = $warrantyScope;

		return $this;
	}
}