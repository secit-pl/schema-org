<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A pond.
 * 
 * @method PondType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PondType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PondType setAddress(Property\AddressProperty $address)
 * @method PondType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PondType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PondType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PondType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PondType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PondType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PondType setDescription(Property\DescriptionProperty $description)
 * @method PondType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PondType setEvent(Property\EventProperty $event)
 * @method PondType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PondType setGeo(Property\GeoProperty $geo)
 * @method PondType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method PondType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method PondType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method PondType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method PondType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method PondType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method PondType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method PondType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method PondType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method PondType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method PondType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PondType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PondType setHasMap(Property\HasMapProperty $hasMap)
 * @method PondType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PondType setImage(Property\ImageProperty $image)
 * @method PondType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PondType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PondType setKeywords(Property\KeywordsProperty $keywords)
 * @method PondType setLatitude(Property\LatitudeProperty $latitude)
 * @method PondType setLogo(Property\LogoProperty $logo)
 * @method PondType setLongitude(Property\LongitudeProperty $longitude)
 * @method PondType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PondType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PondType setName(Property\NameProperty $name)
 * @method PondType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PondType setPhoto(Property\PhotoProperty $photo)
 * @method PondType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PondType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PondType setReview(Property\ReviewProperty $review)
 * @method PondType setSameAs(Property\SameAsProperty $sameAs)
 * @method PondType setSlogan(Property\SloganProperty $slogan)
 * @method PondType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PondType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PondType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PondType setTelephone(Property\TelephoneProperty $telephone)
 * @method PondType setUrl(Property\UrlProperty $url)
 */
class PondType extends BodyOfWaterType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Pond';
	}
}