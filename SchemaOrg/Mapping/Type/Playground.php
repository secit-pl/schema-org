<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Playground.
 * 
 * @method Playground setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Playground setAdditionalType(Property\AdditionalType $additionalType)
 * @method Playground setAddress(Property\Address $address)
 * @method Playground setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Playground setAlternateName(Property\AlternateName $alternateName)
 * @method Playground setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Playground setBranchCode(Property\BranchCode $branchCode)
 * @method Playground setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Playground setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Playground setDescription(Property\Description $description)
 * @method Playground setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Playground setEvent(Property\Event $event)
 * @method Playground setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Playground setGeo(Property\Geo $geo)
 * @method Playground setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Playground setHasMap(Property\HasMap $hasMap)
 * @method Playground setIdentifier(Property\Identifier $identifier)
 * @method Playground setImage(Property\Image $image)
 * @method Playground setIsicV4(Property\IsicV4 $isicV4)
 * @method Playground setLogo(Property\Logo $logo)
 * @method Playground setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Playground setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Playground setName(Property\Name $name)
 * @method Playground setOpeningHours(Property\OpeningHours $openingHours)
 * @method Playground setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Playground setPhoto(Property\Photo $photo)
 * @method Playground setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Playground setReview(Property\Review $review)
 * @method Playground setSameAs(Property\SameAs $sameAs)
 * @method Playground setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Playground setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Playground setTelephone(Property\Telephone $telephone)
 * @method Playground setUrl(Property\Url $url)
 */
class Playground extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Playground';
	}
}