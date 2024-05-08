<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A shop that will buy, or lend money against the security of, personal possessions.
 * 
 * @method PawnShopType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PawnShopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PawnShopType setAddress(Property\AddressProperty $address)
 * @method PawnShopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PawnShopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PawnShopType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PawnShopType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PawnShopType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PawnShopType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PawnShopType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PawnShopType setDescription(Property\DescriptionProperty $description)
 * @method PawnShopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PawnShopType setEvent(Property\EventProperty $event)
 * @method PawnShopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PawnShopType setGeo(Property\GeoProperty $geo)
 * @method PawnShopType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method PawnShopType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method PawnShopType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method PawnShopType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method PawnShopType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method PawnShopType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method PawnShopType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method PawnShopType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method PawnShopType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method PawnShopType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method PawnShopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PawnShopType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PawnShopType setHasMap(Property\HasMapProperty $hasMap)
 * @method PawnShopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PawnShopType setImage(Property\ImageProperty $image)
 * @method PawnShopType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PawnShopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PawnShopType setKeywords(Property\KeywordsProperty $keywords)
 * @method PawnShopType setLatitude(Property\LatitudeProperty $latitude)
 * @method PawnShopType setLogo(Property\LogoProperty $logo)
 * @method PawnShopType setLongitude(Property\LongitudeProperty $longitude)
 * @method PawnShopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PawnShopType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PawnShopType setName(Property\NameProperty $name)
 * @method PawnShopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PawnShopType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PawnShopType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PawnShopType setPhoto(Property\PhotoProperty $photo)
 * @method PawnShopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PawnShopType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PawnShopType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PawnShopType setReview(Property\ReviewProperty $review)
 * @method PawnShopType setSameAs(Property\SameAsProperty $sameAs)
 * @method PawnShopType setSlogan(Property\SloganProperty $slogan)
 * @method PawnShopType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PawnShopType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PawnShopType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PawnShopType setTelephone(Property\TelephoneProperty $telephone)
 * @method PawnShopType setUrl(Property\UrlProperty $url)
 */
class PawnShopType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PawnShop';
	}
}