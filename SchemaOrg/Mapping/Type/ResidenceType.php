<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The place where a person lives.
 * 
 * @method ResidenceType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ResidenceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ResidenceType setAddress(Property\AddressProperty $address)
 * @method ResidenceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ResidenceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ResidenceType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ResidenceType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ResidenceType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ResidenceType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ResidenceType setDescription(Property\DescriptionProperty $description)
 * @method ResidenceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ResidenceType setEvent(Property\EventProperty $event)
 * @method ResidenceType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ResidenceType setGeo(Property\GeoProperty $geo)
 * @method ResidenceType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ResidenceType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ResidenceType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ResidenceType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ResidenceType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ResidenceType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ResidenceType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ResidenceType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ResidenceType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ResidenceType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ResidenceType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ResidenceType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ResidenceType setHasMap(Property\HasMapProperty $hasMap)
 * @method ResidenceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ResidenceType setImage(Property\ImageProperty $image)
 * @method ResidenceType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ResidenceType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ResidenceType setKeywords(Property\KeywordsProperty $keywords)
 * @method ResidenceType setLatitude(Property\LatitudeProperty $latitude)
 * @method ResidenceType setLogo(Property\LogoProperty $logo)
 * @method ResidenceType setLongitude(Property\LongitudeProperty $longitude)
 * @method ResidenceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ResidenceType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ResidenceType setName(Property\NameProperty $name)
 * @method ResidenceType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ResidenceType setPhoto(Property\PhotoProperty $photo)
 * @method ResidenceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ResidenceType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ResidenceType setReview(Property\ReviewProperty $review)
 * @method ResidenceType setSameAs(Property\SameAsProperty $sameAs)
 * @method ResidenceType setSlogan(Property\SloganProperty $slogan)
 * @method ResidenceType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ResidenceType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ResidenceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ResidenceType setTelephone(Property\TelephoneProperty $telephone)
 * @method ResidenceType setUrl(Property\UrlProperty $url)
 */
class ResidenceType extends PlaceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Residence';
	}
}