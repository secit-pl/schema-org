<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SubwayStation.
 * 
 * @method SubwayStation setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SubwayStation setAdditionalType(Property\AdditionalType $additionalType)
 * @method SubwayStation setAddress(Property\Address $address)
 * @method SubwayStation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SubwayStation setAlternateName(Property\AlternateName $alternateName)
 * @method SubwayStation setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method SubwayStation setBranchCode(Property\BranchCode $branchCode)
 * @method SubwayStation setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method SubwayStation setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method SubwayStation setDescription(Property\Description $description)
 * @method SubwayStation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SubwayStation setEvent(Property\Event $event)
 * @method SubwayStation setFaxNumber(Property\FaxNumber $faxNumber)
 * @method SubwayStation setGeo(Property\Geo $geo)
 * @method SubwayStation setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method SubwayStation setHasMap(Property\HasMap $hasMap)
 * @method SubwayStation setImage(Property\Image $image)
 * @method SubwayStation setIsicV4(Property\IsicV4 $isicV4)
 * @method SubwayStation setLogo(Property\Logo $logo)
 * @method SubwayStation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SubwayStation setName(Property\Name $name)
 * @method SubwayStation setOpeningHours(Property\OpeningHours $openingHours)
 * @method SubwayStation setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method SubwayStation setPhoto(Property\Photo $photo)
 * @method SubwayStation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SubwayStation setReview(Property\Review $review)
 * @method SubwayStation setSameAs(Property\SameAs $sameAs)
 * @method SubwayStation setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method SubwayStation setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method SubwayStation setTelephone(Property\Telephone $telephone)
 * @method SubwayStation setUrl(Property\Url $url)
 */
class SubwayStation extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SubwayStation';
	}
}