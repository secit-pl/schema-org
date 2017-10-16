<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DefenceEstablishment.
 * 
 * @method DefenceEstablishment setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method DefenceEstablishment setAdditionalType(Property\AdditionalType $additionalType)
 * @method DefenceEstablishment setAddress(Property\Address $address)
 * @method DefenceEstablishment setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method DefenceEstablishment setAlternateName(Property\AlternateName $alternateName)
 * @method DefenceEstablishment setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method DefenceEstablishment setBranchCode(Property\BranchCode $branchCode)
 * @method DefenceEstablishment setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method DefenceEstablishment setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method DefenceEstablishment setDescription(Property\Description $description)
 * @method DefenceEstablishment setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DefenceEstablishment setEvent(Property\Event $event)
 * @method DefenceEstablishment setFaxNumber(Property\FaxNumber $faxNumber)
 * @method DefenceEstablishment setGeo(Property\Geo $geo)
 * @method DefenceEstablishment setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method DefenceEstablishment setHasMap(Property\HasMap $hasMap)
 * @method DefenceEstablishment setIdentifier(Property\Identifier $identifier)
 * @method DefenceEstablishment setImage(Property\Image $image)
 * @method DefenceEstablishment setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method DefenceEstablishment setIsicV4(Property\IsicV4 $isicV4)
 * @method DefenceEstablishment setLogo(Property\Logo $logo)
 * @method DefenceEstablishment setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DefenceEstablishment setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method DefenceEstablishment setName(Property\Name $name)
 * @method DefenceEstablishment setOpeningHours(Property\OpeningHours $openingHours)
 * @method DefenceEstablishment setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method DefenceEstablishment setPhoto(Property\Photo $photo)
 * @method DefenceEstablishment setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DefenceEstablishment setPublicAccess(Property\PublicAccess $publicAccess)
 * @method DefenceEstablishment setReview(Property\Review $review)
 * @method DefenceEstablishment setSameAs(Property\SameAs $sameAs)
 * @method DefenceEstablishment setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method DefenceEstablishment setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method DefenceEstablishment setTelephone(Property\Telephone $telephone)
 * @method DefenceEstablishment setUrl(Property\Url $url)
 */
class DefenceEstablishment extends GovernmentBuilding {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DefenceEstablishment';
	}
}