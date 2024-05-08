<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A subway station.
 * 
 * @method SubwayStationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SubwayStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SubwayStationType setAddress(Property\AddressProperty $address)
 * @method SubwayStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SubwayStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SubwayStationType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method SubwayStationType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method SubwayStationType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method SubwayStationType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method SubwayStationType setDescription(Property\DescriptionProperty $description)
 * @method SubwayStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SubwayStationType setEvent(Property\EventProperty $event)
 * @method SubwayStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SubwayStationType setGeo(Property\GeoProperty $geo)
 * @method SubwayStationType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method SubwayStationType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method SubwayStationType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method SubwayStationType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method SubwayStationType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method SubwayStationType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method SubwayStationType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method SubwayStationType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method SubwayStationType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method SubwayStationType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method SubwayStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SubwayStationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method SubwayStationType setHasMap(Property\HasMapProperty $hasMap)
 * @method SubwayStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SubwayStationType setImage(Property\ImageProperty $image)
 * @method SubwayStationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SubwayStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SubwayStationType setKeywords(Property\KeywordsProperty $keywords)
 * @method SubwayStationType setLatitude(Property\LatitudeProperty $latitude)
 * @method SubwayStationType setLogo(Property\LogoProperty $logo)
 * @method SubwayStationType setLongitude(Property\LongitudeProperty $longitude)
 * @method SubwayStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SubwayStationType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SubwayStationType setName(Property\NameProperty $name)
 * @method SubwayStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method SubwayStationType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method SubwayStationType setPhoto(Property\PhotoProperty $photo)
 * @method SubwayStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SubwayStationType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method SubwayStationType setReview(Property\ReviewProperty $review)
 * @method SubwayStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method SubwayStationType setSlogan(Property\SloganProperty $slogan)
 * @method SubwayStationType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method SubwayStationType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method SubwayStationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SubwayStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method SubwayStationType setUrl(Property\UrlProperty $url)
 */
class SubwayStationType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SubwayStation';
	}
}