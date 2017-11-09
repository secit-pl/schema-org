<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HouseType.
 * 
 * @method HouseType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HouseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HouseType setAddress(Property\AddressProperty $address)
 * @method HouseType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HouseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HouseType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HouseType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HouseType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HouseType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HouseType setDescription(Property\DescriptionProperty $description)
 * @method HouseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HouseType setEvent(Property\EventProperty $event)
 * @method HouseType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HouseType setFloorSize(Property\FloorSizeProperty $floorSize)
 * @method HouseType setGeo(Property\GeoProperty $geo)
 * @method HouseType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HouseType setHasMap(Property\HasMapProperty $hasMap)
 * @method HouseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HouseType setImage(Property\ImageProperty $image)
 * @method HouseType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HouseType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HouseType setLogo(Property\LogoProperty $logo)
 * @method HouseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HouseType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HouseType setName(Property\NameProperty $name)
 * @method HouseType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method HouseType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HouseType setPermittedUsage(Property\PermittedUsageProperty $permittedUsage)
 * @method HouseType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method HouseType setPhoto(Property\PhotoProperty $photo)
 * @method HouseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HouseType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HouseType setReview(Property\ReviewProperty $review)
 * @method HouseType setSameAs(Property\SameAsProperty $sameAs)
 * @method HouseType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HouseType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HouseType setTelephone(Property\TelephoneProperty $telephone)
 * @method HouseType setUrl(Property\UrlProperty $url)
 */
class HouseType extends AccommodationType {

	/**
	 * @var Property\NumberOfRoomsProperty
	 */
	private $numberOfRooms;

	/**
	 * Get number of rooms.
	 * 
	 * @return Property\NumberOfRoomsProperty
	 */
	public function getNumberOfRooms() {
		return $this->numberOfRooms;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/House';
	}

	/**
	 * Set number of rooms.
	 * 
	 * @param Property\NumberOfRoomsProperty $numberOfRooms
	 * @return HouseType
	 */
	public function setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms) {
		$this->numberOfRooms = $numberOfRooms;

		return $this;
	}
}