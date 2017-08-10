<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Aquarium.
 * 
 * @method Aquarium setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Aquarium setAdditionalType(Property\AdditionalType $additionalType)
 * @method Aquarium setAddress(Property\Address $address)
 * @method Aquarium setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Aquarium setAlternateName(Property\AlternateName $alternateName)
 * @method Aquarium setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Aquarium setBranchCode(Property\BranchCode $branchCode)
 * @method Aquarium setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Aquarium setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Aquarium setDescription(Property\Description $description)
 * @method Aquarium setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Aquarium setEvent(Property\Event $event)
 * @method Aquarium setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Aquarium setGeo(Property\Geo $geo)
 * @method Aquarium setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Aquarium setHasMap(Property\HasMap $hasMap)
 * @method Aquarium setIdentifier(Property\Identifier $identifier)
 * @method Aquarium setImage(Property\Image $image)
 * @method Aquarium setIsicV4(Property\IsicV4 $isicV4)
 * @method Aquarium setLogo(Property\Logo $logo)
 * @method Aquarium setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Aquarium setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Aquarium setName(Property\Name $name)
 * @method Aquarium setOpeningHours(Property\OpeningHours $openingHours)
 * @method Aquarium setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Aquarium setPhoto(Property\Photo $photo)
 * @method Aquarium setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Aquarium setReview(Property\Review $review)
 * @method Aquarium setSameAs(Property\SameAs $sameAs)
 * @method Aquarium setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Aquarium setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Aquarium setTelephone(Property\Telephone $telephone)
 * @method Aquarium setUrl(Property\Url $url)
 */
class Aquarium extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Aquarium';
	}
}