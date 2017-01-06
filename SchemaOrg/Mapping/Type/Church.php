<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Church.
 * 
 * @method Church setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Church setAdditionalType(Property\AdditionalType $additionalType)
 * @method Church setAddress(Property\Address $address)
 * @method Church setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Church setAlternateName(Property\AlternateName $alternateName)
 * @method Church setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Church setBranchCode(Property\BranchCode $branchCode)
 * @method Church setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Church setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Church setDescription(Property\Description $description)
 * @method Church setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Church setEvent(Property\Event $event)
 * @method Church setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Church setGeo(Property\Geo $geo)
 * @method Church setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Church setHasMap(Property\HasMap $hasMap)
 * @method Church setImage(Property\Image $image)
 * @method Church setIsicV4(Property\IsicV4 $isicV4)
 * @method Church setLogo(Property\Logo $logo)
 * @method Church setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Church setName(Property\Name $name)
 * @method Church setOpeningHours(Property\OpeningHours $openingHours)
 * @method Church setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Church setPhoto(Property\Photo $photo)
 * @method Church setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Church setReview(Property\Review $review)
 * @method Church setSameAs(Property\SameAs $sameAs)
 * @method Church setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Church setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Church setTelephone(Property\Telephone $telephone)
 * @method Church setUrl(Property\Url $url)
 */
class Church extends PlaceOfWorship {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Church';
	}
}