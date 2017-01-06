<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Canal.
 * 
 * @method Canal setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Canal setAdditionalType(Property\AdditionalType $additionalType)
 * @method Canal setAddress(Property\Address $address)
 * @method Canal setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Canal setAlternateName(Property\AlternateName $alternateName)
 * @method Canal setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Canal setBranchCode(Property\BranchCode $branchCode)
 * @method Canal setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Canal setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Canal setDescription(Property\Description $description)
 * @method Canal setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Canal setEvent(Property\Event $event)
 * @method Canal setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Canal setGeo(Property\Geo $geo)
 * @method Canal setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Canal setHasMap(Property\HasMap $hasMap)
 * @method Canal setImage(Property\Image $image)
 * @method Canal setIsicV4(Property\IsicV4 $isicV4)
 * @method Canal setLogo(Property\Logo $logo)
 * @method Canal setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Canal setName(Property\Name $name)
 * @method Canal setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Canal setPhoto(Property\Photo $photo)
 * @method Canal setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Canal setReview(Property\Review $review)
 * @method Canal setSameAs(Property\SameAs $sameAs)
 * @method Canal setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Canal setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Canal setTelephone(Property\Telephone $telephone)
 * @method Canal setUrl(Property\Url $url)
 */
class Canal extends BodyOfWater {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Canal';
	}
}