<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A bus stop.
 * 
 * @method BusStopType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BusStopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BusStopType setAddress(Property\AddressProperty $address)
 * @method BusStopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BusStopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BusStopType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BusStopType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BusStopType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BusStopType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BusStopType setDescription(Property\DescriptionProperty $description)
 * @method BusStopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BusStopType setEvent(Property\EventProperty $event)
 * @method BusStopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BusStopType setGeo(Property\GeoProperty $geo)
 * @method BusStopType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BusStopType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BusStopType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BusStopType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BusStopType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BusStopType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BusStopType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BusStopType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BusStopType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BusStopType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BusStopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BusStopType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BusStopType setHasMap(Property\HasMapProperty $hasMap)
 * @method BusStopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BusStopType setImage(Property\ImageProperty $image)
 * @method BusStopType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BusStopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BusStopType setKeywords(Property\KeywordsProperty $keywords)
 * @method BusStopType setLatitude(Property\LatitudeProperty $latitude)
 * @method BusStopType setLogo(Property\LogoProperty $logo)
 * @method BusStopType setLongitude(Property\LongitudeProperty $longitude)
 * @method BusStopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BusStopType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BusStopType setName(Property\NameProperty $name)
 * @method BusStopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BusStopType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BusStopType setPhoto(Property\PhotoProperty $photo)
 * @method BusStopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BusStopType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BusStopType setReview(Property\ReviewProperty $review)
 * @method BusStopType setSameAs(Property\SameAsProperty $sameAs)
 * @method BusStopType setSlogan(Property\SloganProperty $slogan)
 * @method BusStopType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BusStopType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BusStopType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BusStopType setTelephone(Property\TelephoneProperty $telephone)
 * @method BusStopType setUrl(Property\UrlProperty $url)
 */
class BusStopType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusStop';
	}
}