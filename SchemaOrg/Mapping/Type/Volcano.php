<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Volcano.
 * 
 * @method Volcano setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Volcano setAdditionalType(Property\AdditionalType $additionalType)
 * @method Volcano setAddress(Property\Address $address)
 * @method Volcano setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Volcano setAlternateName(Property\AlternateName $alternateName)
 * @method Volcano setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Volcano setBranchCode(Property\BranchCode $branchCode)
 * @method Volcano setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Volcano setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Volcano setDescription(Property\Description $description)
 * @method Volcano setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Volcano setEvent(Property\Event $event)
 * @method Volcano setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Volcano setGeo(Property\Geo $geo)
 * @method Volcano setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Volcano setHasMap(Property\HasMap $hasMap)
 * @method Volcano setIdentifier(Property\Identifier $identifier)
 * @method Volcano setImage(Property\Image $image)
 * @method Volcano setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Volcano setIsicV4(Property\IsicV4 $isicV4)
 * @method Volcano setLogo(Property\Logo $logo)
 * @method Volcano setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Volcano setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Volcano setName(Property\Name $name)
 * @method Volcano setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Volcano setPhoto(Property\Photo $photo)
 * @method Volcano setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Volcano setPublicAccess(Property\PublicAccess $publicAccess)
 * @method Volcano setReview(Property\Review $review)
 * @method Volcano setSameAs(Property\SameAs $sameAs)
 * @method Volcano setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Volcano setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Volcano setTelephone(Property\Telephone $telephone)
 * @method Volcano setUrl(Property\Url $url)
 */
class Volcano extends Landform {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Volcano';
	}
}