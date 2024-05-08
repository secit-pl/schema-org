<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An accommodation is a place that can accommodate human beings, e.g. a hotel room, a camping pitch, or a meeting room. Many accommodations are for overnight stays, but this is not a mandatory requirement. For more specific types of accommodations not defined in schema.org, one can use additionalType with external vocabularies. See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * 
 * @method AccommodationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AccommodationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AccommodationType setAddress(Property\AddressProperty $address)
 * @method AccommodationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AccommodationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AccommodationType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AccommodationType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AccommodationType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AccommodationType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AccommodationType setDescription(Property\DescriptionProperty $description)
 * @method AccommodationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AccommodationType setEvent(Property\EventProperty $event)
 * @method AccommodationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AccommodationType setGeo(Property\GeoProperty $geo)
 * @method AccommodationType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AccommodationType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AccommodationType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AccommodationType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AccommodationType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AccommodationType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AccommodationType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AccommodationType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AccommodationType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AccommodationType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AccommodationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AccommodationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AccommodationType setHasMap(Property\HasMapProperty $hasMap)
 * @method AccommodationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AccommodationType setImage(Property\ImageProperty $image)
 * @method AccommodationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AccommodationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AccommodationType setKeywords(Property\KeywordsProperty $keywords)
 * @method AccommodationType setLatitude(Property\LatitudeProperty $latitude)
 * @method AccommodationType setLogo(Property\LogoProperty $logo)
 * @method AccommodationType setLongitude(Property\LongitudeProperty $longitude)
 * @method AccommodationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AccommodationType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AccommodationType setName(Property\NameProperty $name)
 * @method AccommodationType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AccommodationType setPhoto(Property\PhotoProperty $photo)
 * @method AccommodationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AccommodationType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AccommodationType setReview(Property\ReviewProperty $review)
 * @method AccommodationType setSameAs(Property\SameAsProperty $sameAs)
 * @method AccommodationType setSlogan(Property\SloganProperty $slogan)
 * @method AccommodationType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AccommodationType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AccommodationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AccommodationType setTelephone(Property\TelephoneProperty $telephone)
 * @method AccommodationType setUrl(Property\UrlProperty $url)
 */
class AccommodationType extends PlaceType {

	/**
	 * @var Property\AmenityFeatureProperty
	 */
	private $amenityFeature;

	/**
	 * @var Property\BedProperty
	 */
	private $bed;

	/**
	 * @var Property\FloorSizeProperty
	 */
	private $floorSize;

	/**
	 * @var Property\NumberOfRoomsProperty
	 */
	private $numberOfRooms;

	/**
	 * @var Property\OccupancyProperty
	 */
	private $occupancy;

	/**
	 * @var Property\PermittedUsageProperty
	 */
	private $permittedUsage;

	/**
	 * @var Property\PetsAllowedProperty
	 */
	private $petsAllowed;

	/**
	 * Get amenity feature.
	 *
	 * @return Property\AmenityFeatureProperty
	 */
	public function getAmenityFeature() {
		return $this->amenityFeature;
	}

	/**
	 * Get bed.
	 *
	 * @return Property\BedProperty
	 */
	public function getBed() {
		return $this->bed;
	}

	/**
	 * Get floor size.
	 *
	 * @return Property\FloorSizeProperty
	 */
	public function getFloorSize() {
		return $this->floorSize;
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
	 * Get permitted usage.
	 *
	 * @return Property\PermittedUsageProperty
	 */
	public function getPermittedUsage() {
		return $this->permittedUsage;
	}

	/**
	 * Get pets allowed.
	 *
	 * @return Property\PetsAllowedProperty
	 */
	public function getPetsAllowed() {
		return $this->petsAllowed;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Accommodation';
	}

	/**
	 * Set amenity feature.
	 *
	 * @param Property\AmenityFeatureProperty $amenityFeature
	 * @return AccommodationType
	 */
	public function setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature) {
		$this->amenityFeature = $amenityFeature;

		return $this;
	}

	/**
	 * Set bed.
	 *
	 * @param Property\BedProperty $bed
	 * @return AccommodationType
	 */
	public function setBed(Property\BedProperty $bed) {
		$this->bed = $bed;

		return $this;
	}

	/**
	 * Set floor size.
	 *
	 * @param Property\FloorSizeProperty $floorSize
	 * @return AccommodationType
	 */
	public function setFloorSize(Property\FloorSizeProperty $floorSize) {
		$this->floorSize = $floorSize;

		return $this;
	}

	/**
	 * Set number of rooms.
	 *
	 * @param Property\NumberOfRoomsProperty $numberOfRooms
	 * @return AccommodationType
	 */
	public function setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms) {
		$this->numberOfRooms = $numberOfRooms;

		return $this;
	}

	/**
	 * Set occupancy.
	 *
	 * @param Property\OccupancyProperty $occupancy
	 * @return AccommodationType
	 */
	public function setOccupancy(Property\OccupancyProperty $occupancy) {
		$this->occupancy = $occupancy;

		return $this;
	}

	/**
	 * Set permitted usage.
	 *
	 * @param Property\PermittedUsageProperty $permittedUsage
	 * @return AccommodationType
	 */
	public function setPermittedUsage(Property\PermittedUsageProperty $permittedUsage) {
		$this->permittedUsage = $permittedUsage;

		return $this;
	}

	/**
	 * Set pets allowed.
	 *
	 * @param Property\PetsAllowedProperty $petsAllowed
	 * @return AccommodationType
	 */
	public function setPetsAllowed(Property\PetsAllowedProperty $petsAllowed) {
		$this->petsAllowed = $petsAllowed;

		return $this;
	}
}