<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Residence type: Single-family home.
 * 
 * @method SingleFamilyResidenceType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SingleFamilyResidenceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SingleFamilyResidenceType setAddress(Property\AddressProperty $address)
 * @method SingleFamilyResidenceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SingleFamilyResidenceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SingleFamilyResidenceType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method SingleFamilyResidenceType setBed(Property\BedProperty $bed)
 * @method SingleFamilyResidenceType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method SingleFamilyResidenceType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method SingleFamilyResidenceType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method SingleFamilyResidenceType setDescription(Property\DescriptionProperty $description)
 * @method SingleFamilyResidenceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SingleFamilyResidenceType setEvent(Property\EventProperty $event)
 * @method SingleFamilyResidenceType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SingleFamilyResidenceType setFloorSize(Property\FloorSizeProperty $floorSize)
 * @method SingleFamilyResidenceType setGeo(Property\GeoProperty $geo)
 * @method SingleFamilyResidenceType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method SingleFamilyResidenceType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method SingleFamilyResidenceType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method SingleFamilyResidenceType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method SingleFamilyResidenceType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method SingleFamilyResidenceType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method SingleFamilyResidenceType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method SingleFamilyResidenceType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method SingleFamilyResidenceType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method SingleFamilyResidenceType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method SingleFamilyResidenceType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SingleFamilyResidenceType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method SingleFamilyResidenceType setHasMap(Property\HasMapProperty $hasMap)
 * @method SingleFamilyResidenceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SingleFamilyResidenceType setImage(Property\ImageProperty $image)
 * @method SingleFamilyResidenceType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SingleFamilyResidenceType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SingleFamilyResidenceType setKeywords(Property\KeywordsProperty $keywords)
 * @method SingleFamilyResidenceType setLatitude(Property\LatitudeProperty $latitude)
 * @method SingleFamilyResidenceType setLogo(Property\LogoProperty $logo)
 * @method SingleFamilyResidenceType setLongitude(Property\LongitudeProperty $longitude)
 * @method SingleFamilyResidenceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SingleFamilyResidenceType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SingleFamilyResidenceType setName(Property\NameProperty $name)
 * @method SingleFamilyResidenceType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method SingleFamilyResidenceType setOccupancy(Property\OccupancyProperty $occupancy)
 * @method SingleFamilyResidenceType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method SingleFamilyResidenceType setPermittedUsage(Property\PermittedUsageProperty $permittedUsage)
 * @method SingleFamilyResidenceType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method SingleFamilyResidenceType setPhoto(Property\PhotoProperty $photo)
 * @method SingleFamilyResidenceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SingleFamilyResidenceType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method SingleFamilyResidenceType setReview(Property\ReviewProperty $review)
 * @method SingleFamilyResidenceType setSameAs(Property\SameAsProperty $sameAs)
 * @method SingleFamilyResidenceType setSlogan(Property\SloganProperty $slogan)
 * @method SingleFamilyResidenceType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method SingleFamilyResidenceType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method SingleFamilyResidenceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SingleFamilyResidenceType setTelephone(Property\TelephoneProperty $telephone)
 * @method SingleFamilyResidenceType setUrl(Property\UrlProperty $url)
 */
class SingleFamilyResidenceType extends HouseType {

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
		return 'https://schema.org/SingleFamilyResidence';
	}

	/**
	 * Set number of rooms.
	 *
	 * @param Property\NumberOfRoomsProperty $numberOfRooms
	 * @return SingleFamilyResidenceType
	 */
	public function setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms) {
		$this->numberOfRooms = $numberOfRooms;

		return $this;
	}

	/**
	 * Set occupancy.
	 *
	 * @param Property\OccupancyProperty $occupancy
	 * @return SingleFamilyResidenceType
	 */
	public function setOccupancy(Property\OccupancyProperty $occupancy) {
		$this->occupancy = $occupancy;

		return $this;
	}
}