<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Embassy.
 * 
 * @method Embassy setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Embassy setAdditionalType(Property\AdditionalType $additionalType)
 * @method Embassy setAddress(Property\Address $address)
 * @method Embassy setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Embassy setAlternateName(Property\AlternateName $alternateName)
 * @method Embassy setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Embassy setBranchCode(Property\BranchCode $branchCode)
 * @method Embassy setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Embassy setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Embassy setDescription(Property\Description $description)
 * @method Embassy setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Embassy setEvent(Property\Event $event)
 * @method Embassy setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Embassy setGeo(Property\Geo $geo)
 * @method Embassy setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Embassy setHasMap(Property\HasMap $hasMap)
 * @method Embassy setIdentifier(Property\Identifier $identifier)
 * @method Embassy setImage(Property\Image $image)
 * @method Embassy setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Embassy setIsicV4(Property\IsicV4 $isicV4)
 * @method Embassy setLogo(Property\Logo $logo)
 * @method Embassy setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Embassy setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Embassy setName(Property\Name $name)
 * @method Embassy setOpeningHours(Property\OpeningHours $openingHours)
 * @method Embassy setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Embassy setPhoto(Property\Photo $photo)
 * @method Embassy setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Embassy setPublicAccess(Property\PublicAccess $publicAccess)
 * @method Embassy setReview(Property\Review $review)
 * @method Embassy setSameAs(Property\SameAs $sameAs)
 * @method Embassy setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Embassy setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Embassy setTelephone(Property\Telephone $telephone)
 * @method Embassy setUrl(Property\Url $url)
 */
class Embassy extends GovernmentBuilding {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Embassy';
	}
}