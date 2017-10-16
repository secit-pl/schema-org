<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusStation.
 * 
 * @method BusStation setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BusStation setAdditionalType(Property\AdditionalType $additionalType)
 * @method BusStation setAddress(Property\Address $address)
 * @method BusStation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BusStation setAlternateName(Property\AlternateName $alternateName)
 * @method BusStation setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method BusStation setBranchCode(Property\BranchCode $branchCode)
 * @method BusStation setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method BusStation setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method BusStation setDescription(Property\Description $description)
 * @method BusStation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BusStation setEvent(Property\Event $event)
 * @method BusStation setFaxNumber(Property\FaxNumber $faxNumber)
 * @method BusStation setGeo(Property\Geo $geo)
 * @method BusStation setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method BusStation setHasMap(Property\HasMap $hasMap)
 * @method BusStation setIdentifier(Property\Identifier $identifier)
 * @method BusStation setImage(Property\Image $image)
 * @method BusStation setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method BusStation setIsicV4(Property\IsicV4 $isicV4)
 * @method BusStation setLogo(Property\Logo $logo)
 * @method BusStation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BusStation setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method BusStation setName(Property\Name $name)
 * @method BusStation setOpeningHours(Property\OpeningHours $openingHours)
 * @method BusStation setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method BusStation setPhoto(Property\Photo $photo)
 * @method BusStation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BusStation setPublicAccess(Property\PublicAccess $publicAccess)
 * @method BusStation setReview(Property\Review $review)
 * @method BusStation setSameAs(Property\SameAs $sameAs)
 * @method BusStation setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method BusStation setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method BusStation setTelephone(Property\Telephone $telephone)
 * @method BusStation setUrl(Property\Url $url)
 */
class BusStation extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusStation';
	}
}