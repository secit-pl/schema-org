<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Residence type: Gated community.
 * 
 * @method GatedResidenceCommunityType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method GatedResidenceCommunityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GatedResidenceCommunityType setAddress(Property\AddressProperty $address)
 * @method GatedResidenceCommunityType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GatedResidenceCommunityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GatedResidenceCommunityType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method GatedResidenceCommunityType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method GatedResidenceCommunityType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method GatedResidenceCommunityType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method GatedResidenceCommunityType setDescription(Property\DescriptionProperty $description)
 * @method GatedResidenceCommunityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GatedResidenceCommunityType setEvent(Property\EventProperty $event)
 * @method GatedResidenceCommunityType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GatedResidenceCommunityType setGeo(Property\GeoProperty $geo)
 * @method GatedResidenceCommunityType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method GatedResidenceCommunityType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method GatedResidenceCommunityType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method GatedResidenceCommunityType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method GatedResidenceCommunityType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method GatedResidenceCommunityType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method GatedResidenceCommunityType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method GatedResidenceCommunityType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method GatedResidenceCommunityType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method GatedResidenceCommunityType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method GatedResidenceCommunityType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GatedResidenceCommunityType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method GatedResidenceCommunityType setHasMap(Property\HasMapProperty $hasMap)
 * @method GatedResidenceCommunityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GatedResidenceCommunityType setImage(Property\ImageProperty $image)
 * @method GatedResidenceCommunityType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method GatedResidenceCommunityType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GatedResidenceCommunityType setKeywords(Property\KeywordsProperty $keywords)
 * @method GatedResidenceCommunityType setLatitude(Property\LatitudeProperty $latitude)
 * @method GatedResidenceCommunityType setLogo(Property\LogoProperty $logo)
 * @method GatedResidenceCommunityType setLongitude(Property\LongitudeProperty $longitude)
 * @method GatedResidenceCommunityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GatedResidenceCommunityType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method GatedResidenceCommunityType setName(Property\NameProperty $name)
 * @method GatedResidenceCommunityType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method GatedResidenceCommunityType setPhoto(Property\PhotoProperty $photo)
 * @method GatedResidenceCommunityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GatedResidenceCommunityType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method GatedResidenceCommunityType setReview(Property\ReviewProperty $review)
 * @method GatedResidenceCommunityType setSameAs(Property\SameAsProperty $sameAs)
 * @method GatedResidenceCommunityType setSlogan(Property\SloganProperty $slogan)
 * @method GatedResidenceCommunityType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method GatedResidenceCommunityType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method GatedResidenceCommunityType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GatedResidenceCommunityType setTelephone(Property\TelephoneProperty $telephone)
 * @method GatedResidenceCommunityType setUrl(Property\UrlProperty $url)
 */
class GatedResidenceCommunityType extends ResidenceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GatedResidenceCommunity';
	}
}