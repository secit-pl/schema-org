<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A synagogue.
 * 
 * @method SynagogueType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SynagogueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SynagogueType setAddress(Property\AddressProperty $address)
 * @method SynagogueType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SynagogueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SynagogueType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method SynagogueType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method SynagogueType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method SynagogueType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method SynagogueType setDescription(Property\DescriptionProperty $description)
 * @method SynagogueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SynagogueType setEvent(Property\EventProperty $event)
 * @method SynagogueType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SynagogueType setGeo(Property\GeoProperty $geo)
 * @method SynagogueType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method SynagogueType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method SynagogueType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method SynagogueType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method SynagogueType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method SynagogueType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method SynagogueType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method SynagogueType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method SynagogueType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method SynagogueType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method SynagogueType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SynagogueType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method SynagogueType setHasMap(Property\HasMapProperty $hasMap)
 * @method SynagogueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SynagogueType setImage(Property\ImageProperty $image)
 * @method SynagogueType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SynagogueType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SynagogueType setKeywords(Property\KeywordsProperty $keywords)
 * @method SynagogueType setLatitude(Property\LatitudeProperty $latitude)
 * @method SynagogueType setLogo(Property\LogoProperty $logo)
 * @method SynagogueType setLongitude(Property\LongitudeProperty $longitude)
 * @method SynagogueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SynagogueType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SynagogueType setName(Property\NameProperty $name)
 * @method SynagogueType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method SynagogueType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method SynagogueType setPhoto(Property\PhotoProperty $photo)
 * @method SynagogueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SynagogueType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method SynagogueType setReview(Property\ReviewProperty $review)
 * @method SynagogueType setSameAs(Property\SameAsProperty $sameAs)
 * @method SynagogueType setSlogan(Property\SloganProperty $slogan)
 * @method SynagogueType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method SynagogueType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method SynagogueType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SynagogueType setTelephone(Property\TelephoneProperty $telephone)
 * @method SynagogueType setUrl(Property\UrlProperty $url)
 */
class SynagogueType extends PlaceOfWorshipType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Synagogue';
	}
}