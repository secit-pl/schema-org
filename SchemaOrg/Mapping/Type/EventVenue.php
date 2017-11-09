<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EventVenue.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\EventVenueType instead.
 * 
 * @method EventVenue setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method EventVenue setAdditionalType(Property\AdditionalType $additionalType)
 * @method EventVenue setAddress(Property\Address $address)
 * @method EventVenue setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method EventVenue setAlternateName(Property\AlternateName $alternateName)
 * @method EventVenue setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method EventVenue setBranchCode(Property\BranchCode $branchCode)
 * @method EventVenue setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method EventVenue setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method EventVenue setDescription(Property\Description $description)
 * @method EventVenue setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EventVenue setEvent(Property\Event $event)
 * @method EventVenue setFaxNumber(Property\FaxNumber $faxNumber)
 * @method EventVenue setGeo(Property\Geo $geo)
 * @method EventVenue setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method EventVenue setHasMap(Property\HasMap $hasMap)
 * @method EventVenue setIdentifier(Property\Identifier $identifier)
 * @method EventVenue setImage(Property\Image $image)
 * @method EventVenue setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method EventVenue setIsicV4(Property\IsicV4 $isicV4)
 * @method EventVenue setLogo(Property\Logo $logo)
 * @method EventVenue setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EventVenue setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method EventVenue setName(Property\Name $name)
 * @method EventVenue setOpeningHours(Property\OpeningHours $openingHours)
 * @method EventVenue setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method EventVenue setPhoto(Property\Photo $photo)
 * @method EventVenue setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EventVenue setPublicAccess(Property\PublicAccess $publicAccess)
 * @method EventVenue setReview(Property\Review $review)
 * @method EventVenue setSameAs(Property\SameAs $sameAs)
 * @method EventVenue setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method EventVenue setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method EventVenue setTelephone(Property\Telephone $telephone)
 * @method EventVenue setUrl(Property\Url $url)
 */
class EventVenue extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventVenue';
	}
}