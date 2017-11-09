<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CampingPitchType.
 * 
 * @method CampingPitchType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CampingPitchType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CampingPitchType setAddress(Property\AddressProperty $address)
 * @method CampingPitchType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CampingPitchType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CampingPitchType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CampingPitchType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CampingPitchType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CampingPitchType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CampingPitchType setDescription(Property\DescriptionProperty $description)
 * @method CampingPitchType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CampingPitchType setEvent(Property\EventProperty $event)
 * @method CampingPitchType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CampingPitchType setFloorSize(Property\FloorSizeProperty $floorSize)
 * @method CampingPitchType setGeo(Property\GeoProperty $geo)
 * @method CampingPitchType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CampingPitchType setHasMap(Property\HasMapProperty $hasMap)
 * @method CampingPitchType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CampingPitchType setImage(Property\ImageProperty $image)
 * @method CampingPitchType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CampingPitchType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CampingPitchType setLogo(Property\LogoProperty $logo)
 * @method CampingPitchType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CampingPitchType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CampingPitchType setName(Property\NameProperty $name)
 * @method CampingPitchType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method CampingPitchType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CampingPitchType setPermittedUsage(Property\PermittedUsageProperty $permittedUsage)
 * @method CampingPitchType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method CampingPitchType setPhoto(Property\PhotoProperty $photo)
 * @method CampingPitchType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CampingPitchType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CampingPitchType setReview(Property\ReviewProperty $review)
 * @method CampingPitchType setSameAs(Property\SameAsProperty $sameAs)
 * @method CampingPitchType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CampingPitchType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CampingPitchType setTelephone(Property\TelephoneProperty $telephone)
 * @method CampingPitchType setUrl(Property\UrlProperty $url)
 */
class CampingPitchType extends AccommodationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CampingPitch';
	}
}