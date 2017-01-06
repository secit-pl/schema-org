<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Waterfall.
 * 
 * @method Waterfall setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Waterfall setAdditionalType(Property\AdditionalType $additionalType)
 * @method Waterfall setAddress(Property\Address $address)
 * @method Waterfall setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Waterfall setAlternateName(Property\AlternateName $alternateName)
 * @method Waterfall setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Waterfall setBranchCode(Property\BranchCode $branchCode)
 * @method Waterfall setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Waterfall setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Waterfall setDescription(Property\Description $description)
 * @method Waterfall setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Waterfall setEvent(Property\Event $event)
 * @method Waterfall setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Waterfall setGeo(Property\Geo $geo)
 * @method Waterfall setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Waterfall setHasMap(Property\HasMap $hasMap)
 * @method Waterfall setImage(Property\Image $image)
 * @method Waterfall setIsicV4(Property\IsicV4 $isicV4)
 * @method Waterfall setLogo(Property\Logo $logo)
 * @method Waterfall setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Waterfall setName(Property\Name $name)
 * @method Waterfall setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Waterfall setPhoto(Property\Photo $photo)
 * @method Waterfall setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Waterfall setReview(Property\Review $review)
 * @method Waterfall setSameAs(Property\SameAs $sameAs)
 * @method Waterfall setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Waterfall setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Waterfall setTelephone(Property\Telephone $telephone)
 * @method Waterfall setUrl(Property\Url $url)
 */
class Waterfall extends BodyOfWater {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Waterfall';
	}
}