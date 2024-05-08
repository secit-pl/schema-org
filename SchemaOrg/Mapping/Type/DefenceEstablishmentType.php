<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A defence establishment, such as an army or navy base.
 * 
 * @method DefenceEstablishmentType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method DefenceEstablishmentType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DefenceEstablishmentType setAddress(Property\AddressProperty $address)
 * @method DefenceEstablishmentType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DefenceEstablishmentType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DefenceEstablishmentType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method DefenceEstablishmentType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method DefenceEstablishmentType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method DefenceEstablishmentType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method DefenceEstablishmentType setDescription(Property\DescriptionProperty $description)
 * @method DefenceEstablishmentType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DefenceEstablishmentType setEvent(Property\EventProperty $event)
 * @method DefenceEstablishmentType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method DefenceEstablishmentType setGeo(Property\GeoProperty $geo)
 * @method DefenceEstablishmentType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method DefenceEstablishmentType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method DefenceEstablishmentType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method DefenceEstablishmentType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method DefenceEstablishmentType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method DefenceEstablishmentType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method DefenceEstablishmentType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method DefenceEstablishmentType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method DefenceEstablishmentType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method DefenceEstablishmentType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method DefenceEstablishmentType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method DefenceEstablishmentType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method DefenceEstablishmentType setHasMap(Property\HasMapProperty $hasMap)
 * @method DefenceEstablishmentType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DefenceEstablishmentType setImage(Property\ImageProperty $image)
 * @method DefenceEstablishmentType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method DefenceEstablishmentType setIsicV4(Property\IsicV4Property $isicV4)
 * @method DefenceEstablishmentType setKeywords(Property\KeywordsProperty $keywords)
 * @method DefenceEstablishmentType setLatitude(Property\LatitudeProperty $latitude)
 * @method DefenceEstablishmentType setLogo(Property\LogoProperty $logo)
 * @method DefenceEstablishmentType setLongitude(Property\LongitudeProperty $longitude)
 * @method DefenceEstablishmentType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DefenceEstablishmentType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method DefenceEstablishmentType setName(Property\NameProperty $name)
 * @method DefenceEstablishmentType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method DefenceEstablishmentType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method DefenceEstablishmentType setPhoto(Property\PhotoProperty $photo)
 * @method DefenceEstablishmentType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DefenceEstablishmentType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method DefenceEstablishmentType setReview(Property\ReviewProperty $review)
 * @method DefenceEstablishmentType setSameAs(Property\SameAsProperty $sameAs)
 * @method DefenceEstablishmentType setSlogan(Property\SloganProperty $slogan)
 * @method DefenceEstablishmentType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method DefenceEstablishmentType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method DefenceEstablishmentType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DefenceEstablishmentType setTelephone(Property\TelephoneProperty $telephone)
 * @method DefenceEstablishmentType setUrl(Property\UrlProperty $url)
 */
class DefenceEstablishmentType extends GovernmentBuildingType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DefenceEstablishment';
	}
}