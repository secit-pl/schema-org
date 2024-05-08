<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A geographical region, typically under the jurisdiction of a particular government.
 * 
 * @method AdministrativeAreaType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AdministrativeAreaType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AdministrativeAreaType setAddress(Property\AddressProperty $address)
 * @method AdministrativeAreaType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AdministrativeAreaType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AdministrativeAreaType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AdministrativeAreaType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AdministrativeAreaType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AdministrativeAreaType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AdministrativeAreaType setDescription(Property\DescriptionProperty $description)
 * @method AdministrativeAreaType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AdministrativeAreaType setEvent(Property\EventProperty $event)
 * @method AdministrativeAreaType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AdministrativeAreaType setGeo(Property\GeoProperty $geo)
 * @method AdministrativeAreaType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AdministrativeAreaType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AdministrativeAreaType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AdministrativeAreaType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AdministrativeAreaType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AdministrativeAreaType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AdministrativeAreaType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AdministrativeAreaType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AdministrativeAreaType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AdministrativeAreaType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AdministrativeAreaType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AdministrativeAreaType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AdministrativeAreaType setHasMap(Property\HasMapProperty $hasMap)
 * @method AdministrativeAreaType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AdministrativeAreaType setImage(Property\ImageProperty $image)
 * @method AdministrativeAreaType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AdministrativeAreaType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AdministrativeAreaType setKeywords(Property\KeywordsProperty $keywords)
 * @method AdministrativeAreaType setLatitude(Property\LatitudeProperty $latitude)
 * @method AdministrativeAreaType setLogo(Property\LogoProperty $logo)
 * @method AdministrativeAreaType setLongitude(Property\LongitudeProperty $longitude)
 * @method AdministrativeAreaType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AdministrativeAreaType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AdministrativeAreaType setName(Property\NameProperty $name)
 * @method AdministrativeAreaType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AdministrativeAreaType setPhoto(Property\PhotoProperty $photo)
 * @method AdministrativeAreaType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AdministrativeAreaType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AdministrativeAreaType setReview(Property\ReviewProperty $review)
 * @method AdministrativeAreaType setSameAs(Property\SameAsProperty $sameAs)
 * @method AdministrativeAreaType setSlogan(Property\SloganProperty $slogan)
 * @method AdministrativeAreaType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AdministrativeAreaType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AdministrativeAreaType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AdministrativeAreaType setTelephone(Property\TelephoneProperty $telephone)
 * @method AdministrativeAreaType setUrl(Property\UrlProperty $url)
 */
class AdministrativeAreaType extends PlaceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AdministrativeArea';
	}
}