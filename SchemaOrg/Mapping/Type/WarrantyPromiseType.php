<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WarrantyPromiseType.
 * 
 * @method WarrantyPromiseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WarrantyPromiseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WarrantyPromiseType setDescription(Property\DescriptionProperty $description)
 * @method WarrantyPromiseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WarrantyPromiseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WarrantyPromiseType setImage(Property\ImageProperty $image)
 * @method WarrantyPromiseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WarrantyPromiseType setName(Property\NameProperty $name)
 * @method WarrantyPromiseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WarrantyPromiseType setSameAs(Property\SameAsProperty $sameAs)
 * @method WarrantyPromiseType setUrl(Property\UrlProperty $url)
 */
class WarrantyPromiseType extends StructuredValueType {

	/**
	 * @var Property\DurationOfWarrantyProperty
	 */
	private $durationOfWarranty;

	/**
	 * @var Property\WarrantyScopeProperty
	 */
	private $warrantyScope;

	/**
	 * Get duration of warranty.
	 * 
	 * @return Property\DurationOfWarrantyProperty
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
	 * @return Property\WarrantyScopeProperty
	 */
	public function getWarrantyScope() {
		return $this->warrantyScope;
	}

	/**
	 * Set duration of warranty.
	 * 
	 * @param Property\DurationOfWarrantyProperty $durationOfWarranty
	 * @return WarrantyPromiseType
	 */
	public function setDurationOfWarranty(Property\DurationOfWarrantyProperty $durationOfWarranty) {
		$this->durationOfWarranty = $durationOfWarranty;

		return $this;
	}

	/**
	 * Set warranty scope.
	 * 
	 * @param Property\WarrantyScopeProperty $warrantyScope
	 * @return WarrantyPromiseType
	 */
	public function setWarrantyScope(Property\WarrantyScopeProperty $warrantyScope) {
		$this->warrantyScope = $warrantyScope;

		return $this;
	}
}