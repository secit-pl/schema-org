<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A church.
 * 
 * @method ChurchType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ChurchType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ChurchType setAddress(Property\AddressProperty $address)
 * @method ChurchType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ChurchType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ChurchType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ChurchType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ChurchType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ChurchType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ChurchType setDescription(Property\DescriptionProperty $description)
 * @method ChurchType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ChurchType setEvent(Property\EventProperty $event)
 * @method ChurchType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ChurchType setGeo(Property\GeoProperty $geo)
 * @method ChurchType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ChurchType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ChurchType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ChurchType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ChurchType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ChurchType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ChurchType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ChurchType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ChurchType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ChurchType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ChurchType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ChurchType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ChurchType setHasMap(Property\HasMapProperty $hasMap)
 * @method ChurchType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ChurchType setImage(Property\ImageProperty $image)
 * @method ChurchType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ChurchType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ChurchType setKeywords(Property\KeywordsProperty $keywords)
 * @method ChurchType setLatitude(Property\LatitudeProperty $latitude)
 * @method ChurchType setLogo(Property\LogoProperty $logo)
 * @method ChurchType setLongitude(Property\LongitudeProperty $longitude)
 * @method ChurchType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ChurchType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ChurchType setName(Property\NameProperty $name)
 * @method ChurchType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ChurchType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ChurchType setPhoto(Property\PhotoProperty $photo)
 * @method ChurchType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ChurchType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ChurchType setReview(Property\ReviewProperty $review)
 * @method ChurchType setSameAs(Property\SameAsProperty $sameAs)
 * @method ChurchType setSlogan(Property\SloganProperty $slogan)
 * @method ChurchType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ChurchType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ChurchType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ChurchType setTelephone(Property\TelephoneProperty $telephone)
 * @method ChurchType setUrl(Property\UrlProperty $url)
 */
class ChurchType extends PlaceOfWorshipType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Church';
	}
}