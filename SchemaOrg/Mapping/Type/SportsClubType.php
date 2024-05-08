<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A sports club.
 * 
 * @method SportsClubType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SportsClubType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SportsClubType setAddress(Property\AddressProperty $address)
 * @method SportsClubType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SportsClubType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SportsClubType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method SportsClubType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method SportsClubType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method SportsClubType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method SportsClubType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method SportsClubType setDescription(Property\DescriptionProperty $description)
 * @method SportsClubType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SportsClubType setEvent(Property\EventProperty $event)
 * @method SportsClubType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SportsClubType setGeo(Property\GeoProperty $geo)
 * @method SportsClubType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method SportsClubType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method SportsClubType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method SportsClubType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method SportsClubType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method SportsClubType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method SportsClubType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method SportsClubType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method SportsClubType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method SportsClubType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method SportsClubType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SportsClubType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method SportsClubType setHasMap(Property\HasMapProperty $hasMap)
 * @method SportsClubType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SportsClubType setImage(Property\ImageProperty $image)
 * @method SportsClubType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SportsClubType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SportsClubType setKeywords(Property\KeywordsProperty $keywords)
 * @method SportsClubType setLatitude(Property\LatitudeProperty $latitude)
 * @method SportsClubType setLogo(Property\LogoProperty $logo)
 * @method SportsClubType setLongitude(Property\LongitudeProperty $longitude)
 * @method SportsClubType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SportsClubType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SportsClubType setName(Property\NameProperty $name)
 * @method SportsClubType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method SportsClubType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method SportsClubType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method SportsClubType setPhoto(Property\PhotoProperty $photo)
 * @method SportsClubType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SportsClubType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method SportsClubType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method SportsClubType setReview(Property\ReviewProperty $review)
 * @method SportsClubType setSameAs(Property\SameAsProperty $sameAs)
 * @method SportsClubType setSlogan(Property\SloganProperty $slogan)
 * @method SportsClubType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method SportsClubType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method SportsClubType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SportsClubType setTelephone(Property\TelephoneProperty $telephone)
 * @method SportsClubType setUrl(Property\UrlProperty $url)
 */
class SportsClubType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsClub';
	}
}