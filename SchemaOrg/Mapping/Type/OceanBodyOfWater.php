<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OceanBodyOfWater.
 * 
 * @method OceanBodyOfWater setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method OceanBodyOfWater setAdditionalType(Property\AdditionalType $additionalType)
 * @method OceanBodyOfWater setAddress(Property\Address $address)
 * @method OceanBodyOfWater setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method OceanBodyOfWater setAlternateName(Property\AlternateName $alternateName)
 * @method OceanBodyOfWater setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method OceanBodyOfWater setBranchCode(Property\BranchCode $branchCode)
 * @method OceanBodyOfWater setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method OceanBodyOfWater setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method OceanBodyOfWater setDescription(Property\Description $description)
 * @method OceanBodyOfWater setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OceanBodyOfWater setEvent(Property\Event $event)
 * @method OceanBodyOfWater setFaxNumber(Property\FaxNumber $faxNumber)
 * @method OceanBodyOfWater setGeo(Property\Geo $geo)
 * @method OceanBodyOfWater setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method OceanBodyOfWater setHasMap(Property\HasMap $hasMap)
 * @method OceanBodyOfWater setImage(Property\Image $image)
 * @method OceanBodyOfWater setIsicV4(Property\IsicV4 $isicV4)
 * @method OceanBodyOfWater setLogo(Property\Logo $logo)
 * @method OceanBodyOfWater setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OceanBodyOfWater setName(Property\Name $name)
 * @method OceanBodyOfWater setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method OceanBodyOfWater setPhoto(Property\Photo $photo)
 * @method OceanBodyOfWater setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OceanBodyOfWater setReview(Property\Review $review)
 * @method OceanBodyOfWater setSameAs(Property\SameAs $sameAs)
 * @method OceanBodyOfWater setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method OceanBodyOfWater setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method OceanBodyOfWater setTelephone(Property\Telephone $telephone)
 * @method OceanBodyOfWater setUrl(Property\Url $url)
 */
class OceanBodyOfWater extends BodyOfWater {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OceanBodyOfWater';
	}
}