<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A hotel room is a single room in a hotel. See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * 
 * @method HotelRoomType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HotelRoomType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HotelRoomType setAddress(Property\AddressProperty $address)
 * @method HotelRoomType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HotelRoomType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HotelRoomType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HotelRoomType setBed(Property\BedProperty $bed)
 * @method HotelRoomType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HotelRoomType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HotelRoomType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HotelRoomType setDescription(Property\DescriptionProperty $description)
 * @method HotelRoomType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HotelRoomType setEvent(Property\EventProperty $event)
 * @method HotelRoomType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HotelRoomType setFloorSize(Property\FloorSizeProperty $floorSize)
 * @method HotelRoomType setGeo(Property\GeoProperty $geo)
 * @method HotelRoomType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HotelRoomType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HotelRoomType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HotelRoomType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HotelRoomType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HotelRoomType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HotelRoomType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HotelRoomType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HotelRoomType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HotelRoomType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HotelRoomType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HotelRoomType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HotelRoomType setHasMap(Property\HasMapProperty $hasMap)
 * @method HotelRoomType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HotelRoomType setImage(Property\ImageProperty $image)
 * @method HotelRoomType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HotelRoomType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HotelRoomType setKeywords(Property\KeywordsProperty $keywords)
 * @method HotelRoomType setLatitude(Property\LatitudeProperty $latitude)
 * @method HotelRoomType setLogo(Property\LogoProperty $logo)
 * @method HotelRoomType setLongitude(Property\LongitudeProperty $longitude)
 * @method HotelRoomType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HotelRoomType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HotelRoomType setName(Property\NameProperty $name)
 * @method HotelRoomType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method HotelRoomType setOccupancy(Property\OccupancyProperty $occupancy)
 * @method HotelRoomType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HotelRoomType setPermittedUsage(Property\PermittedUsageProperty $permittedUsage)
 * @method HotelRoomType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method HotelRoomType setPhoto(Property\PhotoProperty $photo)
 * @method HotelRoomType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HotelRoomType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HotelRoomType setReview(Property\ReviewProperty $review)
 * @method HotelRoomType setSameAs(Property\SameAsProperty $sameAs)
 * @method HotelRoomType setSlogan(Property\SloganProperty $slogan)
 * @method HotelRoomType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HotelRoomType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HotelRoomType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HotelRoomType setTelephone(Property\TelephoneProperty $telephone)
 * @method HotelRoomType setUrl(Property\UrlProperty $url)
 */
class HotelRoomType extends RoomType {

	/**
	 * @var Property\BedProperty
	 */
	private $bed;

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
		return 'https://schema.org/HotelRoom';
	}

	/**
	 * Set bed.
	 *
	 * @param Property\BedProperty $bed
	 * @return HotelRoomType
	 */
	public function setBed(Property\BedProperty $bed) {
		$this->bed = $bed;

		return $this;
	}

	/**
	 * Set occupancy.
	 *
	 * @param Property\OccupancyProperty $occupancy
	 * @return HotelRoomType
	 */
	public function setOccupancy(Property\OccupancyProperty $occupancy) {
		$this->occupancy = $occupancy;

		return $this;
	}
}