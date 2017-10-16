<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Bridge.
 * 
 * @method Bridge setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Bridge setAdditionalType(Property\AdditionalType $additionalType)
 * @method Bridge setAddress(Property\Address $address)
 * @method Bridge setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Bridge setAlternateName(Property\AlternateName $alternateName)
 * @method Bridge setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Bridge setBranchCode(Property\BranchCode $branchCode)
 * @method Bridge setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Bridge setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Bridge setDescription(Property\Description $description)
 * @method Bridge setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Bridge setEvent(Property\Event $event)
 * @method Bridge setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Bridge setGeo(Property\Geo $geo)
 * @method Bridge setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Bridge setHasMap(Property\HasMap $hasMap)
 * @method Bridge setIdentifier(Property\Identifier $identifier)
 * @method Bridge setImage(Property\Image $image)
 * @method Bridge setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Bridge setIsicV4(Property\IsicV4 $isicV4)
 * @method Bridge setLogo(Property\Logo $logo)
 * @method Bridge setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Bridge setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Bridge setName(Property\Name $name)
 * @method Bridge setOpeningHours(Property\OpeningHours $openingHours)
 * @method Bridge setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Bridge setPhoto(Property\Photo $photo)
 * @method Bridge setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Bridge setPublicAccess(Property\PublicAccess $publicAccess)
 * @method Bridge setReview(Property\Review $review)
 * @method Bridge setSameAs(Property\SameAs $sameAs)
 * @method Bridge setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Bridge setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Bridge setTelephone(Property\Telephone $telephone)
 * @method Bridge setUrl(Property\Url $url)
 */
class Bridge extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Bridge';
	}
}