<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A graveyard.
 * 
 * @method CemeteryType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CemeteryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CemeteryType setAddress(Property\AddressProperty $address)
 * @method CemeteryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CemeteryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CemeteryType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CemeteryType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CemeteryType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CemeteryType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CemeteryType setDescription(Property\DescriptionProperty $description)
 * @method CemeteryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CemeteryType setEvent(Property\EventProperty $event)
 * @method CemeteryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CemeteryType setGeo(Property\GeoProperty $geo)
 * @method CemeteryType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method CemeteryType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method CemeteryType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method CemeteryType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method CemeteryType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method CemeteryType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method CemeteryType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method CemeteryType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method CemeteryType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method CemeteryType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method CemeteryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CemeteryType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CemeteryType setHasMap(Property\HasMapProperty $hasMap)
 * @method CemeteryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CemeteryType setImage(Property\ImageProperty $image)
 * @method CemeteryType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CemeteryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CemeteryType setKeywords(Property\KeywordsProperty $keywords)
 * @method CemeteryType setLatitude(Property\LatitudeProperty $latitude)
 * @method CemeteryType setLogo(Property\LogoProperty $logo)
 * @method CemeteryType setLongitude(Property\LongitudeProperty $longitude)
 * @method CemeteryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CemeteryType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CemeteryType setName(Property\NameProperty $name)
 * @method CemeteryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CemeteryType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CemeteryType setPhoto(Property\PhotoProperty $photo)
 * @method CemeteryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CemeteryType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CemeteryType setReview(Property\ReviewProperty $review)
 * @method CemeteryType setSameAs(Property\SameAsProperty $sameAs)
 * @method CemeteryType setSlogan(Property\SloganProperty $slogan)
 * @method CemeteryType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CemeteryType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CemeteryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CemeteryType setTelephone(Property\TelephoneProperty $telephone)
 * @method CemeteryType setUrl(Property\UrlProperty $url)
 */
class CemeteryType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Cemetery';
	}
}