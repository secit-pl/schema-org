<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A courthouse.
 * 
 * @method CourthouseType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CourthouseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CourthouseType setAddress(Property\AddressProperty $address)
 * @method CourthouseType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CourthouseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CourthouseType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CourthouseType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CourthouseType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CourthouseType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CourthouseType setDescription(Property\DescriptionProperty $description)
 * @method CourthouseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CourthouseType setEvent(Property\EventProperty $event)
 * @method CourthouseType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CourthouseType setGeo(Property\GeoProperty $geo)
 * @method CourthouseType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method CourthouseType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method CourthouseType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method CourthouseType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method CourthouseType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method CourthouseType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method CourthouseType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method CourthouseType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method CourthouseType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method CourthouseType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method CourthouseType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CourthouseType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CourthouseType setHasMap(Property\HasMapProperty $hasMap)
 * @method CourthouseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CourthouseType setImage(Property\ImageProperty $image)
 * @method CourthouseType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CourthouseType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CourthouseType setKeywords(Property\KeywordsProperty $keywords)
 * @method CourthouseType setLatitude(Property\LatitudeProperty $latitude)
 * @method CourthouseType setLogo(Property\LogoProperty $logo)
 * @method CourthouseType setLongitude(Property\LongitudeProperty $longitude)
 * @method CourthouseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CourthouseType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CourthouseType setName(Property\NameProperty $name)
 * @method CourthouseType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CourthouseType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CourthouseType setPhoto(Property\PhotoProperty $photo)
 * @method CourthouseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CourthouseType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CourthouseType setReview(Property\ReviewProperty $review)
 * @method CourthouseType setSameAs(Property\SameAsProperty $sameAs)
 * @method CourthouseType setSlogan(Property\SloganProperty $slogan)
 * @method CourthouseType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CourthouseType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CourthouseType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CourthouseType setTelephone(Property\TelephoneProperty $telephone)
 * @method CourthouseType setUrl(Property\UrlProperty $url)
 */
class CourthouseType extends GovernmentBuildingType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Courthouse';
	}
}