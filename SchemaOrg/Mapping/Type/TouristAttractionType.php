<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TouristAttractionType.
 * 
 * @method TouristAttractionType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TouristAttractionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TouristAttractionType setAddress(Property\AddressProperty $address)
 * @method TouristAttractionType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TouristAttractionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TouristAttractionType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method TouristAttractionType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method TouristAttractionType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method TouristAttractionType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method TouristAttractionType setDescription(Property\DescriptionProperty $description)
 * @method TouristAttractionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TouristAttractionType setEvent(Property\EventProperty $event)
 * @method TouristAttractionType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TouristAttractionType setGeo(Property\GeoProperty $geo)
 * @method TouristAttractionType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TouristAttractionType setHasMap(Property\HasMapProperty $hasMap)
 * @method TouristAttractionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TouristAttractionType setImage(Property\ImageProperty $image)
 * @method TouristAttractionType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method TouristAttractionType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TouristAttractionType setLogo(Property\LogoProperty $logo)
 * @method TouristAttractionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TouristAttractionType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method TouristAttractionType setName(Property\NameProperty $name)
 * @method TouristAttractionType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method TouristAttractionType setPhoto(Property\PhotoProperty $photo)
 * @method TouristAttractionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TouristAttractionType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method TouristAttractionType setReview(Property\ReviewProperty $review)
 * @method TouristAttractionType setSameAs(Property\SameAsProperty $sameAs)
 * @method TouristAttractionType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method TouristAttractionType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method TouristAttractionType setTelephone(Property\TelephoneProperty $telephone)
 * @method TouristAttractionType setUrl(Property\UrlProperty $url)
 */
class TouristAttractionType extends PlaceType {

	/**
	 * @var Property\AvailableLanguageProperty
	 */
	private $availableLanguage;

	/**
	 * @var Property\TouristTypeProperty
	 */
	private $touristType;

	/**
	 * Get available language.
	 * 
	 * @return Property\AvailableLanguageProperty
	 */
	public function getAvailableLanguage() {
		return $this->availableLanguage;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TouristAttraction';
	}

	/**
	 * Get tourist type.
	 * 
	 * @return Property\TouristTypeProperty
	 */
	public function getTouristType() {
		return $this->touristType;
	}

	/**
	 * Set available language.
	 * 
	 * @param Property\AvailableLanguageProperty $availableLanguage
	 * @return TouristAttractionType
	 */
	public function setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage) {
		$this->availableLanguage = $availableLanguage;

		return $this;
	}

	/**
	 * Set tourist type.
	 * 
	 * @param Property\TouristTypeProperty $touristType
	 * @return TouristAttractionType
	 */
	public function setTouristType(Property\TouristTypeProperty $touristType) {
		$this->touristType = $touristType;

		return $this;
	}
}