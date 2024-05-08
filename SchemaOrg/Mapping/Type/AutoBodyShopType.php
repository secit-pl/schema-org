<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Auto body shop.
 * 
 * @method AutoBodyShopType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AutoBodyShopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutoBodyShopType setAddress(Property\AddressProperty $address)
 * @method AutoBodyShopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutoBodyShopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutoBodyShopType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AutoBodyShopType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AutoBodyShopType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AutoBodyShopType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AutoBodyShopType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutoBodyShopType setDescription(Property\DescriptionProperty $description)
 * @method AutoBodyShopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutoBodyShopType setEvent(Property\EventProperty $event)
 * @method AutoBodyShopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutoBodyShopType setGeo(Property\GeoProperty $geo)
 * @method AutoBodyShopType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AutoBodyShopType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AutoBodyShopType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AutoBodyShopType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AutoBodyShopType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AutoBodyShopType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AutoBodyShopType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AutoBodyShopType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AutoBodyShopType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AutoBodyShopType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AutoBodyShopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutoBodyShopType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AutoBodyShopType setHasMap(Property\HasMapProperty $hasMap)
 * @method AutoBodyShopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutoBodyShopType setImage(Property\ImageProperty $image)
 * @method AutoBodyShopType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AutoBodyShopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutoBodyShopType setKeywords(Property\KeywordsProperty $keywords)
 * @method AutoBodyShopType setLatitude(Property\LatitudeProperty $latitude)
 * @method AutoBodyShopType setLogo(Property\LogoProperty $logo)
 * @method AutoBodyShopType setLongitude(Property\LongitudeProperty $longitude)
 * @method AutoBodyShopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutoBodyShopType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AutoBodyShopType setName(Property\NameProperty $name)
 * @method AutoBodyShopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutoBodyShopType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AutoBodyShopType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutoBodyShopType setPhoto(Property\PhotoProperty $photo)
 * @method AutoBodyShopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutoBodyShopType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutoBodyShopType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AutoBodyShopType setReview(Property\ReviewProperty $review)
 * @method AutoBodyShopType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutoBodyShopType setSlogan(Property\SloganProperty $slogan)
 * @method AutoBodyShopType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AutoBodyShopType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AutoBodyShopType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AutoBodyShopType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutoBodyShopType setUrl(Property\UrlProperty $url)
 */
class AutoBodyShopType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoBodyShop';
	}
}