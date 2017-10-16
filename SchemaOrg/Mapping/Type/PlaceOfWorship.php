<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PlaceOfWorship.
 * 
 * @method PlaceOfWorship setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PlaceOfWorship setAdditionalType(Property\AdditionalType $additionalType)
 * @method PlaceOfWorship setAddress(Property\Address $address)
 * @method PlaceOfWorship setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method PlaceOfWorship setAlternateName(Property\AlternateName $alternateName)
 * @method PlaceOfWorship setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method PlaceOfWorship setBranchCode(Property\BranchCode $branchCode)
 * @method PlaceOfWorship setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method PlaceOfWorship setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method PlaceOfWorship setDescription(Property\Description $description)
 * @method PlaceOfWorship setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PlaceOfWorship setEvent(Property\Event $event)
 * @method PlaceOfWorship setFaxNumber(Property\FaxNumber $faxNumber)
 * @method PlaceOfWorship setGeo(Property\Geo $geo)
 * @method PlaceOfWorship setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method PlaceOfWorship setHasMap(Property\HasMap $hasMap)
 * @method PlaceOfWorship setIdentifier(Property\Identifier $identifier)
 * @method PlaceOfWorship setImage(Property\Image $image)
 * @method PlaceOfWorship setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method PlaceOfWorship setIsicV4(Property\IsicV4 $isicV4)
 * @method PlaceOfWorship setLogo(Property\Logo $logo)
 * @method PlaceOfWorship setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PlaceOfWorship setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method PlaceOfWorship setName(Property\Name $name)
 * @method PlaceOfWorship setOpeningHours(Property\OpeningHours $openingHours)
 * @method PlaceOfWorship setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method PlaceOfWorship setPhoto(Property\Photo $photo)
 * @method PlaceOfWorship setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PlaceOfWorship setPublicAccess(Property\PublicAccess $publicAccess)
 * @method PlaceOfWorship setReview(Property\Review $review)
 * @method PlaceOfWorship setSameAs(Property\SameAs $sameAs)
 * @method PlaceOfWorship setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method PlaceOfWorship setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method PlaceOfWorship setTelephone(Property\Telephone $telephone)
 * @method PlaceOfWorship setUrl(Property\Url $url)
 */
class PlaceOfWorship extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PlaceOfWorship';
	}
}