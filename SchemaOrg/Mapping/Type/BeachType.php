<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Beach.
 * 
 * @method BeachType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BeachType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BeachType setAddress(Property\AddressProperty $address)
 * @method BeachType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BeachType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BeachType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BeachType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BeachType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BeachType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BeachType setDescription(Property\DescriptionProperty $description)
 * @method BeachType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BeachType setEvent(Property\EventProperty $event)
 * @method BeachType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BeachType setGeo(Property\GeoProperty $geo)
 * @method BeachType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BeachType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BeachType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BeachType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BeachType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BeachType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BeachType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BeachType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BeachType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BeachType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BeachType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BeachType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BeachType setHasMap(Property\HasMapProperty $hasMap)
 * @method BeachType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BeachType setImage(Property\ImageProperty $image)
 * @method BeachType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BeachType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BeachType setKeywords(Property\KeywordsProperty $keywords)
 * @method BeachType setLatitude(Property\LatitudeProperty $latitude)
 * @method BeachType setLogo(Property\LogoProperty $logo)
 * @method BeachType setLongitude(Property\LongitudeProperty $longitude)
 * @method BeachType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BeachType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BeachType setName(Property\NameProperty $name)
 * @method BeachType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BeachType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BeachType setPhoto(Property\PhotoProperty $photo)
 * @method BeachType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BeachType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BeachType setReview(Property\ReviewProperty $review)
 * @method BeachType setSameAs(Property\SameAsProperty $sameAs)
 * @method BeachType setSlogan(Property\SloganProperty $slogan)
 * @method BeachType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BeachType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BeachType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BeachType setTelephone(Property\TelephoneProperty $telephone)
 * @method BeachType setUrl(Property\UrlProperty $url)
 */
class BeachType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Beach';
	}
}