<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Beach.
 * 
 * @method Beach setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Beach setAdditionalType(Property\AdditionalType $additionalType)
 * @method Beach setAddress(Property\Address $address)
 * @method Beach setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Beach setAlternateName(Property\AlternateName $alternateName)
 * @method Beach setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Beach setBranchCode(Property\BranchCode $branchCode)
 * @method Beach setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Beach setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Beach setDescription(Property\Description $description)
 * @method Beach setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Beach setEvent(Property\Event $event)
 * @method Beach setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Beach setGeo(Property\Geo $geo)
 * @method Beach setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Beach setHasMap(Property\HasMap $hasMap)
 * @method Beach setImage(Property\Image $image)
 * @method Beach setIsicV4(Property\IsicV4 $isicV4)
 * @method Beach setLogo(Property\Logo $logo)
 * @method Beach setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Beach setName(Property\Name $name)
 * @method Beach setOpeningHours(Property\OpeningHours $openingHours)
 * @method Beach setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Beach setPhoto(Property\Photo $photo)
 * @method Beach setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Beach setReview(Property\Review $review)
 * @method Beach setSameAs(Property\SameAs $sameAs)
 * @method Beach setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Beach setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Beach setTelephone(Property\Telephone $telephone)
 * @method Beach setUrl(Property\Url $url)
 */
class Beach extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Beach';
	}
}