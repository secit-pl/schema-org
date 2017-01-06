<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SeaBodyOfWater.
 * 
 * @method SeaBodyOfWater setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SeaBodyOfWater setAdditionalType(Property\AdditionalType $additionalType)
 * @method SeaBodyOfWater setAddress(Property\Address $address)
 * @method SeaBodyOfWater setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SeaBodyOfWater setAlternateName(Property\AlternateName $alternateName)
 * @method SeaBodyOfWater setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method SeaBodyOfWater setBranchCode(Property\BranchCode $branchCode)
 * @method SeaBodyOfWater setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method SeaBodyOfWater setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method SeaBodyOfWater setDescription(Property\Description $description)
 * @method SeaBodyOfWater setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SeaBodyOfWater setEvent(Property\Event $event)
 * @method SeaBodyOfWater setFaxNumber(Property\FaxNumber $faxNumber)
 * @method SeaBodyOfWater setGeo(Property\Geo $geo)
 * @method SeaBodyOfWater setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method SeaBodyOfWater setHasMap(Property\HasMap $hasMap)
 * @method SeaBodyOfWater setImage(Property\Image $image)
 * @method SeaBodyOfWater setIsicV4(Property\IsicV4 $isicV4)
 * @method SeaBodyOfWater setLogo(Property\Logo $logo)
 * @method SeaBodyOfWater setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SeaBodyOfWater setName(Property\Name $name)
 * @method SeaBodyOfWater setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method SeaBodyOfWater setPhoto(Property\Photo $photo)
 * @method SeaBodyOfWater setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SeaBodyOfWater setReview(Property\Review $review)
 * @method SeaBodyOfWater setSameAs(Property\SameAs $sameAs)
 * @method SeaBodyOfWater setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method SeaBodyOfWater setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method SeaBodyOfWater setTelephone(Property\Telephone $telephone)
 * @method SeaBodyOfWater setUrl(Property\Url $url)
 */
class SeaBodyOfWater extends BodyOfWater {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SeaBodyOfWater';
	}
}