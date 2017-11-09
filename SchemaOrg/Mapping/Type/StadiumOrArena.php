<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class StadiumOrArena.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\StadiumOrArenaType instead.
 * 
 * @method StadiumOrArena setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method StadiumOrArena setAdditionalType(Property\AdditionalType $additionalType)
 * @method StadiumOrArena setAddress(Property\Address $address)
 * @method StadiumOrArena setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method StadiumOrArena setAlternateName(Property\AlternateName $alternateName)
 * @method StadiumOrArena setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method StadiumOrArena setBranchCode(Property\BranchCode $branchCode)
 * @method StadiumOrArena setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method StadiumOrArena setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method StadiumOrArena setDescription(Property\Description $description)
 * @method StadiumOrArena setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method StadiumOrArena setEvent(Property\Event $event)
 * @method StadiumOrArena setFaxNumber(Property\FaxNumber $faxNumber)
 * @method StadiumOrArena setGeo(Property\Geo $geo)
 * @method StadiumOrArena setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method StadiumOrArena setHasMap(Property\HasMap $hasMap)
 * @method StadiumOrArena setIdentifier(Property\Identifier $identifier)
 * @method StadiumOrArena setImage(Property\Image $image)
 * @method StadiumOrArena setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method StadiumOrArena setIsicV4(Property\IsicV4 $isicV4)
 * @method StadiumOrArena setLogo(Property\Logo $logo)
 * @method StadiumOrArena setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method StadiumOrArena setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method StadiumOrArena setName(Property\Name $name)
 * @method StadiumOrArena setOpeningHours(Property\OpeningHours $openingHours)
 * @method StadiumOrArena setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method StadiumOrArena setPhoto(Property\Photo $photo)
 * @method StadiumOrArena setPotentialAction(Property\PotentialAction $potentialAction)
 * @method StadiumOrArena setPublicAccess(Property\PublicAccess $publicAccess)
 * @method StadiumOrArena setReview(Property\Review $review)
 * @method StadiumOrArena setSameAs(Property\SameAs $sameAs)
 * @method StadiumOrArena setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method StadiumOrArena setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method StadiumOrArena setTelephone(Property\Telephone $telephone)
 * @method StadiumOrArena setUrl(Property\Url $url)
 */
class StadiumOrArena extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/StadiumOrArena';
	}
}