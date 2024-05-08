<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A bus station.
 * 
 * @method BusStationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BusStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BusStationType setAddress(Property\AddressProperty $address)
 * @method BusStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BusStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BusStationType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BusStationType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BusStationType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BusStationType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BusStationType setDescription(Property\DescriptionProperty $description)
 * @method BusStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BusStationType setEvent(Property\EventProperty $event)
 * @method BusStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BusStationType setGeo(Property\GeoProperty $geo)
 * @method BusStationType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BusStationType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BusStationType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BusStationType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BusStationType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BusStationType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BusStationType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BusStationType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BusStationType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BusStationType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BusStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BusStationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BusStationType setHasMap(Property\HasMapProperty $hasMap)
 * @method BusStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BusStationType setImage(Property\ImageProperty $image)
 * @method BusStationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BusStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BusStationType setKeywords(Property\KeywordsProperty $keywords)
 * @method BusStationType setLatitude(Property\LatitudeProperty $latitude)
 * @method BusStationType setLogo(Property\LogoProperty $logo)
 * @method BusStationType setLongitude(Property\LongitudeProperty $longitude)
 * @method BusStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BusStationType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BusStationType setName(Property\NameProperty $name)
 * @method BusStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BusStationType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BusStationType setPhoto(Property\PhotoProperty $photo)
 * @method BusStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BusStationType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BusStationType setReview(Property\ReviewProperty $review)
 * @method BusStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method BusStationType setSlogan(Property\SloganProperty $slogan)
 * @method BusStationType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BusStationType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BusStationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BusStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method BusStationType setUrl(Property\UrlProperty $url)
 */
class BusStationType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusStation';
	}
}