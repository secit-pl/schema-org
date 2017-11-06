<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Cemetery.
 * 
 * @method Cemetery setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Cemetery setAdditionalType(Property\AdditionalType $additionalType)
 * @method Cemetery setAddress(Property\Address $address)
 * @method Cemetery setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Cemetery setAlternateName(Property\AlternateName $alternateName)
 * @method Cemetery setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Cemetery setBranchCode(Property\BranchCode $branchCode)
 * @method Cemetery setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Cemetery setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Cemetery setDescription(Property\Description $description)
 * @method Cemetery setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Cemetery setEvent(Property\Event $event)
 * @method Cemetery setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Cemetery setGeo(Property\Geo $geo)
 * @method Cemetery setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Cemetery setHasMap(Property\HasMap $hasMap)
 * @method Cemetery setIdentifier(Property\Identifier $identifier)
 * @method Cemetery setImage(Property\Image $image)
 * @method Cemetery setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Cemetery setIsicV4(Property\IsicV4 $isicV4)
 * @method Cemetery setLogo(Property\Logo $logo)
 * @method Cemetery setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Cemetery setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Cemetery setName(Property\Name $name)
 * @method Cemetery setOpeningHours(Property\OpeningHours $openingHours)
 * @method Cemetery setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Cemetery setPhoto(Property\Photo $photo)
 * @method Cemetery setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Cemetery setPublicAccess(Property\PublicAccess $publicAccess)
 * @method Cemetery setReview(Property\Review $review)
 * @method Cemetery setSameAs(Property\SameAs $sameAs)
 * @method Cemetery setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Cemetery setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Cemetery setTelephone(Property\Telephone $telephone)
 * @method Cemetery setUrl(Property\Url $url)
 */
class Cemetery extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Cemetery';
	}
}