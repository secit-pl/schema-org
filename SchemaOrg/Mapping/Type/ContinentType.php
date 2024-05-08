<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * One of the continents (for example, Europe or Africa).
 * 
 * @method ContinentType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ContinentType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ContinentType setAddress(Property\AddressProperty $address)
 * @method ContinentType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ContinentType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ContinentType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ContinentType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ContinentType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ContinentType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ContinentType setDescription(Property\DescriptionProperty $description)
 * @method ContinentType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ContinentType setEvent(Property\EventProperty $event)
 * @method ContinentType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ContinentType setGeo(Property\GeoProperty $geo)
 * @method ContinentType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ContinentType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ContinentType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ContinentType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ContinentType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ContinentType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ContinentType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ContinentType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ContinentType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ContinentType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ContinentType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ContinentType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ContinentType setHasMap(Property\HasMapProperty $hasMap)
 * @method ContinentType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ContinentType setImage(Property\ImageProperty $image)
 * @method ContinentType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ContinentType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ContinentType setKeywords(Property\KeywordsProperty $keywords)
 * @method ContinentType setLatitude(Property\LatitudeProperty $latitude)
 * @method ContinentType setLogo(Property\LogoProperty $logo)
 * @method ContinentType setLongitude(Property\LongitudeProperty $longitude)
 * @method ContinentType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ContinentType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ContinentType setName(Property\NameProperty $name)
 * @method ContinentType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ContinentType setPhoto(Property\PhotoProperty $photo)
 * @method ContinentType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ContinentType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ContinentType setReview(Property\ReviewProperty $review)
 * @method ContinentType setSameAs(Property\SameAsProperty $sameAs)
 * @method ContinentType setSlogan(Property\SloganProperty $slogan)
 * @method ContinentType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ContinentType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ContinentType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ContinentType setTelephone(Property\TelephoneProperty $telephone)
 * @method ContinentType setUrl(Property\UrlProperty $url)
 */
class ContinentType extends LandformType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Continent';
	}
}