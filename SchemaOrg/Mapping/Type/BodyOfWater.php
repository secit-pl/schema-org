<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BodyOfWater.
 * 
 * @method BodyOfWater setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BodyOfWater setAdditionalType(Property\AdditionalType $additionalType)
 * @method BodyOfWater setAddress(Property\Address $address)
 * @method BodyOfWater setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BodyOfWater setAlternateName(Property\AlternateName $alternateName)
 * @method BodyOfWater setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method BodyOfWater setBranchCode(Property\BranchCode $branchCode)
 * @method BodyOfWater setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method BodyOfWater setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method BodyOfWater setDescription(Property\Description $description)
 * @method BodyOfWater setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BodyOfWater setEvent(Property\Event $event)
 * @method BodyOfWater setFaxNumber(Property\FaxNumber $faxNumber)
 * @method BodyOfWater setGeo(Property\Geo $geo)
 * @method BodyOfWater setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method BodyOfWater setHasMap(Property\HasMap $hasMap)
 * @method BodyOfWater setImage(Property\Image $image)
 * @method BodyOfWater setIsicV4(Property\IsicV4 $isicV4)
 * @method BodyOfWater setLogo(Property\Logo $logo)
 * @method BodyOfWater setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BodyOfWater setName(Property\Name $name)
 * @method BodyOfWater setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method BodyOfWater setPhoto(Property\Photo $photo)
 * @method BodyOfWater setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BodyOfWater setReview(Property\Review $review)
 * @method BodyOfWater setSameAs(Property\SameAs $sameAs)
 * @method BodyOfWater setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method BodyOfWater setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method BodyOfWater setTelephone(Property\Telephone $telephone)
 * @method BodyOfWater setUrl(Property\Url $url)
 */
class BodyOfWater extends Landform {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BodyOfWater';
	}
}