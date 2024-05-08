<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A store that sells materials useful or necessary for various hobbies.
 * 
 * @method HobbyShopType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HobbyShopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HobbyShopType setAddress(Property\AddressProperty $address)
 * @method HobbyShopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HobbyShopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HobbyShopType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HobbyShopType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HobbyShopType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HobbyShopType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HobbyShopType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HobbyShopType setDescription(Property\DescriptionProperty $description)
 * @method HobbyShopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HobbyShopType setEvent(Property\EventProperty $event)
 * @method HobbyShopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HobbyShopType setGeo(Property\GeoProperty $geo)
 * @method HobbyShopType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HobbyShopType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HobbyShopType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HobbyShopType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HobbyShopType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HobbyShopType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HobbyShopType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HobbyShopType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HobbyShopType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HobbyShopType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HobbyShopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HobbyShopType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HobbyShopType setHasMap(Property\HasMapProperty $hasMap)
 * @method HobbyShopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HobbyShopType setImage(Property\ImageProperty $image)
 * @method HobbyShopType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HobbyShopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HobbyShopType setKeywords(Property\KeywordsProperty $keywords)
 * @method HobbyShopType setLatitude(Property\LatitudeProperty $latitude)
 * @method HobbyShopType setLogo(Property\LogoProperty $logo)
 * @method HobbyShopType setLongitude(Property\LongitudeProperty $longitude)
 * @method HobbyShopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HobbyShopType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HobbyShopType setName(Property\NameProperty $name)
 * @method HobbyShopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HobbyShopType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HobbyShopType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HobbyShopType setPhoto(Property\PhotoProperty $photo)
 * @method HobbyShopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HobbyShopType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HobbyShopType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HobbyShopType setReview(Property\ReviewProperty $review)
 * @method HobbyShopType setSameAs(Property\SameAsProperty $sameAs)
 * @method HobbyShopType setSlogan(Property\SloganProperty $slogan)
 * @method HobbyShopType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HobbyShopType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HobbyShopType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HobbyShopType setTelephone(Property\TelephoneProperty $telephone)
 * @method HobbyShopType setUrl(Property\UrlProperty $url)
 */
class HobbyShopType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HobbyShop';
	}
}