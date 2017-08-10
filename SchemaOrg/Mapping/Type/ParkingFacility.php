<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ParkingFacility.
 * 
 * @method ParkingFacility setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ParkingFacility setAdditionalType(Property\AdditionalType $additionalType)
 * @method ParkingFacility setAddress(Property\Address $address)
 * @method ParkingFacility setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ParkingFacility setAlternateName(Property\AlternateName $alternateName)
 * @method ParkingFacility setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method ParkingFacility setBranchCode(Property\BranchCode $branchCode)
 * @method ParkingFacility setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method ParkingFacility setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method ParkingFacility setDescription(Property\Description $description)
 * @method ParkingFacility setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ParkingFacility setEvent(Property\Event $event)
 * @method ParkingFacility setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ParkingFacility setGeo(Property\Geo $geo)
 * @method ParkingFacility setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ParkingFacility setHasMap(Property\HasMap $hasMap)
 * @method ParkingFacility setIdentifier(Property\Identifier $identifier)
 * @method ParkingFacility setImage(Property\Image $image)
 * @method ParkingFacility setIsicV4(Property\IsicV4 $isicV4)
 * @method ParkingFacility setLogo(Property\Logo $logo)
 * @method ParkingFacility setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ParkingFacility setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method ParkingFacility setName(Property\Name $name)
 * @method ParkingFacility setOpeningHours(Property\OpeningHours $openingHours)
 * @method ParkingFacility setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method ParkingFacility setPhoto(Property\Photo $photo)
 * @method ParkingFacility setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ParkingFacility setReview(Property\Review $review)
 * @method ParkingFacility setSameAs(Property\SameAs $sameAs)
 * @method ParkingFacility setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method ParkingFacility setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method ParkingFacility setTelephone(Property\Telephone $telephone)
 * @method ParkingFacility setUrl(Property\Url $url)
 */
class ParkingFacility extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ParkingFacility';
	}
}