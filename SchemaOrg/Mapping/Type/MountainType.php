<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A mountain, like Mount Whitney or Mount Everest.
 * 
 * @method MountainType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MountainType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MountainType setAddress(Property\AddressProperty $address)
 * @method MountainType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MountainType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MountainType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MountainType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MountainType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MountainType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MountainType setDescription(Property\DescriptionProperty $description)
 * @method MountainType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MountainType setEvent(Property\EventProperty $event)
 * @method MountainType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MountainType setGeo(Property\GeoProperty $geo)
 * @method MountainType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MountainType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MountainType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MountainType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MountainType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MountainType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MountainType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MountainType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MountainType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MountainType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MountainType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MountainType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MountainType setHasMap(Property\HasMapProperty $hasMap)
 * @method MountainType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MountainType setImage(Property\ImageProperty $image)
 * @method MountainType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MountainType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MountainType setKeywords(Property\KeywordsProperty $keywords)
 * @method MountainType setLatitude(Property\LatitudeProperty $latitude)
 * @method MountainType setLogo(Property\LogoProperty $logo)
 * @method MountainType setLongitude(Property\LongitudeProperty $longitude)
 * @method MountainType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MountainType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MountainType setName(Property\NameProperty $name)
 * @method MountainType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MountainType setPhoto(Property\PhotoProperty $photo)
 * @method MountainType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MountainType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MountainType setReview(Property\ReviewProperty $review)
 * @method MountainType setSameAs(Property\SameAsProperty $sameAs)
 * @method MountainType setSlogan(Property\SloganProperty $slogan)
 * @method MountainType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MountainType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MountainType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MountainType setTelephone(Property\TelephoneProperty $telephone)
 * @method MountainType setUrl(Property\UrlProperty $url)
 */
class MountainType extends LandformType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Mountain';
	}
}