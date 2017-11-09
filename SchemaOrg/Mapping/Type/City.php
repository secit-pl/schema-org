<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class City.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CityType instead.
 * 
 * @method City setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method City setAdditionalType(Property\AdditionalType $additionalType)
 * @method City setAddress(Property\Address $address)
 * @method City setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method City setAlternateName(Property\AlternateName $alternateName)
 * @method City setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method City setBranchCode(Property\BranchCode $branchCode)
 * @method City setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method City setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method City setDescription(Property\Description $description)
 * @method City setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method City setEvent(Property\Event $event)
 * @method City setFaxNumber(Property\FaxNumber $faxNumber)
 * @method City setGeo(Property\Geo $geo)
 * @method City setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method City setHasMap(Property\HasMap $hasMap)
 * @method City setIdentifier(Property\Identifier $identifier)
 * @method City setImage(Property\Image $image)
 * @method City setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method City setIsicV4(Property\IsicV4 $isicV4)
 * @method City setLogo(Property\Logo $logo)
 * @method City setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method City setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method City setName(Property\Name $name)
 * @method City setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method City setPhoto(Property\Photo $photo)
 * @method City setPotentialAction(Property\PotentialAction $potentialAction)
 * @method City setPublicAccess(Property\PublicAccess $publicAccess)
 * @method City setReview(Property\Review $review)
 * @method City setSameAs(Property\SameAs $sameAs)
 * @method City setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method City setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method City setTelephone(Property\Telephone $telephone)
 * @method City setUrl(Property\Url $url)
 */
class City extends AdministrativeArea {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/City';
	}
}