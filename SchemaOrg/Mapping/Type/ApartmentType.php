<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ApartmentType.
 * 
 * @method ApartmentType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ApartmentType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ApartmentType setAddress(Property\AddressProperty $address)
 * @method ApartmentType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ApartmentType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ApartmentType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ApartmentType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ApartmentType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ApartmentType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ApartmentType setDescription(Property\DescriptionProperty $description)
 * @method ApartmentType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ApartmentType setEvent(Property\EventProperty $event)
 * @method ApartmentType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ApartmentType setFloorSize(Property\FloorSizeProperty $floorSize)
 * @method ApartmentType setGeo(Property\GeoProperty $geo)
 * @method ApartmentType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ApartmentType setHasMap(Property\HasMapProperty $hasMap)
 * @method ApartmentType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ApartmentType setImage(Property\ImageProperty $image)
 * @method ApartmentType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ApartmentType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ApartmentType setLogo(Property\LogoProperty $logo)
 * @method ApartmentType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ApartmentType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ApartmentType setName(Property\NameProperty $name)
 * @method ApartmentType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method ApartmentType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ApartmentType setPermittedUsage(Property\PermittedUsageProperty $permittedUsage)
 * @method ApartmentType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method ApartmentType setPhoto(Property\PhotoProperty $photo)
 * @method ApartmentType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ApartmentType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ApartmentType setReview(Property\ReviewProperty $review)
 * @method ApartmentType setSameAs(Property\SameAsProperty $sameAs)
 * @method ApartmentType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ApartmentType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ApartmentType setTelephone(Property\TelephoneProperty $telephone)
 * @method ApartmentType setUrl(Property\UrlProperty $url)
 */
class ApartmentType extends AccommodationType {

	/**
	 * @var Property\NumberOfRoomsProperty
	 */
	private $numberOfRooms;

	/**
	 * @var Property\OccupancyProperty
	 */
	private $occupancy;

	/**
	 * Get number of rooms.
	 * 
	 * @return Property\NumberOfRoomsProperty
	 */
	public function getNumberOfRooms() {
		return $this->numberOfRooms;
	}

	/**
	 * Get occupancy.
	 * 
	 * @return Property\OccupancyProperty
	 */
	public function getOccupancy() {
		return $this->occupancy;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Apartment';
	}

	/**
	 * Set number of rooms.
	 * 
	 * @param Property\NumberOfRoomsProperty $numberOfRooms
	 * @return ApartmentType
	 */
	public function setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms) {
		$this->numberOfRooms = $numberOfRooms;

		return $this;
	}

	/**
	 * Set occupancy.
	 * 
	 * @param Property\OccupancyProperty $occupancy
	 * @return ApartmentType
	 */
	public function setOccupancy(Property\OccupancyProperty $occupancy) {
		$this->occupancy = $occupancy;

		return $this;
	}
}