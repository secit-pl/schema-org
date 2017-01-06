<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Mountain.
 * 
 * @method Mountain setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Mountain setAdditionalType(Property\AdditionalType $additionalType)
 * @method Mountain setAddress(Property\Address $address)
 * @method Mountain setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Mountain setAlternateName(Property\AlternateName $alternateName)
 * @method Mountain setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Mountain setBranchCode(Property\BranchCode $branchCode)
 * @method Mountain setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Mountain setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Mountain setDescription(Property\Description $description)
 * @method Mountain setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Mountain setEvent(Property\Event $event)
 * @method Mountain setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Mountain setGeo(Property\Geo $geo)
 * @method Mountain setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Mountain setHasMap(Property\HasMap $hasMap)
 * @method Mountain setImage(Property\Image $image)
 * @method Mountain setIsicV4(Property\IsicV4 $isicV4)
 * @method Mountain setLogo(Property\Logo $logo)
 * @method Mountain setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Mountain setName(Property\Name $name)
 * @method Mountain setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Mountain setPhoto(Property\Photo $photo)
 * @method Mountain setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Mountain setReview(Property\Review $review)
 * @method Mountain setSameAs(Property\SameAs $sameAs)
 * @method Mountain setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Mountain setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Mountain setTelephone(Property\Telephone $telephone)
 * @method Mountain setUrl(Property\Url $url)
 */
class Mountain extends Landform {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Mountain';
	}
}