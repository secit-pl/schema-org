<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Pond.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PondType instead.
 * 
 * @method Pond setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Pond setAdditionalType(Property\AdditionalType $additionalType)
 * @method Pond setAddress(Property\Address $address)
 * @method Pond setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Pond setAlternateName(Property\AlternateName $alternateName)
 * @method Pond setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Pond setBranchCode(Property\BranchCode $branchCode)
 * @method Pond setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Pond setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Pond setDescription(Property\Description $description)
 * @method Pond setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Pond setEvent(Property\Event $event)
 * @method Pond setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Pond setGeo(Property\Geo $geo)
 * @method Pond setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Pond setHasMap(Property\HasMap $hasMap)
 * @method Pond setIdentifier(Property\Identifier $identifier)
 * @method Pond setImage(Property\Image $image)
 * @method Pond setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Pond setIsicV4(Property\IsicV4 $isicV4)
 * @method Pond setLogo(Property\Logo $logo)
 * @method Pond setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Pond setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Pond setName(Property\Name $name)
 * @method Pond setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Pond setPhoto(Property\Photo $photo)
 * @method Pond setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Pond setPublicAccess(Property\PublicAccess $publicAccess)
 * @method Pond setReview(Property\Review $review)
 * @method Pond setSameAs(Property\SameAs $sameAs)
 * @method Pond setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Pond setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Pond setTelephone(Property\Telephone $telephone)
 * @method Pond setUrl(Property\Url $url)
 */
class Pond extends BodyOfWater {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Pond';
	}
}