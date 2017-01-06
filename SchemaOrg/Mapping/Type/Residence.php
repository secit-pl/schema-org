<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Residence.
 * 
 * @method Residence setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Residence setAdditionalType(Property\AdditionalType $additionalType)
 * @method Residence setAddress(Property\Address $address)
 * @method Residence setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Residence setAlternateName(Property\AlternateName $alternateName)
 * @method Residence setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Residence setBranchCode(Property\BranchCode $branchCode)
 * @method Residence setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Residence setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Residence setDescription(Property\Description $description)
 * @method Residence setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Residence setEvent(Property\Event $event)
 * @method Residence setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Residence setGeo(Property\Geo $geo)
 * @method Residence setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Residence setHasMap(Property\HasMap $hasMap)
 * @method Residence setImage(Property\Image $image)
 * @method Residence setIsicV4(Property\IsicV4 $isicV4)
 * @method Residence setLogo(Property\Logo $logo)
 * @method Residence setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Residence setName(Property\Name $name)
 * @method Residence setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Residence setPhoto(Property\Photo $photo)
 * @method Residence setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Residence setReview(Property\Review $review)
 * @method Residence setSameAs(Property\SameAs $sameAs)
 * @method Residence setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Residence setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Residence setTelephone(Property\Telephone $telephone)
 * @method Residence setUrl(Property\Url $url)
 */
class Residence extends Place {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Residence';
	}
}