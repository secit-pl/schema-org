<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An ice cream shop.
 * 
 * @method IceCreamShopType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method IceCreamShopType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method IceCreamShopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method IceCreamShopType setAddress(Property\AddressProperty $address)
 * @method IceCreamShopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method IceCreamShopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method IceCreamShopType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method IceCreamShopType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method IceCreamShopType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method IceCreamShopType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method IceCreamShopType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method IceCreamShopType setDescription(Property\DescriptionProperty $description)
 * @method IceCreamShopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method IceCreamShopType setEvent(Property\EventProperty $event)
 * @method IceCreamShopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method IceCreamShopType setGeo(Property\GeoProperty $geo)
 * @method IceCreamShopType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method IceCreamShopType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method IceCreamShopType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method IceCreamShopType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method IceCreamShopType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method IceCreamShopType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method IceCreamShopType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method IceCreamShopType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method IceCreamShopType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method IceCreamShopType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method IceCreamShopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method IceCreamShopType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method IceCreamShopType setHasMap(Property\HasMapProperty $hasMap)
 * @method IceCreamShopType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method IceCreamShopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method IceCreamShopType setImage(Property\ImageProperty $image)
 * @method IceCreamShopType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method IceCreamShopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method IceCreamShopType setKeywords(Property\KeywordsProperty $keywords)
 * @method IceCreamShopType setLatitude(Property\LatitudeProperty $latitude)
 * @method IceCreamShopType setLogo(Property\LogoProperty $logo)
 * @method IceCreamShopType setLongitude(Property\LongitudeProperty $longitude)
 * @method IceCreamShopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method IceCreamShopType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method IceCreamShopType setName(Property\NameProperty $name)
 * @method IceCreamShopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method IceCreamShopType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method IceCreamShopType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method IceCreamShopType setPhoto(Property\PhotoProperty $photo)
 * @method IceCreamShopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method IceCreamShopType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method IceCreamShopType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method IceCreamShopType setReview(Property\ReviewProperty $review)
 * @method IceCreamShopType setSameAs(Property\SameAsProperty $sameAs)
 * @method IceCreamShopType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method IceCreamShopType setSlogan(Property\SloganProperty $slogan)
 * @method IceCreamShopType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method IceCreamShopType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method IceCreamShopType setStarRating(Property\StarRatingProperty $starRating)
 * @method IceCreamShopType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method IceCreamShopType setTelephone(Property\TelephoneProperty $telephone)
 * @method IceCreamShopType setUrl(Property\UrlProperty $url)
 */
class IceCreamShopType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/IceCreamShop';
	}
}