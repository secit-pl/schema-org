<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A place offering space for "Recreational Vehicles", Caravans, mobile homes and the like.
 * 
 * @method RVParkType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RVParkType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RVParkType setAddress(Property\AddressProperty $address)
 * @method RVParkType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RVParkType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RVParkType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method RVParkType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method RVParkType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method RVParkType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method RVParkType setDescription(Property\DescriptionProperty $description)
 * @method RVParkType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RVParkType setEvent(Property\EventProperty $event)
 * @method RVParkType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RVParkType setGeo(Property\GeoProperty $geo)
 * @method RVParkType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method RVParkType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method RVParkType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method RVParkType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method RVParkType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method RVParkType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method RVParkType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method RVParkType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method RVParkType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method RVParkType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method RVParkType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RVParkType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method RVParkType setHasMap(Property\HasMapProperty $hasMap)
 * @method RVParkType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RVParkType setImage(Property\ImageProperty $image)
 * @method RVParkType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method RVParkType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RVParkType setKeywords(Property\KeywordsProperty $keywords)
 * @method RVParkType setLatitude(Property\LatitudeProperty $latitude)
 * @method RVParkType setLogo(Property\LogoProperty $logo)
 * @method RVParkType setLongitude(Property\LongitudeProperty $longitude)
 * @method RVParkType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RVParkType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method RVParkType setName(Property\NameProperty $name)
 * @method RVParkType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method RVParkType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method RVParkType setPhoto(Property\PhotoProperty $photo)
 * @method RVParkType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RVParkType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method RVParkType setReview(Property\ReviewProperty $review)
 * @method RVParkType setSameAs(Property\SameAsProperty $sameAs)
 * @method RVParkType setSlogan(Property\SloganProperty $slogan)
 * @method RVParkType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method RVParkType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method RVParkType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RVParkType setTelephone(Property\TelephoneProperty $telephone)
 * @method RVParkType setUrl(Property\UrlProperty $url)
 */
class RVParkType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RVPark';
	}
}