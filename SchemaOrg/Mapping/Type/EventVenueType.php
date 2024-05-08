<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An event venue.
 * 
 * @method EventVenueType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method EventVenueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EventVenueType setAddress(Property\AddressProperty $address)
 * @method EventVenueType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method EventVenueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EventVenueType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method EventVenueType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method EventVenueType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method EventVenueType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method EventVenueType setDescription(Property\DescriptionProperty $description)
 * @method EventVenueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EventVenueType setEvent(Property\EventProperty $event)
 * @method EventVenueType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method EventVenueType setGeo(Property\GeoProperty $geo)
 * @method EventVenueType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method EventVenueType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method EventVenueType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method EventVenueType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method EventVenueType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method EventVenueType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method EventVenueType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method EventVenueType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method EventVenueType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method EventVenueType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method EventVenueType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method EventVenueType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method EventVenueType setHasMap(Property\HasMapProperty $hasMap)
 * @method EventVenueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EventVenueType setImage(Property\ImageProperty $image)
 * @method EventVenueType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method EventVenueType setIsicV4(Property\IsicV4Property $isicV4)
 * @method EventVenueType setKeywords(Property\KeywordsProperty $keywords)
 * @method EventVenueType setLatitude(Property\LatitudeProperty $latitude)
 * @method EventVenueType setLogo(Property\LogoProperty $logo)
 * @method EventVenueType setLongitude(Property\LongitudeProperty $longitude)
 * @method EventVenueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EventVenueType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method EventVenueType setName(Property\NameProperty $name)
 * @method EventVenueType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method EventVenueType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method EventVenueType setPhoto(Property\PhotoProperty $photo)
 * @method EventVenueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EventVenueType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method EventVenueType setReview(Property\ReviewProperty $review)
 * @method EventVenueType setSameAs(Property\SameAsProperty $sameAs)
 * @method EventVenueType setSlogan(Property\SloganProperty $slogan)
 * @method EventVenueType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method EventVenueType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method EventVenueType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EventVenueType setTelephone(Property\TelephoneProperty $telephone)
 * @method EventVenueType setUrl(Property\UrlProperty $url)
 */
class EventVenueType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventVenue';
	}
}