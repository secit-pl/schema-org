<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Museum.
 * 
 * @method Museum setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Museum setAdditionalType(Property\AdditionalType $additionalType)
 * @method Museum setAddress(Property\Address $address)
 * @method Museum setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Museum setAlternateName(Property\AlternateName $alternateName)
 * @method Museum setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Museum setBranchCode(Property\BranchCode $branchCode)
 * @method Museum setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Museum setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Museum setDescription(Property\Description $description)
 * @method Museum setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Museum setEvent(Property\Event $event)
 * @method Museum setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Museum setGeo(Property\Geo $geo)
 * @method Museum setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Museum setHasMap(Property\HasMap $hasMap)
 * @method Museum setIdentifier(Property\Identifier $identifier)
 * @method Museum setImage(Property\Image $image)
 * @method Museum setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Museum setIsicV4(Property\IsicV4 $isicV4)
 * @method Museum setLogo(Property\Logo $logo)
 * @method Museum setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Museum setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Museum setName(Property\Name $name)
 * @method Museum setOpeningHours(Property\OpeningHours $openingHours)
 * @method Museum setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Museum setPhoto(Property\Photo $photo)
 * @method Museum setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Museum setPublicAccess(Property\PublicAccess $publicAccess)
 * @method Museum setReview(Property\Review $review)
 * @method Museum setSameAs(Property\SameAs $sameAs)
 * @method Museum setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Museum setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Museum setTelephone(Property\Telephone $telephone)
 * @method Museum setUrl(Property\Url $url)
 */
class Museum extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Museum';
	}
}