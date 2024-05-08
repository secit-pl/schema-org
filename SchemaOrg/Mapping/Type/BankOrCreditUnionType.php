<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Bank or credit union.
 * 
 * @method BankOrCreditUnionType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BankOrCreditUnionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BankOrCreditUnionType setAddress(Property\AddressProperty $address)
 * @method BankOrCreditUnionType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BankOrCreditUnionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BankOrCreditUnionType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BankOrCreditUnionType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BankOrCreditUnionType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BankOrCreditUnionType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BankOrCreditUnionType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BankOrCreditUnionType setDescription(Property\DescriptionProperty $description)
 * @method BankOrCreditUnionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BankOrCreditUnionType setEvent(Property\EventProperty $event)
 * @method BankOrCreditUnionType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BankOrCreditUnionType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method BankOrCreditUnionType setGeo(Property\GeoProperty $geo)
 * @method BankOrCreditUnionType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BankOrCreditUnionType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BankOrCreditUnionType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BankOrCreditUnionType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BankOrCreditUnionType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BankOrCreditUnionType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BankOrCreditUnionType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BankOrCreditUnionType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BankOrCreditUnionType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BankOrCreditUnionType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BankOrCreditUnionType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BankOrCreditUnionType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BankOrCreditUnionType setHasMap(Property\HasMapProperty $hasMap)
 * @method BankOrCreditUnionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BankOrCreditUnionType setImage(Property\ImageProperty $image)
 * @method BankOrCreditUnionType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BankOrCreditUnionType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BankOrCreditUnionType setKeywords(Property\KeywordsProperty $keywords)
 * @method BankOrCreditUnionType setLatitude(Property\LatitudeProperty $latitude)
 * @method BankOrCreditUnionType setLogo(Property\LogoProperty $logo)
 * @method BankOrCreditUnionType setLongitude(Property\LongitudeProperty $longitude)
 * @method BankOrCreditUnionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BankOrCreditUnionType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BankOrCreditUnionType setName(Property\NameProperty $name)
 * @method BankOrCreditUnionType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BankOrCreditUnionType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BankOrCreditUnionType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BankOrCreditUnionType setPhoto(Property\PhotoProperty $photo)
 * @method BankOrCreditUnionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BankOrCreditUnionType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BankOrCreditUnionType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BankOrCreditUnionType setReview(Property\ReviewProperty $review)
 * @method BankOrCreditUnionType setSameAs(Property\SameAsProperty $sameAs)
 * @method BankOrCreditUnionType setSlogan(Property\SloganProperty $slogan)
 * @method BankOrCreditUnionType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BankOrCreditUnionType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BankOrCreditUnionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BankOrCreditUnionType setTelephone(Property\TelephoneProperty $telephone)
 * @method BankOrCreditUnionType setUrl(Property\UrlProperty $url)
 */
class BankOrCreditUnionType extends FinancialServiceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BankOrCreditUnion';
	}
}