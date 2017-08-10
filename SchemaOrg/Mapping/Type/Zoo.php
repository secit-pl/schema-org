<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Zoo.
 * 
 * @method Zoo setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Zoo setAdditionalType(Property\AdditionalType $additionalType)
 * @method Zoo setAddress(Property\Address $address)
 * @method Zoo setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Zoo setAlternateName(Property\AlternateName $alternateName)
 * @method Zoo setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Zoo setBranchCode(Property\BranchCode $branchCode)
 * @method Zoo setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Zoo setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Zoo setDescription(Property\Description $description)
 * @method Zoo setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Zoo setEvent(Property\Event $event)
 * @method Zoo setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Zoo setGeo(Property\Geo $geo)
 * @method Zoo setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Zoo setHasMap(Property\HasMap $hasMap)
 * @method Zoo setIdentifier(Property\Identifier $identifier)
 * @method Zoo setImage(Property\Image $image)
 * @method Zoo setIsicV4(Property\IsicV4 $isicV4)
 * @method Zoo setLogo(Property\Logo $logo)
 * @method Zoo setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Zoo setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Zoo setName(Property\Name $name)
 * @method Zoo setOpeningHours(Property\OpeningHours $openingHours)
 * @method Zoo setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Zoo setPhoto(Property\Photo $photo)
 * @method Zoo setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Zoo setReview(Property\Review $review)
 * @method Zoo setSameAs(Property\SameAs $sameAs)
 * @method Zoo setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Zoo setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Zoo setTelephone(Property\Telephone $telephone)
 * @method Zoo setUrl(Property\Url $url)
 */
class Zoo extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Zoo';
	}
}