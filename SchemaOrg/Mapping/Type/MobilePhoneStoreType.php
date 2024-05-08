<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A store that sells mobile phones and related accessories.
 * 
 * @method MobilePhoneStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MobilePhoneStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MobilePhoneStoreType setAddress(Property\AddressProperty $address)
 * @method MobilePhoneStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MobilePhoneStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MobilePhoneStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MobilePhoneStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MobilePhoneStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MobilePhoneStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MobilePhoneStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MobilePhoneStoreType setDescription(Property\DescriptionProperty $description)
 * @method MobilePhoneStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MobilePhoneStoreType setEvent(Property\EventProperty $event)
 * @method MobilePhoneStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MobilePhoneStoreType setGeo(Property\GeoProperty $geo)
 * @method MobilePhoneStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MobilePhoneStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MobilePhoneStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MobilePhoneStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MobilePhoneStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MobilePhoneStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MobilePhoneStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MobilePhoneStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MobilePhoneStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MobilePhoneStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MobilePhoneStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MobilePhoneStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MobilePhoneStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method MobilePhoneStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MobilePhoneStoreType setImage(Property\ImageProperty $image)
 * @method MobilePhoneStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MobilePhoneStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MobilePhoneStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method MobilePhoneStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method MobilePhoneStoreType setLogo(Property\LogoProperty $logo)
 * @method MobilePhoneStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method MobilePhoneStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MobilePhoneStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MobilePhoneStoreType setName(Property\NameProperty $name)
 * @method MobilePhoneStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MobilePhoneStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MobilePhoneStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MobilePhoneStoreType setPhoto(Property\PhotoProperty $photo)
 * @method MobilePhoneStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MobilePhoneStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MobilePhoneStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MobilePhoneStoreType setReview(Property\ReviewProperty $review)
 * @method MobilePhoneStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method MobilePhoneStoreType setSlogan(Property\SloganProperty $slogan)
 * @method MobilePhoneStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MobilePhoneStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MobilePhoneStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MobilePhoneStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method MobilePhoneStoreType setUrl(Property\UrlProperty $url)
 */
class MobilePhoneStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MobilePhoneStore';
	}
}