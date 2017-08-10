<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Landform.
 * 
 * @method Landform setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Landform setAdditionalType(Property\AdditionalType $additionalType)
 * @method Landform setAddress(Property\Address $address)
 * @method Landform setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Landform setAlternateName(Property\AlternateName $alternateName)
 * @method Landform setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Landform setBranchCode(Property\BranchCode $branchCode)
 * @method Landform setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method Landform setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method Landform setDescription(Property\Description $description)
 * @method Landform setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Landform setEvent(Property\Event $event)
 * @method Landform setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Landform setGeo(Property\Geo $geo)
 * @method Landform setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Landform setHasMap(Property\HasMap $hasMap)
 * @method Landform setIdentifier(Property\Identifier $identifier)
 * @method Landform setImage(Property\Image $image)
 * @method Landform setIsicV4(Property\IsicV4 $isicV4)
 * @method Landform setLogo(Property\Logo $logo)
 * @method Landform setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Landform setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Landform setName(Property\Name $name)
 * @method Landform setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method Landform setPhoto(Property\Photo $photo)
 * @method Landform setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Landform setReview(Property\Review $review)
 * @method Landform setSameAs(Property\SameAs $sameAs)
 * @method Landform setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method Landform setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method Landform setTelephone(Property\Telephone $telephone)
 * @method Landform setUrl(Property\Url $url)
 */
class Landform extends Place {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Landform';
	}
}