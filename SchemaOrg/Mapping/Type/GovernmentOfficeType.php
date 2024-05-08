<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A government office—for example, an IRS or DMV office.
 * 
 * @method GovernmentOfficeType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method GovernmentOfficeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GovernmentOfficeType setAddress(Property\AddressProperty $address)
 * @method GovernmentOfficeType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GovernmentOfficeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GovernmentOfficeType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method GovernmentOfficeType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method GovernmentOfficeType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method GovernmentOfficeType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method GovernmentOfficeType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method GovernmentOfficeType setDescription(Property\DescriptionProperty $description)
 * @method GovernmentOfficeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GovernmentOfficeType setEvent(Property\EventProperty $event)
 * @method GovernmentOfficeType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GovernmentOfficeType setGeo(Property\GeoProperty $geo)
 * @method GovernmentOfficeType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method GovernmentOfficeType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method GovernmentOfficeType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method GovernmentOfficeType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method GovernmentOfficeType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method GovernmentOfficeType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method GovernmentOfficeType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method GovernmentOfficeType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method GovernmentOfficeType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method GovernmentOfficeType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method GovernmentOfficeType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GovernmentOfficeType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method GovernmentOfficeType setHasMap(Property\HasMapProperty $hasMap)
 * @method GovernmentOfficeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GovernmentOfficeType setImage(Property\ImageProperty $image)
 * @method GovernmentOfficeType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method GovernmentOfficeType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GovernmentOfficeType setKeywords(Property\KeywordsProperty $keywords)
 * @method GovernmentOfficeType setLatitude(Property\LatitudeProperty $latitude)
 * @method GovernmentOfficeType setLogo(Property\LogoProperty $logo)
 * @method GovernmentOfficeType setLongitude(Property\LongitudeProperty $longitude)
 * @method GovernmentOfficeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GovernmentOfficeType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method GovernmentOfficeType setName(Property\NameProperty $name)
 * @method GovernmentOfficeType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method GovernmentOfficeType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method GovernmentOfficeType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method GovernmentOfficeType setPhoto(Property\PhotoProperty $photo)
 * @method GovernmentOfficeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GovernmentOfficeType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method GovernmentOfficeType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method GovernmentOfficeType setReview(Property\ReviewProperty $review)
 * @method GovernmentOfficeType setSameAs(Property\SameAsProperty $sameAs)
 * @method GovernmentOfficeType setSlogan(Property\SloganProperty $slogan)
 * @method GovernmentOfficeType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method GovernmentOfficeType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method GovernmentOfficeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GovernmentOfficeType setTelephone(Property\TelephoneProperty $telephone)
 * @method GovernmentOfficeType setUrl(Property\UrlProperty $url)
 */
class GovernmentOfficeType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GovernmentOffice';
	}
}