<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ApartmentComplex.
 * 
 * @method ApartmentComplex setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ApartmentComplex setAdditionalType(Property\AdditionalType $additionalType)
 * @method ApartmentComplex setAddress(Property\Address $address)
 * @method ApartmentComplex setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ApartmentComplex setAlternateName(Property\AlternateName $alternateName)
 * @method ApartmentComplex setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method ApartmentComplex setBranchCode(Property\BranchCode $branchCode)
 * @method ApartmentComplex setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method ApartmentComplex setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method ApartmentComplex setDescription(Property\Description $description)
 * @method ApartmentComplex setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ApartmentComplex setEvent(Property\Event $event)
 * @method ApartmentComplex setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ApartmentComplex setGeo(Property\Geo $geo)
 * @method ApartmentComplex setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ApartmentComplex setHasMap(Property\HasMap $hasMap)
 * @method ApartmentComplex setImage(Property\Image $image)
 * @method ApartmentComplex setIsicV4(Property\IsicV4 $isicV4)
 * @method ApartmentComplex setLogo(Property\Logo $logo)
 * @method ApartmentComplex setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ApartmentComplex setName(Property\Name $name)
 * @method ApartmentComplex setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method ApartmentComplex setPhoto(Property\Photo $photo)
 * @method ApartmentComplex setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ApartmentComplex setReview(Property\Review $review)
 * @method ApartmentComplex setSameAs(Property\SameAs $sameAs)
 * @method ApartmentComplex setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method ApartmentComplex setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method ApartmentComplex setTelephone(Property\Telephone $telephone)
 * @method ApartmentComplex setUrl(Property\Url $url)
 */
class ApartmentComplex extends Residence {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ApartmentComplex';
	}
}