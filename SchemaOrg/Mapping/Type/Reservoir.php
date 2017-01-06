<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Reservoir.
 * 
 * @method Reservoir setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Reservoir setAdditionalType(Property\AdditionalType $additionalType)
 * @method Reservoir setAddress(Property\Address $address)
 * @method Reservoir setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Reservoir setAlternateName(Property\AlternateName $alternateName)
 * @method Reservoir setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Reservoir setBranchCode(Property\BranchCode $branchCode)
 * @method Reservoir setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Reservoir setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Reservoir setDescription(Property\Description $description)
 * @method Reservoir setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Reservoir setEvent(Property\Event $event)
 * @method Reservoir setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Reservoir setGeo(Property\Geo $geo)
 * @method Reservoir setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Reservoir setHasMap(Property\HasMap $hasMap)
 * @method Reservoir setImage(Property\Image $image)
 * @method Reservoir setIsicV4(Property\IsicV4 $isicV4)
 * @method Reservoir setLogo(Property\Logo $logo)
 * @method Reservoir setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Reservoir setName(Property\Name $name)
 * @method Reservoir setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Reservoir setPhoto(Property\Photo $photo)
 * @method Reservoir setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Reservoir setReview(Property\Review $review)
 * @method Reservoir setSameAs(Property\SameAs $sameAs)
 * @method Reservoir setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Reservoir setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Reservoir setTelephone(Property\Telephone $telephone)
 * @method Reservoir setUrl(Property\Url $url)
 */
class Reservoir extends BodyOfWater {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Reservoir';
	}
}