<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HinduTemple.
 * 
 * @method HinduTemple setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HinduTemple setAdditionalType(Property\AdditionalType $additionalType)
 * @method HinduTemple setAddress(Property\Address $address)
 * @method HinduTemple setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method HinduTemple setAlternateName(Property\AlternateName $alternateName)
 * @method HinduTemple setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method HinduTemple setBranchCode(Property\BranchCode $branchCode)
 * @method HinduTemple setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method HinduTemple setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method HinduTemple setDescription(Property\Description $description)
 * @method HinduTemple setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HinduTemple setEvent(Property\Event $event)
 * @method HinduTemple setFaxNumber(Property\FaxNumber $faxNumber)
 * @method HinduTemple setGeo(Property\Geo $geo)
 * @method HinduTemple setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method HinduTemple setHasMap(Property\HasMap $hasMap)
 * @method HinduTemple setImage(Property\Image $image)
 * @method HinduTemple setIsicV4(Property\IsicV4 $isicV4)
 * @method HinduTemple setLogo(Property\Logo $logo)
 * @method HinduTemple setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HinduTemple setName(Property\Name $name)
 * @method HinduTemple setOpeningHours(Property\OpeningHours $openingHours)
 * @method HinduTemple setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method HinduTemple setPhoto(Property\Photo $photo)
 * @method HinduTemple setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HinduTemple setReview(Property\Review $review)
 * @method HinduTemple setSameAs(Property\SameAs $sameAs)
 * @method HinduTemple setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method HinduTemple setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method HinduTemple setTelephone(Property\Telephone $telephone)
 * @method HinduTemple setUrl(Property\Url $url)
 */
class HinduTemple extends PlaceOfWorship {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HinduTemple';
	}
}