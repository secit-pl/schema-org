<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A park.
 * 
 * @method ParkType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ParkType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ParkType setAddress(Property\AddressProperty $address)
 * @method ParkType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ParkType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ParkType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ParkType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ParkType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ParkType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ParkType setDescription(Property\DescriptionProperty $description)
 * @method ParkType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ParkType setEvent(Property\EventProperty $event)
 * @method ParkType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ParkType setGeo(Property\GeoProperty $geo)
 * @method ParkType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ParkType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ParkType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ParkType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ParkType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ParkType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ParkType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ParkType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ParkType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ParkType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ParkType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ParkType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ParkType setHasMap(Property\HasMapProperty $hasMap)
 * @method ParkType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ParkType setImage(Property\ImageProperty $image)
 * @method ParkType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ParkType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ParkType setKeywords(Property\KeywordsProperty $keywords)
 * @method ParkType setLatitude(Property\LatitudeProperty $latitude)
 * @method ParkType setLogo(Property\LogoProperty $logo)
 * @method ParkType setLongitude(Property\LongitudeProperty $longitude)
 * @method ParkType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ParkType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ParkType setName(Property\NameProperty $name)
 * @method ParkType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ParkType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ParkType setPhoto(Property\PhotoProperty $photo)
 * @method ParkType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ParkType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ParkType setReview(Property\ReviewProperty $review)
 * @method ParkType setSameAs(Property\SameAsProperty $sameAs)
 * @method ParkType setSlogan(Property\SloganProperty $slogan)
 * @method ParkType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ParkType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ParkType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ParkType setTelephone(Property\TelephoneProperty $telephone)
 * @method ParkType setUrl(Property\UrlProperty $url)
 */
class ParkType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Park';
	}
}