<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A music venue.
 * 
 * @method MusicVenueType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MusicVenueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MusicVenueType setAddress(Property\AddressProperty $address)
 * @method MusicVenueType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MusicVenueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MusicVenueType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MusicVenueType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MusicVenueType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MusicVenueType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MusicVenueType setDescription(Property\DescriptionProperty $description)
 * @method MusicVenueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MusicVenueType setEvent(Property\EventProperty $event)
 * @method MusicVenueType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MusicVenueType setGeo(Property\GeoProperty $geo)
 * @method MusicVenueType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MusicVenueType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MusicVenueType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MusicVenueType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MusicVenueType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MusicVenueType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MusicVenueType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MusicVenueType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MusicVenueType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MusicVenueType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MusicVenueType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MusicVenueType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MusicVenueType setHasMap(Property\HasMapProperty $hasMap)
 * @method MusicVenueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MusicVenueType setImage(Property\ImageProperty $image)
 * @method MusicVenueType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MusicVenueType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MusicVenueType setKeywords(Property\KeywordsProperty $keywords)
 * @method MusicVenueType setLatitude(Property\LatitudeProperty $latitude)
 * @method MusicVenueType setLogo(Property\LogoProperty $logo)
 * @method MusicVenueType setLongitude(Property\LongitudeProperty $longitude)
 * @method MusicVenueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MusicVenueType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MusicVenueType setName(Property\NameProperty $name)
 * @method MusicVenueType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MusicVenueType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MusicVenueType setPhoto(Property\PhotoProperty $photo)
 * @method MusicVenueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MusicVenueType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MusicVenueType setReview(Property\ReviewProperty $review)
 * @method MusicVenueType setSameAs(Property\SameAsProperty $sameAs)
 * @method MusicVenueType setSlogan(Property\SloganProperty $slogan)
 * @method MusicVenueType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MusicVenueType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MusicVenueType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MusicVenueType setTelephone(Property\TelephoneProperty $telephone)
 * @method MusicVenueType setUrl(Property\UrlProperty $url)
 */
class MusicVenueType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicVenue';
	}
}