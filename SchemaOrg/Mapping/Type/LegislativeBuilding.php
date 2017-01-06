<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LegislativeBuilding.
 * 
 * @method LegislativeBuilding setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LegislativeBuilding setAdditionalType(Property\AdditionalType $additionalType)
 * @method LegislativeBuilding setAddress(Property\Address $address)
 * @method LegislativeBuilding setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method LegislativeBuilding setAlternateName(Property\AlternateName $alternateName)
 * @method LegislativeBuilding setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method LegislativeBuilding setBranchCode(Property\BranchCode $branchCode)
 * @method LegislativeBuilding setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method LegislativeBuilding setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method LegislativeBuilding setDescription(Property\Description $description)
 * @method LegislativeBuilding setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LegislativeBuilding setEvent(Property\Event $event)
 * @method LegislativeBuilding setFaxNumber(Property\FaxNumber $faxNumber)
 * @method LegislativeBuilding setGeo(Property\Geo $geo)
 * @method LegislativeBuilding setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method LegislativeBuilding setHasMap(Property\HasMap $hasMap)
 * @method LegislativeBuilding setImage(Property\Image $image)
 * @method LegislativeBuilding setIsicV4(Property\IsicV4 $isicV4)
 * @method LegislativeBuilding setLogo(Property\Logo $logo)
 * @method LegislativeBuilding setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LegislativeBuilding setName(Property\Name $name)
 * @method LegislativeBuilding setOpeningHours(Property\OpeningHours $openingHours)
 * @method LegislativeBuilding setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method LegislativeBuilding setPhoto(Property\Photo $photo)
 * @method LegislativeBuilding setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LegislativeBuilding setReview(Property\Review $review)
 * @method LegislativeBuilding setSameAs(Property\SameAs $sameAs)
 * @method LegislativeBuilding setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method LegislativeBuilding setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method LegislativeBuilding setTelephone(Property\Telephone $telephone)
 * @method LegislativeBuilding setUrl(Property\Url $url)
 */
class LegislativeBuilding extends GovernmentBuilding {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LegislativeBuilding';
	}
}