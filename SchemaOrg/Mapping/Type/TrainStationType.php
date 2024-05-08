<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A train station.
 * 
 * @method TrainStationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TrainStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TrainStationType setAddress(Property\AddressProperty $address)
 * @method TrainStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TrainStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TrainStationType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method TrainStationType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method TrainStationType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method TrainStationType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method TrainStationType setDescription(Property\DescriptionProperty $description)
 * @method TrainStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TrainStationType setEvent(Property\EventProperty $event)
 * @method TrainStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TrainStationType setGeo(Property\GeoProperty $geo)
 * @method TrainStationType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method TrainStationType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method TrainStationType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method TrainStationType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method TrainStationType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method TrainStationType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method TrainStationType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method TrainStationType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method TrainStationType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method TrainStationType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method TrainStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TrainStationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method TrainStationType setHasMap(Property\HasMapProperty $hasMap)
 * @method TrainStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TrainStationType setImage(Property\ImageProperty $image)
 * @method TrainStationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method TrainStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TrainStationType setKeywords(Property\KeywordsProperty $keywords)
 * @method TrainStationType setLatitude(Property\LatitudeProperty $latitude)
 * @method TrainStationType setLogo(Property\LogoProperty $logo)
 * @method TrainStationType setLongitude(Property\LongitudeProperty $longitude)
 * @method TrainStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TrainStationType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method TrainStationType setName(Property\NameProperty $name)
 * @method TrainStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TrainStationType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method TrainStationType setPhoto(Property\PhotoProperty $photo)
 * @method TrainStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TrainStationType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method TrainStationType setReview(Property\ReviewProperty $review)
 * @method TrainStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method TrainStationType setSlogan(Property\SloganProperty $slogan)
 * @method TrainStationType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method TrainStationType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method TrainStationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TrainStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method TrainStationType setUrl(Property\UrlProperty $url)
 */
class TrainStationType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TrainStation';
	}
}