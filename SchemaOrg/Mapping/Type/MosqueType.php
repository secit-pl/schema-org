<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A mosque.
 * 
 * @method MosqueType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MosqueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MosqueType setAddress(Property\AddressProperty $address)
 * @method MosqueType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MosqueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MosqueType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MosqueType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MosqueType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MosqueType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MosqueType setDescription(Property\DescriptionProperty $description)
 * @method MosqueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MosqueType setEvent(Property\EventProperty $event)
 * @method MosqueType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MosqueType setGeo(Property\GeoProperty $geo)
 * @method MosqueType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MosqueType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MosqueType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MosqueType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MosqueType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MosqueType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MosqueType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MosqueType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MosqueType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MosqueType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MosqueType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MosqueType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MosqueType setHasMap(Property\HasMapProperty $hasMap)
 * @method MosqueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MosqueType setImage(Property\ImageProperty $image)
 * @method MosqueType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MosqueType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MosqueType setKeywords(Property\KeywordsProperty $keywords)
 * @method MosqueType setLatitude(Property\LatitudeProperty $latitude)
 * @method MosqueType setLogo(Property\LogoProperty $logo)
 * @method MosqueType setLongitude(Property\LongitudeProperty $longitude)
 * @method MosqueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MosqueType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MosqueType setName(Property\NameProperty $name)
 * @method MosqueType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MosqueType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MosqueType setPhoto(Property\PhotoProperty $photo)
 * @method MosqueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MosqueType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MosqueType setReview(Property\ReviewProperty $review)
 * @method MosqueType setSameAs(Property\SameAsProperty $sameAs)
 * @method MosqueType setSlogan(Property\SloganProperty $slogan)
 * @method MosqueType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MosqueType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MosqueType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MosqueType setTelephone(Property\TelephoneProperty $telephone)
 * @method MosqueType setUrl(Property\UrlProperty $url)
 */
class MosqueType extends PlaceOfWorshipType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Mosque';
	}
}