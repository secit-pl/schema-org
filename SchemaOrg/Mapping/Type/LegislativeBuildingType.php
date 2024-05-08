<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A legislative building—for example, the state capitol.
 * 
 * @method LegislativeBuildingType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LegislativeBuildingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LegislativeBuildingType setAddress(Property\AddressProperty $address)
 * @method LegislativeBuildingType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LegislativeBuildingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LegislativeBuildingType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LegislativeBuildingType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LegislativeBuildingType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LegislativeBuildingType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LegislativeBuildingType setDescription(Property\DescriptionProperty $description)
 * @method LegislativeBuildingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LegislativeBuildingType setEvent(Property\EventProperty $event)
 * @method LegislativeBuildingType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LegislativeBuildingType setGeo(Property\GeoProperty $geo)
 * @method LegislativeBuildingType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method LegislativeBuildingType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method LegislativeBuildingType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method LegislativeBuildingType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method LegislativeBuildingType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method LegislativeBuildingType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method LegislativeBuildingType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method LegislativeBuildingType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method LegislativeBuildingType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method LegislativeBuildingType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method LegislativeBuildingType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LegislativeBuildingType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method LegislativeBuildingType setHasMap(Property\HasMapProperty $hasMap)
 * @method LegislativeBuildingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LegislativeBuildingType setImage(Property\ImageProperty $image)
 * @method LegislativeBuildingType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LegislativeBuildingType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LegislativeBuildingType setKeywords(Property\KeywordsProperty $keywords)
 * @method LegislativeBuildingType setLatitude(Property\LatitudeProperty $latitude)
 * @method LegislativeBuildingType setLogo(Property\LogoProperty $logo)
 * @method LegislativeBuildingType setLongitude(Property\LongitudeProperty $longitude)
 * @method LegislativeBuildingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LegislativeBuildingType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LegislativeBuildingType setName(Property\NameProperty $name)
 * @method LegislativeBuildingType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method LegislativeBuildingType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LegislativeBuildingType setPhoto(Property\PhotoProperty $photo)
 * @method LegislativeBuildingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LegislativeBuildingType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LegislativeBuildingType setReview(Property\ReviewProperty $review)
 * @method LegislativeBuildingType setSameAs(Property\SameAsProperty $sameAs)
 * @method LegislativeBuildingType setSlogan(Property\SloganProperty $slogan)
 * @method LegislativeBuildingType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LegislativeBuildingType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LegislativeBuildingType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LegislativeBuildingType setTelephone(Property\TelephoneProperty $telephone)
 * @method LegislativeBuildingType setUrl(Property\UrlProperty $url)
 */
class LegislativeBuildingType extends GovernmentBuildingType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LegislativeBuilding';
	}
}