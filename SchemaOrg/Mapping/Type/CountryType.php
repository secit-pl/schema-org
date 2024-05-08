<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A country.
 * 
 * @method CountryType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CountryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CountryType setAddress(Property\AddressProperty $address)
 * @method CountryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CountryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CountryType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CountryType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CountryType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CountryType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CountryType setDescription(Property\DescriptionProperty $description)
 * @method CountryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CountryType setEvent(Property\EventProperty $event)
 * @method CountryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CountryType setGeo(Property\GeoProperty $geo)
 * @method CountryType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method CountryType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method CountryType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method CountryType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method CountryType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method CountryType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method CountryType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method CountryType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method CountryType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method CountryType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method CountryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CountryType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CountryType setHasMap(Property\HasMapProperty $hasMap)
 * @method CountryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CountryType setImage(Property\ImageProperty $image)
 * @method CountryType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CountryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CountryType setKeywords(Property\KeywordsProperty $keywords)
 * @method CountryType setLatitude(Property\LatitudeProperty $latitude)
 * @method CountryType setLogo(Property\LogoProperty $logo)
 * @method CountryType setLongitude(Property\LongitudeProperty $longitude)
 * @method CountryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CountryType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CountryType setName(Property\NameProperty $name)
 * @method CountryType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CountryType setPhoto(Property\PhotoProperty $photo)
 * @method CountryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CountryType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CountryType setReview(Property\ReviewProperty $review)
 * @method CountryType setSameAs(Property\SameAsProperty $sameAs)
 * @method CountryType setSlogan(Property\SloganProperty $slogan)
 * @method CountryType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CountryType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CountryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CountryType setTelephone(Property\TelephoneProperty $telephone)
 * @method CountryType setUrl(Property\UrlProperty $url)
 */
class CountryType extends AdministrativeAreaType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Country';
	}
}