<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Courthouse.
 * 
 * @method Courthouse setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Courthouse setAdditionalType(Property\AdditionalType $additionalType)
 * @method Courthouse setAddress(Property\Address $address)
 * @method Courthouse setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Courthouse setAlternateName(Property\AlternateName $alternateName)
 * @method Courthouse setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Courthouse setBranchCode(Property\BranchCode $branchCode)
 * @method Courthouse setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Courthouse setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Courthouse setDescription(Property\Description $description)
 * @method Courthouse setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Courthouse setEvent(Property\Event $event)
 * @method Courthouse setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Courthouse setGeo(Property\Geo $geo)
 * @method Courthouse setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Courthouse setHasMap(Property\HasMap $hasMap)
 * @method Courthouse setImage(Property\Image $image)
 * @method Courthouse setIsicV4(Property\IsicV4 $isicV4)
 * @method Courthouse setLogo(Property\Logo $logo)
 * @method Courthouse setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Courthouse setName(Property\Name $name)
 * @method Courthouse setOpeningHours(Property\OpeningHours $openingHours)
 * @method Courthouse setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Courthouse setPhoto(Property\Photo $photo)
 * @method Courthouse setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Courthouse setReview(Property\Review $review)
 * @method Courthouse setSameAs(Property\SameAs $sameAs)
 * @method Courthouse setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Courthouse setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Courthouse setTelephone(Property\Telephone $telephone)
 * @method Courthouse setUrl(Property\Url $url)
 */
class Courthouse extends GovernmentBuilding {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Courthouse';
	}
}