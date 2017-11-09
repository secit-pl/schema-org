<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Continent.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ContinentType instead.
 * 
 * @method Continent setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Continent setAdditionalType(Property\AdditionalType $additionalType)
 * @method Continent setAddress(Property\Address $address)
 * @method Continent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Continent setAlternateName(Property\AlternateName $alternateName)
 * @method Continent setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Continent setBranchCode(Property\BranchCode $branchCode)
 * @method Continent setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Continent setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Continent setDescription(Property\Description $description)
 * @method Continent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Continent setEvent(Property\Event $event)
 * @method Continent setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Continent setGeo(Property\Geo $geo)
 * @method Continent setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Continent setHasMap(Property\HasMap $hasMap)
 * @method Continent setIdentifier(Property\Identifier $identifier)
 * @method Continent setImage(Property\Image $image)
 * @method Continent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Continent setIsicV4(Property\IsicV4 $isicV4)
 * @method Continent setLogo(Property\Logo $logo)
 * @method Continent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Continent setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Continent setName(Property\Name $name)
 * @method Continent setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Continent setPhoto(Property\Photo $photo)
 * @method Continent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Continent setPublicAccess(Property\PublicAccess $publicAccess)
 * @method Continent setReview(Property\Review $review)
 * @method Continent setSameAs(Property\SameAs $sameAs)
 * @method Continent setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Continent setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Continent setTelephone(Property\Telephone $telephone)
 * @method Continent setUrl(Property\Url $url)
 */
class Continent extends Landform {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Continent';
	}
}