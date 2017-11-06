<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BedDetails.
 * 
 * @method BedDetails setAdditionalType(Property\AdditionalType $additionalType)
 * @method BedDetails setAlternateName(Property\AlternateName $alternateName)
 * @method BedDetails setDescription(Property\Description $description)
 * @method BedDetails setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BedDetails setIdentifier(Property\Identifier $identifier)
 * @method BedDetails setImage(Property\Image $image)
 * @method BedDetails setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BedDetails setName(Property\Name $name)
 * @method BedDetails setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BedDetails setSameAs(Property\SameAs $sameAs)
 * @method BedDetails setUrl(Property\Url $url)
 */
class BedDetails extends Thing {

	/**
	 * @var Property\NumberOfBeds
	 */
	private $numberOfBeds;

	/**
	 * @var Property\TypeOfBed
	 */
	private $typeOfBed;

	/**
	 * Get number of beds.
	 * 
	 * @return Property\NumberOfBeds
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
	 * @return Property\TypeOfBed
	 */
	public function getTypeOfBed() {
		return $this->typeOfBed;
	}

	/**
	 * Set number of beds.
	 * 
	 * @param Property\NumberOfBeds $numberOfBeds
	 * @return BedDetails
	 */
	public function setNumberOfBeds(Property\NumberOfBeds $numberOfBeds) {
		$this->numberOfBeds = $numberOfBeds;

		return $this;
	}

	/**
	 * Set type of bed.
	 * 
	 * @param Property\TypeOfBed $typeOfBed
	 * @return BedDetails
	 */
	public function setTypeOfBed(Property\TypeOfBed $typeOfBed) {
		$this->typeOfBed = $typeOfBed;

		return $this;
	}
}