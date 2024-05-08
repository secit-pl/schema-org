<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A Catholic church.
 * 
 * @method CatholicChurchType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CatholicChurchType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CatholicChurchType setAddress(Property\AddressProperty $address)
 * @method CatholicChurchType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CatholicChurchType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CatholicChurchType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CatholicChurchType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CatholicChurchType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CatholicChurchType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CatholicChurchType setDescription(Property\DescriptionProperty $description)
 * @method CatholicChurchType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CatholicChurchType setEvent(Property\EventProperty $event)
 * @method CatholicChurchType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CatholicChurchType setGeo(Property\GeoProperty $geo)
 * @method CatholicChurchType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method CatholicChurchType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method CatholicChurchType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method CatholicChurchType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method CatholicChurchType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method CatholicChurchType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method CatholicChurchType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method CatholicChurchType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method CatholicChurchType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method CatholicChurchType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method CatholicChurchType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CatholicChurchType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CatholicChurchType setHasMap(Property\HasMapProperty $hasMap)
 * @method CatholicChurchType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CatholicChurchType setImage(Property\ImageProperty $image)
 * @method CatholicChurchType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CatholicChurchType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CatholicChurchType setKeywords(Property\KeywordsProperty $keywords)
 * @method CatholicChurchType setLatitude(Property\LatitudeProperty $latitude)
 * @method CatholicChurchType setLogo(Property\LogoProperty $logo)
 * @method CatholicChurchType setLongitude(Property\LongitudeProperty $longitude)
 * @method CatholicChurchType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CatholicChurchType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CatholicChurchType setName(Property\NameProperty $name)
 * @method CatholicChurchType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CatholicChurchType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CatholicChurchType setPhoto(Property\PhotoProperty $photo)
 * @method CatholicChurchType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CatholicChurchType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CatholicChurchType setReview(Property\ReviewProperty $review)
 * @method CatholicChurchType setSameAs(Property\SameAsProperty $sameAs)
 * @method CatholicChurchType setSlogan(Property\SloganProperty $slogan)
 * @method CatholicChurchType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CatholicChurchType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CatholicChurchType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CatholicChurchType setTelephone(Property\TelephoneProperty $telephone)
 * @method CatholicChurchType setUrl(Property\UrlProperty $url)
 */
class CatholicChurchType extends ChurchType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CatholicChurch';
	}
}