<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A comedy club.
 * 
 * @method ComedyClubType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ComedyClubType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ComedyClubType setAddress(Property\AddressProperty $address)
 * @method ComedyClubType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ComedyClubType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ComedyClubType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ComedyClubType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ComedyClubType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ComedyClubType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ComedyClubType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ComedyClubType setDescription(Property\DescriptionProperty $description)
 * @method ComedyClubType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ComedyClubType setEvent(Property\EventProperty $event)
 * @method ComedyClubType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ComedyClubType setGeo(Property\GeoProperty $geo)
 * @method ComedyClubType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ComedyClubType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ComedyClubType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ComedyClubType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ComedyClubType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ComedyClubType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ComedyClubType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ComedyClubType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ComedyClubType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ComedyClubType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ComedyClubType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ComedyClubType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ComedyClubType setHasMap(Property\HasMapProperty $hasMap)
 * @method ComedyClubType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ComedyClubType setImage(Property\ImageProperty $image)
 * @method ComedyClubType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ComedyClubType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ComedyClubType setKeywords(Property\KeywordsProperty $keywords)
 * @method ComedyClubType setLatitude(Property\LatitudeProperty $latitude)
 * @method ComedyClubType setLogo(Property\LogoProperty $logo)
 * @method ComedyClubType setLongitude(Property\LongitudeProperty $longitude)
 * @method ComedyClubType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ComedyClubType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ComedyClubType setName(Property\NameProperty $name)
 * @method ComedyClubType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ComedyClubType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ComedyClubType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ComedyClubType setPhoto(Property\PhotoProperty $photo)
 * @method ComedyClubType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ComedyClubType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ComedyClubType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ComedyClubType setReview(Property\ReviewProperty $review)
 * @method ComedyClubType setSameAs(Property\SameAsProperty $sameAs)
 * @method ComedyClubType setSlogan(Property\SloganProperty $slogan)
 * @method ComedyClubType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ComedyClubType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ComedyClubType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ComedyClubType setTelephone(Property\TelephoneProperty $telephone)
 * @method ComedyClubType setUrl(Property\UrlProperty $url)
 */
class ComedyClubType extends EntertainmentBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ComedyClub';
	}
}