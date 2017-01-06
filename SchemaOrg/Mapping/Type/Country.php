<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Country.
 * 
 * @method Country setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Country setAdditionalType(Property\AdditionalType $additionalType)
 * @method Country setAddress(Property\Address $address)
 * @method Country setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Country setAlternateName(Property\AlternateName $alternateName)
 * @method Country setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Country setBranchCode(Property\BranchCode $branchCode)
 * @method Country setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Country setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Country setDescription(Property\Description $description)
 * @method Country setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Country setEvent(Property\Event $event)
 * @method Country setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Country setGeo(Property\Geo $geo)
 * @method Country setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Country setHasMap(Property\HasMap $hasMap)
 * @method Country setImage(Property\Image $image)
 * @method Country setIsicV4(Property\IsicV4 $isicV4)
 * @method Country setLogo(Property\Logo $logo)
 * @method Country setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Country setName(Property\Name $name)
 * @method Country setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Country setPhoto(Property\Photo $photo)
 * @method Country setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Country setReview(Property\Review $review)
 * @method Country setSameAs(Property\SameAs $sameAs)
 * @method Country setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Country setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Country setTelephone(Property\Telephone $telephone)
 * @method Country setUrl(Property\Url $url)
 */
class Country extends AdministrativeArea {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Country';
	}
}