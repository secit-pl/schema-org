<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Synagogue.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\SynagogueType instead.
 * 
 * @method Synagogue setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Synagogue setAdditionalType(Property\AdditionalType $additionalType)
 * @method Synagogue setAddress(Property\Address $address)
 * @method Synagogue setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Synagogue setAlternateName(Property\AlternateName $alternateName)
 * @method Synagogue setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Synagogue setBranchCode(Property\BranchCode $branchCode)
 * @method Synagogue setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Synagogue setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Synagogue setDescription(Property\Description $description)
 * @method Synagogue setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Synagogue setEvent(Property\Event $event)
 * @method Synagogue setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Synagogue setGeo(Property\Geo $geo)
 * @method Synagogue setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Synagogue setHasMap(Property\HasMap $hasMap)
 * @method Synagogue setIdentifier(Property\Identifier $identifier)
 * @method Synagogue setImage(Property\Image $image)
 * @method Synagogue setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Synagogue setIsicV4(Property\IsicV4 $isicV4)
 * @method Synagogue setLogo(Property\Logo $logo)
 * @method Synagogue setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Synagogue setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Synagogue setName(Property\Name $name)
 * @method Synagogue setOpeningHours(Property\OpeningHours $openingHours)
 * @method Synagogue setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Synagogue setPhoto(Property\Photo $photo)
 * @method Synagogue setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Synagogue setPublicAccess(Property\PublicAccess $publicAccess)
 * @method Synagogue setReview(Property\Review $review)
 * @method Synagogue setSameAs(Property\SameAs $sameAs)
 * @method Synagogue setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Synagogue setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Synagogue setTelephone(Property\Telephone $telephone)
 * @method Synagogue setUrl(Property\Url $url)
 */
class Synagogue extends PlaceOfWorship {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Synagogue';
	}
}