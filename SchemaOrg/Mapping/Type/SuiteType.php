<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SuiteType.
 * 
 * @method SuiteType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SuiteType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SuiteType setAddress(Property\AddressProperty $address)
 * @method SuiteType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SuiteType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SuiteType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method SuiteType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method SuiteType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method SuiteType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method SuiteType setDescription(Property\DescriptionProperty $description)
 * @method SuiteType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SuiteType setEvent(Property\EventProperty $event)
 * @method SuiteType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SuiteType setFloorSize(Property\FloorSizeProperty $floorSize)
 * @method SuiteType setGeo(Property\GeoProperty $geo)
 * @method SuiteType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SuiteType setHasMap(Property\HasMapProperty $hasMap)
 * @method SuiteType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SuiteType setImage(Property\ImageProperty $image)
 * @method SuiteType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SuiteType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SuiteType setLogo(Property\LogoProperty $logo)
 * @method SuiteType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SuiteType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SuiteType setName(Property\NameProperty $name)
 * @method SuiteType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method SuiteType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method SuiteType setPermittedUsage(Property\PermittedUsageProperty $permittedUsage)
 * @method SuiteType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method SuiteType setPhoto(Property\PhotoProperty $photo)
 * @method SuiteType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SuiteType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method SuiteType setReview(Property\ReviewProperty $review)
 * @method SuiteType setSameAs(Property\SameAsProperty $sameAs)
 * @method SuiteType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method SuiteType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method SuiteType setTelephone(Property\TelephoneProperty $telephone)
 * @method SuiteType setUrl(Property\UrlProperty $url)
 */
class SuiteType extends AccommodationType {

	/**
	 * @var Property\BedProperty
	 */
	private $bed;

	/**
	 * @var Property\NumberOfRoomsProperty
	 */
	private $numberOfRooms;

	/**
	 * @var Property\OccupancyProperty
	 */
	private $occupancy;

	/**
	 * Get bed.
	 * 
	 * @return Property\BedProperty
	 */
	public function getBed() {
		return $this->bed;
	}

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
		return 'https://schema.org/Suite';
	}

	/**
	 * Set bed.
	 * 
	 * @param Property\BedProperty $bed
	 * @return SuiteType
	 */
	public function setBed(Property\BedProperty $bed) {
		$this->bed = $bed;

		return $this;
	}

	/**
	 * Set number of rooms.
	 * 
	 * @param Property\NumberOfRoomsProperty $numberOfRooms
	 * @return SuiteType
	 */
	public function setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms) {
		$this->numberOfRooms = $numberOfRooms;

		return $this;
	}

	/**
	 * Set occupancy.
	 * 
	 * @param Property\OccupancyProperty $occupancy
	 * @return SuiteType
	 */
	public function setOccupancy(Property\OccupancyProperty $occupancy) {
		$this->occupancy = $occupancy;

		return $this;
	}
}