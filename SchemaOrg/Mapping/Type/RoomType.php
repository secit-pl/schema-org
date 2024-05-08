<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A room is a distinguishable space within a structure, usually separated from other spaces by interior walls (source: Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/Room). See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * 
 * @method RoomType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RoomType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RoomType setAddress(Property\AddressProperty $address)
 * @method RoomType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RoomType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RoomType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method RoomType setBed(Property\BedProperty $bed)
 * @method RoomType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method RoomType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method RoomType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method RoomType setDescription(Property\DescriptionProperty $description)
 * @method RoomType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RoomType setEvent(Property\EventProperty $event)
 * @method RoomType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RoomType setFloorSize(Property\FloorSizeProperty $floorSize)
 * @method RoomType setGeo(Property\GeoProperty $geo)
 * @method RoomType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method RoomType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method RoomType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method RoomType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method RoomType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method RoomType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method RoomType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method RoomType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method RoomType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method RoomType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method RoomType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RoomType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method RoomType setHasMap(Property\HasMapProperty $hasMap)
 * @method RoomType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RoomType setImage(Property\ImageProperty $image)
 * @method RoomType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method RoomType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RoomType setKeywords(Property\KeywordsProperty $keywords)
 * @method RoomType setLatitude(Property\LatitudeProperty $latitude)
 * @method RoomType setLogo(Property\LogoProperty $logo)
 * @method RoomType setLongitude(Property\LongitudeProperty $longitude)
 * @method RoomType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RoomType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method RoomType setName(Property\NameProperty $name)
 * @method RoomType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method RoomType setOccupancy(Property\OccupancyProperty $occupancy)
 * @method RoomType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method RoomType setPermittedUsage(Property\PermittedUsageProperty $permittedUsage)
 * @method RoomType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method RoomType setPhoto(Property\PhotoProperty $photo)
 * @method RoomType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RoomType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method RoomType setReview(Property\ReviewProperty $review)
 * @method RoomType setSameAs(Property\SameAsProperty $sameAs)
 * @method RoomType setSlogan(Property\SloganProperty $slogan)
 * @method RoomType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method RoomType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method RoomType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RoomType setTelephone(Property\TelephoneProperty $telephone)
 * @method RoomType setUrl(Property\UrlProperty $url)
 */
class RoomType extends AccommodationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Room';
	}
}