<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Park.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ParkType instead.
 * 
 * @method Park setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Park setAdditionalType(Property\AdditionalType $additionalType)
 * @method Park setAddress(Property\Address $address)
 * @method Park setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Park setAlternateName(Property\AlternateName $alternateName)
 * @method Park setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Park setBranchCode(Property\BranchCode $branchCode)
 * @method Park setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Park setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Park setDescription(Property\Description $description)
 * @method Park setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Park setEvent(Property\Event $event)
 * @method Park setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Park setGeo(Property\Geo $geo)
 * @method Park setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Park setHasMap(Property\HasMap $hasMap)
 * @method Park setIdentifier(Property\Identifier $identifier)
 * @method Park setImage(Property\Image $image)
 * @method Park setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Park setIsicV4(Property\IsicV4 $isicV4)
 * @method Park setLogo(Property\Logo $logo)
 * @method Park setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Park setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Park setName(Property\Name $name)
 * @method Park setOpeningHours(Property\OpeningHours $openingHours)
 * @method Park setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Park setPhoto(Property\Photo $photo)
 * @method Park setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Park setPublicAccess(Property\PublicAccess $publicAccess)
 * @method Park setReview(Property\Review $review)
 * @method Park setSameAs(Property\SameAs $sameAs)
 * @method Park setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Park setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Park setTelephone(Property\Telephone $telephone)
 * @method Park setUrl(Property\Url $url)
 */
class Park extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Park';
	}
}