<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CivicStructureType.
 * 
 * @method CivicStructureType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CivicStructureType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CivicStructureType setAddress(Property\AddressProperty $address)
 * @method CivicStructureType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CivicStructureType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CivicStructureType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CivicStructureType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CivicStructureType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CivicStructureType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CivicStructureType setDescription(Property\DescriptionProperty $description)
 * @method CivicStructureType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CivicStructureType setEvent(Property\EventProperty $event)
 * @method CivicStructureType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CivicStructureType setGeo(Property\GeoProperty $geo)
 * @method CivicStructureType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CivicStructureType setHasMap(Property\HasMapProperty $hasMap)
 * @method CivicStructureType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CivicStructureType setImage(Property\ImageProperty $image)
 * @method CivicStructureType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CivicStructureType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CivicStructureType setLogo(Property\LogoProperty $logo)
 * @method CivicStructureType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CivicStructureType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CivicStructureType setName(Property\NameProperty $name)
 * @method CivicStructureType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CivicStructureType setPhoto(Property\PhotoProperty $photo)
 * @method CivicStructureType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CivicStructureType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CivicStructureType setReview(Property\ReviewProperty $review)
 * @method CivicStructureType setSameAs(Property\SameAsProperty $sameAs)
 * @method CivicStructureType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CivicStructureType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CivicStructureType setTelephone(Property\TelephoneProperty $telephone)
 * @method CivicStructureType setUrl(Property\UrlProperty $url)
 */
class CivicStructureType extends PlaceType {

	/**
	 * @var Property\OpeningHoursProperty
	 */
	private $openingHours;

	/**
	 * Get opening hours.
	 * 
	 * @return Property\OpeningHoursProperty
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
	 * @param Property\OpeningHoursProperty $openingHours
	 * @return CivicStructureType
	 */
	public function setOpeningHours(Property\OpeningHoursProperty $openingHours) {
		$this->openingHours = $openingHours;

		return $this;
	}
}