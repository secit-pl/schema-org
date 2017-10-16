<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusStop.
 * 
 * @method BusStop setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BusStop setAdditionalType(Property\AdditionalType $additionalType)
 * @method BusStop setAddress(Property\Address $address)
 * @method BusStop setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BusStop setAlternateName(Property\AlternateName $alternateName)
 * @method BusStop setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method BusStop setBranchCode(Property\BranchCode $branchCode)
 * @method BusStop setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method BusStop setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method BusStop setDescription(Property\Description $description)
 * @method BusStop setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BusStop setEvent(Property\Event $event)
 * @method BusStop setFaxNumber(Property\FaxNumber $faxNumber)
 * @method BusStop setGeo(Property\Geo $geo)
 * @method BusStop setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method BusStop setHasMap(Property\HasMap $hasMap)
 * @method BusStop setIdentifier(Property\Identifier $identifier)
 * @method BusStop setImage(Property\Image $image)
 * @method BusStop setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method BusStop setIsicV4(Property\IsicV4 $isicV4)
 * @method BusStop setLogo(Property\Logo $logo)
 * @method BusStop setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BusStop setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method BusStop setName(Property\Name $name)
 * @method BusStop setOpeningHours(Property\OpeningHours $openingHours)
 * @method BusStop setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method BusStop setPhoto(Property\Photo $photo)
 * @method BusStop setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BusStop setPublicAccess(Property\PublicAccess $publicAccess)
 * @method BusStop setReview(Property\Review $review)
 * @method BusStop setSameAs(Property\SameAs $sameAs)
 * @method BusStop setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method BusStop setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method BusStop setTelephone(Property\Telephone $telephone)
 * @method BusStop setUrl(Property\Url $url)
 */
class BusStop extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusStop';
	}
}