<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A playground.
 * 
 * @method PlaygroundType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PlaygroundType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PlaygroundType setAddress(Property\AddressProperty $address)
 * @method PlaygroundType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PlaygroundType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PlaygroundType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PlaygroundType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PlaygroundType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PlaygroundType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PlaygroundType setDescription(Property\DescriptionProperty $description)
 * @method PlaygroundType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PlaygroundType setEvent(Property\EventProperty $event)
 * @method PlaygroundType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PlaygroundType setGeo(Property\GeoProperty $geo)
 * @method PlaygroundType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method PlaygroundType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method PlaygroundType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method PlaygroundType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method PlaygroundType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method PlaygroundType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method PlaygroundType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method PlaygroundType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method PlaygroundType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method PlaygroundType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method PlaygroundType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PlaygroundType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PlaygroundType setHasMap(Property\HasMapProperty $hasMap)
 * @method PlaygroundType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PlaygroundType setImage(Property\ImageProperty $image)
 * @method PlaygroundType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PlaygroundType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PlaygroundType setKeywords(Property\KeywordsProperty $keywords)
 * @method PlaygroundType setLatitude(Property\LatitudeProperty $latitude)
 * @method PlaygroundType setLogo(Property\LogoProperty $logo)
 * @method PlaygroundType setLongitude(Property\LongitudeProperty $longitude)
 * @method PlaygroundType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PlaygroundType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PlaygroundType setName(Property\NameProperty $name)
 * @method PlaygroundType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PlaygroundType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PlaygroundType setPhoto(Property\PhotoProperty $photo)
 * @method PlaygroundType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PlaygroundType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PlaygroundType setReview(Property\ReviewProperty $review)
 * @method PlaygroundType setSameAs(Property\SameAsProperty $sameAs)
 * @method PlaygroundType setSlogan(Property\SloganProperty $slogan)
 * @method PlaygroundType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PlaygroundType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PlaygroundType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PlaygroundType setTelephone(Property\TelephoneProperty $telephone)
 * @method PlaygroundType setUrl(Property\UrlProperty $url)
 */
class PlaygroundType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Playground';
	}
}