<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class State.
 * 
 * @method State setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method State setAdditionalType(Property\AdditionalType $additionalType)
 * @method State setAddress(Property\Address $address)
 * @method State setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method State setAlternateName(Property\AlternateName $alternateName)
 * @method State setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method State setBranchCode(Property\BranchCode $branchCode)
 * @method State setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method State setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method State setDescription(Property\Description $description)
 * @method State setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method State setEvent(Property\Event $event)
 * @method State setFaxNumber(Property\FaxNumber $faxNumber)
 * @method State setGeo(Property\Geo $geo)
 * @method State setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method State setHasMap(Property\HasMap $hasMap)
 * @method State setImage(Property\Image $image)
 * @method State setIsicV4(Property\IsicV4 $isicV4)
 * @method State setLogo(Property\Logo $logo)
 * @method State setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method State setName(Property\Name $name)
 * @method State setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method State setPhoto(Property\Photo $photo)
 * @method State setPotentialAction(Property\PotentialAction $potentialAction)
 * @method State setReview(Property\Review $review)
 * @method State setSameAs(Property\SameAs $sameAs)
 * @method State setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method State setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method State setTelephone(Property\Telephone $telephone)
 * @method State setUrl(Property\Url $url)
 */
class State extends AdministrativeArea {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/State';
	}
}