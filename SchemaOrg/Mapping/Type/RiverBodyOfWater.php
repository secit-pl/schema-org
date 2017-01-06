<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RiverBodyOfWater.
 * 
 * @method RiverBodyOfWater setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RiverBodyOfWater setAdditionalType(Property\AdditionalType $additionalType)
 * @method RiverBodyOfWater setAddress(Property\Address $address)
 * @method RiverBodyOfWater setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method RiverBodyOfWater setAlternateName(Property\AlternateName $alternateName)
 * @method RiverBodyOfWater setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method RiverBodyOfWater setBranchCode(Property\BranchCode $branchCode)
 * @method RiverBodyOfWater setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method RiverBodyOfWater setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method RiverBodyOfWater setDescription(Property\Description $description)
 * @method RiverBodyOfWater setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RiverBodyOfWater setEvent(Property\Event $event)
 * @method RiverBodyOfWater setFaxNumber(Property\FaxNumber $faxNumber)
 * @method RiverBodyOfWater setGeo(Property\Geo $geo)
 * @method RiverBodyOfWater setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method RiverBodyOfWater setHasMap(Property\HasMap $hasMap)
 * @method RiverBodyOfWater setImage(Property\Image $image)
 * @method RiverBodyOfWater setIsicV4(Property\IsicV4 $isicV4)
 * @method RiverBodyOfWater setLogo(Property\Logo $logo)
 * @method RiverBodyOfWater setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RiverBodyOfWater setName(Property\Name $name)
 * @method RiverBodyOfWater setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method RiverBodyOfWater setPhoto(Property\Photo $photo)
 * @method RiverBodyOfWater setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RiverBodyOfWater setReview(Property\Review $review)
 * @method RiverBodyOfWater setSameAs(Property\SameAs $sameAs)
 * @method RiverBodyOfWater setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method RiverBodyOfWater setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method RiverBodyOfWater setTelephone(Property\Telephone $telephone)
 * @method RiverBodyOfWater setUrl(Property\Url $url)
 */
class RiverBodyOfWater extends BodyOfWater {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RiverBodyOfWater';
	}
}