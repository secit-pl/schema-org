<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CivicStructure.
 * 
 * @method CivicStructure setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CivicStructure setAdditionalType(Property\AdditionalType $additionalType)
 * @method CivicStructure setAddress(Property\Address $address)
 * @method CivicStructure setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method CivicStructure setAlternateName(Property\AlternateName $alternateName)
 * @method CivicStructure setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method CivicStructure setBranchCode(Property\BranchCode $branchCode)
 * @method CivicStructure setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method CivicStructure setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method CivicStructure setDescription(Property\Description $description)
 * @method CivicStructure setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CivicStructure setEvent(Property\Event $event)
 * @method CivicStructure setFaxNumber(Property\FaxNumber $faxNumber)
 * @method CivicStructure setGeo(Property\Geo $geo)
 * @method CivicStructure setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method CivicStructure setHasMap(Property\HasMap $hasMap)
 * @method CivicStructure setIdentifier(Property\Identifier $identifier)
 * @method CivicStructure setImage(Property\Image $image)
 * @method CivicStructure setIsicV4(Property\IsicV4 $isicV4)
 * @method CivicStructure setLogo(Property\Logo $logo)
 * @method CivicStructure setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CivicStructure setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method CivicStructure setName(Property\Name $name)
 * @method CivicStructure setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method CivicStructure setPhoto(Property\Photo $photo)
 * @method CivicStructure setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CivicStructure setReview(Property\Review $review)
 * @method CivicStructure setSameAs(Property\SameAs $sameAs)
 * @method CivicStructure setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method CivicStructure setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method CivicStructure setTelephone(Property\Telephone $telephone)
 * @method CivicStructure setUrl(Property\Url $url)
 */
class CivicStructure extends Place {

	/**
	 * @var Property\OpeningHours
	 */
	private $openingHours;

	/**
	 * Get opening hours.
	 * 
	 * @return Property\OpeningHours
	 */
	public function getOpeningHours() {
		return $this->openingHours;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CivicStructure';
	}

	/**
	 * Set opening hours.
	 * 
	 * @param Property\OpeningHours $openingHours
	 * @return CivicStructure
	 */
	public function setOpeningHours(Property\OpeningHours $openingHours) {
		$this->openingHours = $openingHours;

		return $this;
	}
}