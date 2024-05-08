<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A city or town.
 * 
 * @method CityType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CityType setAddress(Property\AddressProperty $address)
 * @method CityType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CityType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CityType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CityType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CityType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CityType setDescription(Property\DescriptionProperty $description)
 * @method CityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CityType setEvent(Property\EventProperty $event)
 * @method CityType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CityType setGeo(Property\GeoProperty $geo)
 * @method CityType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method CityType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method CityType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method CityType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method CityType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method CityType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method CityType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method CityType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method CityType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method CityType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method CityType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CityType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CityType setHasMap(Property\HasMapProperty $hasMap)
 * @method CityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CityType setImage(Property\ImageProperty $image)
 * @method CityType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CityType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CityType setKeywords(Property\KeywordsProperty $keywords)
 * @method CityType setLatitude(Property\LatitudeProperty $latitude)
 * @method CityType setLogo(Property\LogoProperty $logo)
 * @method CityType setLongitude(Property\LongitudeProperty $longitude)
 * @method CityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CityType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CityType setName(Property\NameProperty $name)
 * @method CityType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CityType setPhoto(Property\PhotoProperty $photo)
 * @method CityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CityType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CityType setReview(Property\ReviewProperty $review)
 * @method CityType setSameAs(Property\SameAsProperty $sameAs)
 * @method CityType setSlogan(Property\SloganProperty $slogan)
 * @method CityType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CityType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CityType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CityType setTelephone(Property\TelephoneProperty $telephone)
 * @method CityType setUrl(Property\UrlProperty $url)
 */
class CityType extends AdministrativeAreaType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/City';
	}
}