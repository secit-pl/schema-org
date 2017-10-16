<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Mosque.
 * 
 * @method Mosque setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Mosque setAdditionalType(Property\AdditionalType $additionalType)
 * @method Mosque setAddress(Property\Address $address)
 * @method Mosque setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Mosque setAlternateName(Property\AlternateName $alternateName)
 * @method Mosque setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Mosque setBranchCode(Property\BranchCode $branchCode)
 * @method Mosque setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Mosque setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Mosque setDescription(Property\Description $description)
 * @method Mosque setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Mosque setEvent(Property\Event $event)
 * @method Mosque setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Mosque setGeo(Property\Geo $geo)
 * @method Mosque setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Mosque setHasMap(Property\HasMap $hasMap)
 * @method Mosque setIdentifier(Property\Identifier $identifier)
 * @method Mosque setImage(Property\Image $image)
 * @method Mosque setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Mosque setIsicV4(Property\IsicV4 $isicV4)
 * @method Mosque setLogo(Property\Logo $logo)
 * @method Mosque setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Mosque setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Mosque setName(Property\Name $name)
 * @method Mosque setOpeningHours(Property\OpeningHours $openingHours)
 * @method Mosque setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Mosque setPhoto(Property\Photo $photo)
 * @method Mosque setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Mosque setPublicAccess(Property\PublicAccess $publicAccess)
 * @method Mosque setReview(Property\Review $review)
 * @method Mosque setSameAs(Property\SameAs $sameAs)
 * @method Mosque setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Mosque setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Mosque setTelephone(Property\Telephone $telephone)
 * @method Mosque setUrl(Property\Url $url)
 */
class Mosque extends PlaceOfWorship {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Mosque';
	}
}