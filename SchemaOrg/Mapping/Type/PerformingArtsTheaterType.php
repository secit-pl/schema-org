<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A theater or other performing art center.
 * 
 * @method PerformingArtsTheaterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PerformingArtsTheaterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PerformingArtsTheaterType setAddress(Property\AddressProperty $address)
 * @method PerformingArtsTheaterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PerformingArtsTheaterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PerformingArtsTheaterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PerformingArtsTheaterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PerformingArtsTheaterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PerformingArtsTheaterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PerformingArtsTheaterType setDescription(Property\DescriptionProperty $description)
 * @method PerformingArtsTheaterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PerformingArtsTheaterType setEvent(Property\EventProperty $event)
 * @method PerformingArtsTheaterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PerformingArtsTheaterType setGeo(Property\GeoProperty $geo)
 * @method PerformingArtsTheaterType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method PerformingArtsTheaterType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method PerformingArtsTheaterType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method PerformingArtsTheaterType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method PerformingArtsTheaterType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method PerformingArtsTheaterType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method PerformingArtsTheaterType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method PerformingArtsTheaterType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method PerformingArtsTheaterType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method PerformingArtsTheaterType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method PerformingArtsTheaterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PerformingArtsTheaterType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PerformingArtsTheaterType setHasMap(Property\HasMapProperty $hasMap)
 * @method PerformingArtsTheaterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PerformingArtsTheaterType setImage(Property\ImageProperty $image)
 * @method PerformingArtsTheaterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PerformingArtsTheaterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PerformingArtsTheaterType setKeywords(Property\KeywordsProperty $keywords)
 * @method PerformingArtsTheaterType setLatitude(Property\LatitudeProperty $latitude)
 * @method PerformingArtsTheaterType setLogo(Property\LogoProperty $logo)
 * @method PerformingArtsTheaterType setLongitude(Property\LongitudeProperty $longitude)
 * @method PerformingArtsTheaterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PerformingArtsTheaterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PerformingArtsTheaterType setName(Property\NameProperty $name)
 * @method PerformingArtsTheaterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PerformingArtsTheaterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PerformingArtsTheaterType setPhoto(Property\PhotoProperty $photo)
 * @method PerformingArtsTheaterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PerformingArtsTheaterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PerformingArtsTheaterType setReview(Property\ReviewProperty $review)
 * @method PerformingArtsTheaterType setSameAs(Property\SameAsProperty $sameAs)
 * @method PerformingArtsTheaterType setSlogan(Property\SloganProperty $slogan)
 * @method PerformingArtsTheaterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PerformingArtsTheaterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PerformingArtsTheaterType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PerformingArtsTheaterType setTelephone(Property\TelephoneProperty $telephone)
 * @method PerformingArtsTheaterType setUrl(Property\UrlProperty $url)
 */
class PerformingArtsTheaterType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PerformingArtsTheater';
	}
}