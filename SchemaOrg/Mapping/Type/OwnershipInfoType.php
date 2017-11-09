<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OwnershipInfoType.
 * 
 * @method OwnershipInfoType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OwnershipInfoType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OwnershipInfoType setDescription(Property\DescriptionProperty $description)
 * @method OwnershipInfoType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OwnershipInfoType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OwnershipInfoType setImage(Property\ImageProperty $image)
 * @method OwnershipInfoType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OwnershipInfoType setName(Property\NameProperty $name)
 * @method OwnershipInfoType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OwnershipInfoType setSameAs(Property\SameAsProperty $sameAs)
 * @method OwnershipInfoType setUrl(Property\UrlProperty $url)
 */
class OwnershipInfoType extends StructuredValueType {

	/**
	 * @var Property\AcquiredFromProperty
	 */
	private $acquiredFrom;

	/**
	 * @var Property\OwnedFromProperty
	 */
	private $ownedFrom;

	/**
	 * @var Property\OwnedThroughProperty
	 */
	private $ownedThrough;

	/**
	 * @var Property\TypeOfGoodProperty
	 */
	private $typeOfGood;

	/**
	 * Get acquired from.
	 * 
	 * @return Property\AcquiredFromProperty
	 */
	public function getAcquiredFrom() {
		return $this->acquiredFrom;
	}

	/**
	 * Get owned from.
	 * 
	 * @return Property\OwnedFromProperty
	 */
	public function getOwnedFrom() {
		return $this->ownedFrom;
	}

	/**
	 * Get owned through.
	 * 
	 * @return Property\OwnedThroughProperty
	 */
	public function getOwnedThrough() {
		return $this->ownedThrough;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OwnershipInfo';
	}

	/**
	 * Get type of good.
	 * 
	 * @return Property\TypeOfGoodProperty
	 */
	public function getTypeOfGood() {
		return $this->typeOfGood;
	}

	/**
	 * Set acquired from.
	 * 
	 * @param Property\AcquiredFromProperty $acquiredFrom
	 * @return OwnershipInfoType
	 */
	public function setAcquiredFrom(Property\AcquiredFromProperty $acquiredFrom) {
		$this->acquiredFrom = $acquiredFrom;

		return $this;
	}

	/**
	 * Set owned from.
	 * 
	 * @param Property\OwnedFromProperty $ownedFrom
	 * @return OwnershipInfoType
	 */
	public function setOwnedFrom(Property\OwnedFromProperty $ownedFrom) {
		$this->ownedFrom = $ownedFrom;

		return $this;
	}

	/**
	 * Set owned through.
	 * 
	 * @param Property\OwnedThroughProperty $ownedThrough
	 * @return OwnershipInfoType
	 */
	public function setOwnedThrough(Property\OwnedThroughProperty $ownedThrough) {
		$this->ownedThrough = $ownedThrough;

		return $this;
	}

	/**
	 * Set type of good.
	 * 
	 * @param Property\TypeOfGoodProperty $typeOfGood
	 * @return OwnershipInfoType
	 */
	public function setTypeOfGood(Property\TypeOfGoodProperty $typeOfGood) {
		$this->typeOfGood = $typeOfGood;

		return $this;
	}
}