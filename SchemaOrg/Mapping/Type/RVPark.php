<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RVPark.
 * 
 * @method RVPark setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RVPark setAdditionalType(Property\AdditionalType $additionalType)
 * @method RVPark setAddress(Property\Address $address)
 * @method RVPark setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method RVPark setAlternateName(Property\AlternateName $alternateName)
 * @method RVPark setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method RVPark setBranchCode(Property\BranchCode $branchCode)
 * @method RVPark setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method RVPark setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method RVPark setDescription(Property\Description $description)
 * @method RVPark setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RVPark setEvent(Property\Event $event)
 * @method RVPark setFaxNumber(Property\FaxNumber $faxNumber)
 * @method RVPark setGeo(Property\Geo $geo)
 * @method RVPark setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method RVPark setHasMap(Property\HasMap $hasMap)
 * @method RVPark setIdentifier(Property\Identifier $identifier)
 * @method RVPark setImage(Property\Image $image)
 * @method RVPark setIsicV4(Property\IsicV4 $isicV4)
 * @method RVPark setLogo(Property\Logo $logo)
 * @method RVPark setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RVPark setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method RVPark setName(Property\Name $name)
 * @method RVPark setOpeningHours(Property\OpeningHours $openingHours)
 * @method RVPark setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method RVPark setPhoto(Property\Photo $photo)
 * @method RVPark setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RVPark setReview(Property\Review $review)
 * @method RVPark setSameAs(Property\SameAs $sameAs)
 * @method RVPark setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method RVPark setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method RVPark setTelephone(Property\Telephone $telephone)
 * @method RVPark setUrl(Property\Url $url)
 */
class RVPark extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RVPark';
	}
}