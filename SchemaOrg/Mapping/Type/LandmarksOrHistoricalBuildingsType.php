<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An historical landmark or building.
 * 
 * @method LandmarksOrHistoricalBuildingsType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LandmarksOrHistoricalBuildingsType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LandmarksOrHistoricalBuildingsType setAddress(Property\AddressProperty $address)
 * @method LandmarksOrHistoricalBuildingsType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LandmarksOrHistoricalBuildingsType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LandmarksOrHistoricalBuildingsType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LandmarksOrHistoricalBuildingsType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LandmarksOrHistoricalBuildingsType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LandmarksOrHistoricalBuildingsType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LandmarksOrHistoricalBuildingsType setDescription(Property\DescriptionProperty $description)
 * @method LandmarksOrHistoricalBuildingsType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LandmarksOrHistoricalBuildingsType setEvent(Property\EventProperty $event)
 * @method LandmarksOrHistoricalBuildingsType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LandmarksOrHistoricalBuildingsType setGeo(Property\GeoProperty $geo)
 * @method LandmarksOrHistoricalBuildingsType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method LandmarksOrHistoricalBuildingsType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method LandmarksOrHistoricalBuildingsType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method LandmarksOrHistoricalBuildingsType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method LandmarksOrHistoricalBuildingsType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method LandmarksOrHistoricalBuildingsType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method LandmarksOrHistoricalBuildingsType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method LandmarksOrHistoricalBuildingsType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method LandmarksOrHistoricalBuildingsType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method LandmarksOrHistoricalBuildingsType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method LandmarksOrHistoricalBuildingsType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LandmarksOrHistoricalBuildingsType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method LandmarksOrHistoricalBuildingsType setHasMap(Property\HasMapProperty $hasMap)
 * @method LandmarksOrHistoricalBuildingsType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LandmarksOrHistoricalBuildingsType setImage(Property\ImageProperty $image)
 * @method LandmarksOrHistoricalBuildingsType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LandmarksOrHistoricalBuildingsType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LandmarksOrHistoricalBuildingsType setKeywords(Property\KeywordsProperty $keywords)
 * @method LandmarksOrHistoricalBuildingsType setLatitude(Property\LatitudeProperty $latitude)
 * @method LandmarksOrHistoricalBuildingsType setLogo(Property\LogoProperty $logo)
 * @method LandmarksOrHistoricalBuildingsType setLongitude(Property\LongitudeProperty $longitude)
 * @method LandmarksOrHistoricalBuildingsType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LandmarksOrHistoricalBuildingsType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LandmarksOrHistoricalBuildingsType setName(Property\NameProperty $name)
 * @method LandmarksOrHistoricalBuildingsType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LandmarksOrHistoricalBuildingsType setPhoto(Property\PhotoProperty $photo)
 * @method LandmarksOrHistoricalBuildingsType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LandmarksOrHistoricalBuildingsType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LandmarksOrHistoricalBuildingsType setReview(Property\ReviewProperty $review)
 * @method LandmarksOrHistoricalBuildingsType setSameAs(Property\SameAsProperty $sameAs)
 * @method LandmarksOrHistoricalBuildingsType setSlogan(Property\SloganProperty $slogan)
 * @method LandmarksOrHistoricalBuildingsType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LandmarksOrHistoricalBuildingsType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LandmarksOrHistoricalBuildingsType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LandmarksOrHistoricalBuildingsType setTelephone(Property\TelephoneProperty $telephone)
 * @method LandmarksOrHistoricalBuildingsType setUrl(Property\UrlProperty $url)
 */
class LandmarksOrHistoricalBuildingsType extends PlaceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LandmarksOrHistoricalBuildings';
	}
}