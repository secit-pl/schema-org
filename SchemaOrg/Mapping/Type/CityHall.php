<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CityHall.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CityHallType instead.
 * 
 * @method CityHall setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CityHall setAdditionalType(Property\AdditionalType $additionalType)
 * @method CityHall setAddress(Property\Address $address)
 * @method CityHall setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method CityHall setAlternateName(Property\AlternateName $alternateName)
 * @method CityHall setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method CityHall setBranchCode(Property\BranchCode $branchCode)
 * @method CityHall setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method CityHall setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method CityHall setDescription(Property\Description $description)
 * @method CityHall setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CityHall setEvent(Property\Event $event)
 * @method CityHall setFaxNumber(Property\FaxNumber $faxNumber)
 * @method CityHall setGeo(Property\Geo $geo)
 * @method CityHall setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method CityHall setHasMap(Property\HasMap $hasMap)
 * @method CityHall setIdentifier(Property\Identifier $identifier)
 * @method CityHall setImage(Property\Image $image)
 * @method CityHall setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method CityHall setIsicV4(Property\IsicV4 $isicV4)
 * @method CityHall setLogo(Property\Logo $logo)
 * @method CityHall setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CityHall setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method CityHall setName(Property\Name $name)
 * @method CityHall setOpeningHours(Property\OpeningHours $openingHours)
 * @method CityHall setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method CityHall setPhoto(Property\Photo $photo)
 * @method CityHall setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CityHall setPublicAccess(Property\PublicAccess $publicAccess)
 * @method CityHall setReview(Property\Review $review)
 * @method CityHall setSameAs(Property\SameAs $sameAs)
 * @method CityHall setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method CityHall setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method CityHall setTelephone(Property\Telephone $telephone)
 * @method CityHall setUrl(Property\Url $url)
 */
class CityHall extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CityHall';
	}
}