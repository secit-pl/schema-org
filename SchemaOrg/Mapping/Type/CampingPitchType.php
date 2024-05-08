<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A CampingPitch is an individual place for overnight stay in the outdoors, typically being part of a larger camping site, or Campground. In British English a campsite, or campground, is an area, usually divided into a number of pitches, where people can camp overnight using tents or camper vans or caravans; this British English use of the word is synonymous with the American English expression campground. In American English the term campsite generally means an area where an individual, family, group, or military unit can pitch a tent or park a camper; a campground may contain many campsites. (Source: Wikipedia, see https://en.wikipedia.org/wiki/Campsite.) See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * 
 * @method CampingPitchType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CampingPitchType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CampingPitchType setAddress(Property\AddressProperty $address)
 * @method CampingPitchType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CampingPitchType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CampingPitchType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CampingPitchType setBed(Property\BedProperty $bed)
 * @method CampingPitchType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CampingPitchType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CampingPitchType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CampingPitchType setDescription(Property\DescriptionProperty $description)
 * @method CampingPitchType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CampingPitchType setEvent(Property\EventProperty $event)
 * @method CampingPitchType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CampingPitchType setFloorSize(Property\FloorSizeProperty $floorSize)
 * @method CampingPitchType setGeo(Property\GeoProperty $geo)
 * @method CampingPitchType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method CampingPitchType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method CampingPitchType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method CampingPitchType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method CampingPitchType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method CampingPitchType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method CampingPitchType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method CampingPitchType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method CampingPitchType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method CampingPitchType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method CampingPitchType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CampingPitchType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CampingPitchType setHasMap(Property\HasMapProperty $hasMap)
 * @method CampingPitchType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CampingPitchType setImage(Property\ImageProperty $image)
 * @method CampingPitchType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CampingPitchType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CampingPitchType setKeywords(Property\KeywordsProperty $keywords)
 * @method CampingPitchType setLatitude(Property\LatitudeProperty $latitude)
 * @method CampingPitchType setLogo(Property\LogoProperty $logo)
 * @method CampingPitchType setLongitude(Property\LongitudeProperty $longitude)
 * @method CampingPitchType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CampingPitchType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CampingPitchType setName(Property\NameProperty $name)
 * @method CampingPitchType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method CampingPitchType setOccupancy(Property\OccupancyProperty $occupancy)
 * @method CampingPitchType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CampingPitchType setPermittedUsage(Property\PermittedUsageProperty $permittedUsage)
 * @method CampingPitchType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method CampingPitchType setPhoto(Property\PhotoProperty $photo)
 * @method CampingPitchType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CampingPitchType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CampingPitchType setReview(Property\ReviewProperty $review)
 * @method CampingPitchType setSameAs(Property\SameAsProperty $sameAs)
 * @method CampingPitchType setSlogan(Property\SloganProperty $slogan)
 * @method CampingPitchType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CampingPitchType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CampingPitchType setSubjectOf(Property\SubjectOfProperty $subjectOf)
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