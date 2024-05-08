<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A volcano, like Fujisan.
 * 
 * @method VolcanoType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method VolcanoType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VolcanoType setAddress(Property\AddressProperty $address)
 * @method VolcanoType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method VolcanoType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VolcanoType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method VolcanoType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method VolcanoType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method VolcanoType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method VolcanoType setDescription(Property\DescriptionProperty $description)
 * @method VolcanoType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VolcanoType setEvent(Property\EventProperty $event)
 * @method VolcanoType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method VolcanoType setGeo(Property\GeoProperty $geo)
 * @method VolcanoType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method VolcanoType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method VolcanoType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method VolcanoType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method VolcanoType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method VolcanoType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method VolcanoType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method VolcanoType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method VolcanoType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method VolcanoType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method VolcanoType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method VolcanoType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method VolcanoType setHasMap(Property\HasMapProperty $hasMap)
 * @method VolcanoType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VolcanoType setImage(Property\ImageProperty $image)
 * @method VolcanoType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method VolcanoType setIsicV4(Property\IsicV4Property $isicV4)
 * @method VolcanoType setKeywords(Property\KeywordsProperty $keywords)
 * @method VolcanoType setLatitude(Property\LatitudeProperty $latitude)
 * @method VolcanoType setLogo(Property\LogoProperty $logo)
 * @method VolcanoType setLongitude(Property\LongitudeProperty $longitude)
 * @method VolcanoType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VolcanoType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method VolcanoType setName(Property\NameProperty $name)
 * @method VolcanoType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method VolcanoType setPhoto(Property\PhotoProperty $photo)
 * @method VolcanoType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VolcanoType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method VolcanoType setReview(Property\ReviewProperty $review)
 * @method VolcanoType setSameAs(Property\SameAsProperty $sameAs)
 * @method VolcanoType setSlogan(Property\SloganProperty $slogan)
 * @method VolcanoType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method VolcanoType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method VolcanoType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method VolcanoType setTelephone(Property\TelephoneProperty $telephone)
 * @method VolcanoType setUrl(Property\UrlProperty $url)
 */
class VolcanoType extends LandformType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Volcano';
	}
}