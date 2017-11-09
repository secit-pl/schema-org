<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TouristAttraction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\TouristAttractionType instead.
 * 
 * @method TouristAttraction setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TouristAttraction setAdditionalType(Property\AdditionalType $additionalType)
 * @method TouristAttraction setAddress(Property\Address $address)
 * @method TouristAttraction setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TouristAttraction setAlternateName(Property\AlternateName $alternateName)
 * @method TouristAttraction setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method TouristAttraction setBranchCode(Property\BranchCode $branchCode)
 * @method TouristAttraction setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method TouristAttraction setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method TouristAttraction setDescription(Property\Description $description)
 * @method TouristAttraction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TouristAttraction setEvent(Property\Event $event)
 * @method TouristAttraction setFaxNumber(Property\FaxNumber $faxNumber)
 * @method TouristAttraction setGeo(Property\Geo $geo)
 * @method TouristAttraction setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method TouristAttraction setHasMap(Property\HasMap $hasMap)
 * @method TouristAttraction setIdentifier(Property\Identifier $identifier)
 * @method TouristAttraction setImage(Property\Image $image)
 * @method TouristAttraction setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method TouristAttraction setIsicV4(Property\IsicV4 $isicV4)
 * @method TouristAttraction setLogo(Property\Logo $logo)
 * @method TouristAttraction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TouristAttraction setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method TouristAttraction setName(Property\Name $name)
 * @method TouristAttraction setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method TouristAttraction setPhoto(Property\Photo $photo)
 * @method TouristAttraction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TouristAttraction setPublicAccess(Property\PublicAccess $publicAccess)
 * @method TouristAttraction setReview(Property\Review $review)
 * @method TouristAttraction setSameAs(Property\SameAs $sameAs)
 * @method TouristAttraction setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method TouristAttraction setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method TouristAttraction setTelephone(Property\Telephone $telephone)
 * @method TouristAttraction setUrl(Property\Url $url)
 */
class TouristAttraction extends Place {

	/**
	 * @var Property\AvailableLanguage
	 */
	private $availableLanguage;

	/**
	 * @var Property\TouristType
	 */
	private $touristType;

	/**
	 * Get available language.
	 * 
	 * @return Property\AvailableLanguage
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
	 * @return Property\TouristType
	 */
	public function getTouristType() {
		return $this->touristType;
	}

	/**
	 * Set available language.
	 * 
	 * @param Property\AvailableLanguage $availableLanguage
	 * @return TouristAttraction
	 */
	public function setAvailableLanguage(Property\AvailableLanguage $availableLanguage) {
		$this->availableLanguage = $availableLanguage;

		return $this;
	}

	/**
	 * Set tourist type.
	 * 
	 * @param Property\TouristType $touristType
	 * @return TouristAttraction
	 */
	public function setTouristType(Property\TouristType $touristType) {
		$this->touristType = $touristType;

		return $this;
	}
}