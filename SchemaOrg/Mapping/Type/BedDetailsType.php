<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An entity holding detailed information about the available bed types, e.g. the quantity of twin beds for a hotel room. For the single case of just one bed of a certain type, you can use bed directly with a text. See also BedType (under development).
 * 
 * @method BedDetailsType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BedDetailsType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BedDetailsType setDescription(Property\DescriptionProperty $description)
 * @method BedDetailsType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BedDetailsType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BedDetailsType setImage(Property\ImageProperty $image)
 * @method BedDetailsType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BedDetailsType setName(Property\NameProperty $name)
 * @method BedDetailsType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BedDetailsType setSameAs(Property\SameAsProperty $sameAs)
 * @method BedDetailsType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BedDetailsType setUrl(Property\UrlProperty $url)
 */
class BedDetailsType extends IntangibleType {

	/**
	 * @var Property\NumberOfBedsProperty
	 */
	private $numberOfBeds;

	/**
	 * @var Property\TypeOfBedProperty
	 */
	private $typeOfBed;

	/**
	 * Get number of beds.
	 *
	 * @return Property\NumberOfBedsProperty
	 */
	public function getNumberOfBeds() {
		return $this->numberOfBeds;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BedDetails';
	}

	/**
	 * Get type of bed.
	 *
	 * @return Property\TypeOfBedProperty
	 */
	public function getTypeOfBed() {
		return $this->typeOfBed;
	}

	/**
	 * Set number of beds.
	 *
	 * @param Property\NumberOfBedsProperty $numberOfBeds
	 * @return BedDetailsType
	 */
	public function setNumberOfBeds(Property\NumberOfBedsProperty $numberOfBeds) {
		$this->numberOfBeds = $numberOfBeds;

		return $this;
	}

	/**
	 * Set type of bed.
	 *
	 * @param Property\TypeOfBedProperty $typeOfBed
	 * @return BedDetailsType
	 */
	public function setTypeOfBed(Property\TypeOfBedProperty $typeOfBed) {
		$this->typeOfBed = $typeOfBed;

		return $this;
	}
}