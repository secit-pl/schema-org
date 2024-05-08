<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A post office.
 * 
 * @method PostOfficeType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PostOfficeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PostOfficeType setAddress(Property\AddressProperty $address)
 * @method PostOfficeType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PostOfficeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PostOfficeType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PostOfficeType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PostOfficeType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PostOfficeType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PostOfficeType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PostOfficeType setDescription(Property\DescriptionProperty $description)
 * @method PostOfficeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PostOfficeType setEvent(Property\EventProperty $event)
 * @method PostOfficeType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PostOfficeType setGeo(Property\GeoProperty $geo)
 * @method PostOfficeType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method PostOfficeType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method PostOfficeType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method PostOfficeType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method PostOfficeType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method PostOfficeType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method PostOfficeType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method PostOfficeType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method PostOfficeType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method PostOfficeType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method PostOfficeType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PostOfficeType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PostOfficeType setHasMap(Property\HasMapProperty $hasMap)
 * @method PostOfficeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PostOfficeType setImage(Property\ImageProperty $image)
 * @method PostOfficeType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PostOfficeType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PostOfficeType setKeywords(Property\KeywordsProperty $keywords)
 * @method PostOfficeType setLatitude(Property\LatitudeProperty $latitude)
 * @method PostOfficeType setLogo(Property\LogoProperty $logo)
 * @method PostOfficeType setLongitude(Property\LongitudeProperty $longitude)
 * @method PostOfficeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PostOfficeType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PostOfficeType setName(Property\NameProperty $name)
 * @method PostOfficeType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PostOfficeType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PostOfficeType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PostOfficeType setPhoto(Property\PhotoProperty $photo)
 * @method PostOfficeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PostOfficeType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PostOfficeType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PostOfficeType setReview(Property\ReviewProperty $review)
 * @method PostOfficeType setSameAs(Property\SameAsProperty $sameAs)
 * @method PostOfficeType setSlogan(Property\SloganProperty $slogan)
 * @method PostOfficeType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PostOfficeType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PostOfficeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PostOfficeType setTelephone(Property\TelephoneProperty $telephone)
 * @method PostOfficeType setUrl(Property\UrlProperty $url)
 */
class PostOfficeType extends GovernmentOfficeType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PostOffice';
	}
}