<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A bridge.
 * 
 * @method BridgeType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BridgeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BridgeType setAddress(Property\AddressProperty $address)
 * @method BridgeType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BridgeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BridgeType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BridgeType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BridgeType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BridgeType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BridgeType setDescription(Property\DescriptionProperty $description)
 * @method BridgeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BridgeType setEvent(Property\EventProperty $event)
 * @method BridgeType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BridgeType setGeo(Property\GeoProperty $geo)
 * @method BridgeType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BridgeType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BridgeType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BridgeType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BridgeType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BridgeType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BridgeType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BridgeType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BridgeType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BridgeType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BridgeType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BridgeType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BridgeType setHasMap(Property\HasMapProperty $hasMap)
 * @method BridgeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BridgeType setImage(Property\ImageProperty $image)
 * @method BridgeType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BridgeType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BridgeType setKeywords(Property\KeywordsProperty $keywords)
 * @method BridgeType setLatitude(Property\LatitudeProperty $latitude)
 * @method BridgeType setLogo(Property\LogoProperty $logo)
 * @method BridgeType setLongitude(Property\LongitudeProperty $longitude)
 * @method BridgeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BridgeType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BridgeType setName(Property\NameProperty $name)
 * @method BridgeType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BridgeType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BridgeType setPhoto(Property\PhotoProperty $photo)
 * @method BridgeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BridgeType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BridgeType setReview(Property\ReviewProperty $review)
 * @method BridgeType setSameAs(Property\SameAsProperty $sameAs)
 * @method BridgeType setSlogan(Property\SloganProperty $slogan)
 * @method BridgeType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BridgeType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BridgeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BridgeType setTelephone(Property\TelephoneProperty $telephone)
 * @method BridgeType setUrl(Property\UrlProperty $url)
 */
class BridgeType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Bridge';
	}
}