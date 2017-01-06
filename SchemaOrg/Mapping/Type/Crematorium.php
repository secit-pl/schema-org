<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Crematorium.
 * 
 * @method Crematorium setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Crematorium setAdditionalType(Property\AdditionalType $additionalType)
 * @method Crematorium setAddress(Property\Address $address)
 * @method Crematorium setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Crematorium setAlternateName(Property\AlternateName $alternateName)
 * @method Crematorium setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Crematorium setBranchCode(Property\BranchCode $branchCode)
 * @method Crematorium setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Crematorium setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Crematorium setDescription(Property\Description $description)
 * @method Crematorium setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Crematorium setEvent(Property\Event $event)
 * @method Crematorium setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Crematorium setGeo(Property\Geo $geo)
 * @method Crematorium setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Crematorium setHasMap(Property\HasMap $hasMap)
 * @method Crematorium setImage(Property\Image $image)
 * @method Crematorium setIsicV4(Property\IsicV4 $isicV4)
 * @method Crematorium setLogo(Property\Logo $logo)
 * @method Crematorium setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Crematorium setName(Property\Name $name)
 * @method Crematorium setOpeningHours(Property\OpeningHours $openingHours)
 * @method Crematorium setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Crematorium setPhoto(Property\Photo $photo)
 * @method Crematorium setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Crematorium setReview(Property\Review $review)
 * @method Crematorium setSameAs(Property\SameAs $sameAs)
 * @method Crematorium setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Crematorium setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Crematorium setTelephone(Property\Telephone $telephone)
 * @method Crematorium setUrl(Property\Url $url)
 */
class Crematorium extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Crematorium';
	}
}