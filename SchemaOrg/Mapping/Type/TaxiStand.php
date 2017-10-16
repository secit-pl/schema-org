<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TaxiStand.
 * 
 * @method TaxiStand setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TaxiStand setAdditionalType(Property\AdditionalType $additionalType)
 * @method TaxiStand setAddress(Property\Address $address)
 * @method TaxiStand setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TaxiStand setAlternateName(Property\AlternateName $alternateName)
 * @method TaxiStand setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method TaxiStand setBranchCode(Property\BranchCode $branchCode)
 * @method TaxiStand setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method TaxiStand setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method TaxiStand setDescription(Property\Description $description)
 * @method TaxiStand setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TaxiStand setEvent(Property\Event $event)
 * @method TaxiStand setFaxNumber(Property\FaxNumber $faxNumber)
 * @method TaxiStand setGeo(Property\Geo $geo)
 * @method TaxiStand setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method TaxiStand setHasMap(Property\HasMap $hasMap)
 * @method TaxiStand setIdentifier(Property\Identifier $identifier)
 * @method TaxiStand setImage(Property\Image $image)
 * @method TaxiStand setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method TaxiStand setIsicV4(Property\IsicV4 $isicV4)
 * @method TaxiStand setLogo(Property\Logo $logo)
 * @method TaxiStand setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TaxiStand setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method TaxiStand setName(Property\Name $name)
 * @method TaxiStand setOpeningHours(Property\OpeningHours $openingHours)
 * @method TaxiStand setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method TaxiStand setPhoto(Property\Photo $photo)
 * @method TaxiStand setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TaxiStand setPublicAccess(Property\PublicAccess $publicAccess)
 * @method TaxiStand setReview(Property\Review $review)
 * @method TaxiStand setSameAs(Property\SameAs $sameAs)
 * @method TaxiStand setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method TaxiStand setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method TaxiStand setTelephone(Property\Telephone $telephone)
 * @method TaxiStand setUrl(Property\Url $url)
 */
class TaxiStand extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TaxiStand';
	}
}