<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GovernmentBuilding.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\GovernmentBuildingType instead.
 * 
 * @method GovernmentBuilding setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method GovernmentBuilding setAdditionalType(Property\AdditionalType $additionalType)
 * @method GovernmentBuilding setAddress(Property\Address $address)
 * @method GovernmentBuilding setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method GovernmentBuilding setAlternateName(Property\AlternateName $alternateName)
 * @method GovernmentBuilding setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method GovernmentBuilding setBranchCode(Property\BranchCode $branchCode)
 * @method GovernmentBuilding setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method GovernmentBuilding setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method GovernmentBuilding setDescription(Property\Description $description)
 * @method GovernmentBuilding setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GovernmentBuilding setEvent(Property\Event $event)
 * @method GovernmentBuilding setFaxNumber(Property\FaxNumber $faxNumber)
 * @method GovernmentBuilding setGeo(Property\Geo $geo)
 * @method GovernmentBuilding setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method GovernmentBuilding setHasMap(Property\HasMap $hasMap)
 * @method GovernmentBuilding setIdentifier(Property\Identifier $identifier)
 * @method GovernmentBuilding setImage(Property\Image $image)
 * @method GovernmentBuilding setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method GovernmentBuilding setIsicV4(Property\IsicV4 $isicV4)
 * @method GovernmentBuilding setLogo(Property\Logo $logo)
 * @method GovernmentBuilding setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GovernmentBuilding setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method GovernmentBuilding setName(Property\Name $name)
 * @method GovernmentBuilding setOpeningHours(Property\OpeningHours $openingHours)
 * @method GovernmentBuilding setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method GovernmentBuilding setPhoto(Property\Photo $photo)
 * @method GovernmentBuilding setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GovernmentBuilding setPublicAccess(Property\PublicAccess $publicAccess)
 * @method GovernmentBuilding setReview(Property\Review $review)
 * @method GovernmentBuilding setSameAs(Property\SameAs $sameAs)
 * @method GovernmentBuilding setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method GovernmentBuilding setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method GovernmentBuilding setTelephone(Property\Telephone $telephone)
 * @method GovernmentBuilding setUrl(Property\Url $url)
 */
class GovernmentBuilding extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GovernmentBuilding';
	}
}