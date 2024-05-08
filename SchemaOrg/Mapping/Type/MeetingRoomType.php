<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A meeting room, conference room, or conference hall is a room provided for singular events such as business conferences and meetings (source: Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/Conference_hall). See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * 
 * @method MeetingRoomType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MeetingRoomType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MeetingRoomType setAddress(Property\AddressProperty $address)
 * @method MeetingRoomType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MeetingRoomType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MeetingRoomType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MeetingRoomType setBed(Property\BedProperty $bed)
 * @method MeetingRoomType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MeetingRoomType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MeetingRoomType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MeetingRoomType setDescription(Property\DescriptionProperty $description)
 * @method MeetingRoomType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MeetingRoomType setEvent(Property\EventProperty $event)
 * @method MeetingRoomType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MeetingRoomType setFloorSize(Property\FloorSizeProperty $floorSize)
 * @method MeetingRoomType setGeo(Property\GeoProperty $geo)
 * @method MeetingRoomType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MeetingRoomType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MeetingRoomType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MeetingRoomType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MeetingRoomType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MeetingRoomType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MeetingRoomType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MeetingRoomType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MeetingRoomType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MeetingRoomType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MeetingRoomType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MeetingRoomType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MeetingRoomType setHasMap(Property\HasMapProperty $hasMap)
 * @method MeetingRoomType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MeetingRoomType setImage(Property\ImageProperty $image)
 * @method MeetingRoomType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MeetingRoomType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MeetingRoomType setKeywords(Property\KeywordsProperty $keywords)
 * @method MeetingRoomType setLatitude(Property\LatitudeProperty $latitude)
 * @method MeetingRoomType setLogo(Property\LogoProperty $logo)
 * @method MeetingRoomType setLongitude(Property\LongitudeProperty $longitude)
 * @method MeetingRoomType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MeetingRoomType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MeetingRoomType setName(Property\NameProperty $name)
 * @method MeetingRoomType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method MeetingRoomType setOccupancy(Property\OccupancyProperty $occupancy)
 * @method MeetingRoomType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MeetingRoomType setPermittedUsage(Property\PermittedUsageProperty $permittedUsage)
 * @method MeetingRoomType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method MeetingRoomType setPhoto(Property\PhotoProperty $photo)
 * @method MeetingRoomType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MeetingRoomType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MeetingRoomType setReview(Property\ReviewProperty $review)
 * @method MeetingRoomType setSameAs(Property\SameAsProperty $sameAs)
 * @method MeetingRoomType setSlogan(Property\SloganProperty $slogan)
 * @method MeetingRoomType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MeetingRoomType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MeetingRoomType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MeetingRoomType setTelephone(Property\TelephoneProperty $telephone)
 * @method MeetingRoomType setUrl(Property\UrlProperty $url)
 */
class MeetingRoomType extends RoomType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MeetingRoom';
	}
}