<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A reservoir of water, typically an artificially created lake, like the Lake Kariba reservoir.
 * 
 * @method ReservoirType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ReservoirType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReservoirType setAddress(Property\AddressProperty $address)
 * @method ReservoirType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ReservoirType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReservoirType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ReservoirType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ReservoirType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ReservoirType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ReservoirType setDescription(Property\DescriptionProperty $description)
 * @method ReservoirType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReservoirType setEvent(Property\EventProperty $event)
 * @method ReservoirType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ReservoirType setGeo(Property\GeoProperty $geo)
 * @method ReservoirType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ReservoirType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ReservoirType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ReservoirType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ReservoirType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ReservoirType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ReservoirType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ReservoirType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ReservoirType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ReservoirType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ReservoirType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ReservoirType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ReservoirType setHasMap(Property\HasMapProperty $hasMap)
 * @method ReservoirType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReservoirType setImage(Property\ImageProperty $image)
 * @method ReservoirType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ReservoirType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ReservoirType setKeywords(Property\KeywordsProperty $keywords)
 * @method ReservoirType setLatitude(Property\LatitudeProperty $latitude)
 * @method ReservoirType setLogo(Property\LogoProperty $logo)
 * @method ReservoirType setLongitude(Property\LongitudeProperty $longitude)
 * @method ReservoirType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReservoirType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ReservoirType setName(Property\NameProperty $name)
 * @method ReservoirType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ReservoirType setPhoto(Property\PhotoProperty $photo)
 * @method ReservoirType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReservoirType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ReservoirType setReview(Property\ReviewProperty $review)
 * @method ReservoirType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReservoirType setSlogan(Property\SloganProperty $slogan)
 * @method ReservoirType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ReservoirType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ReservoirType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ReservoirType setTelephone(Property\TelephoneProperty $telephone)
 * @method ReservoirType setUrl(Property\UrlProperty $url)
 */
class ReservoirType extends BodyOfWaterType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Reservoir';
	}
}