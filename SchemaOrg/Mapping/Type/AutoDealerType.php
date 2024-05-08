<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An car dealership.
 * 
 * @method AutoDealerType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AutoDealerType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutoDealerType setAddress(Property\AddressProperty $address)
 * @method AutoDealerType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutoDealerType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutoDealerType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AutoDealerType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AutoDealerType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AutoDealerType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AutoDealerType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutoDealerType setDescription(Property\DescriptionProperty $description)
 * @method AutoDealerType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutoDealerType setEvent(Property\EventProperty $event)
 * @method AutoDealerType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutoDealerType setGeo(Property\GeoProperty $geo)
 * @method AutoDealerType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AutoDealerType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AutoDealerType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AutoDealerType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AutoDealerType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AutoDealerType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AutoDealerType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AutoDealerType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AutoDealerType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AutoDealerType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AutoDealerType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutoDealerType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AutoDealerType setHasMap(Property\HasMapProperty $hasMap)
 * @method AutoDealerType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutoDealerType setImage(Property\ImageProperty $image)
 * @method AutoDealerType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AutoDealerType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutoDealerType setKeywords(Property\KeywordsProperty $keywords)
 * @method AutoDealerType setLatitude(Property\LatitudeProperty $latitude)
 * @method AutoDealerType setLogo(Property\LogoProperty $logo)
 * @method AutoDealerType setLongitude(Property\LongitudeProperty $longitude)
 * @method AutoDealerType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutoDealerType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AutoDealerType setName(Property\NameProperty $name)
 * @method AutoDealerType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutoDealerType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AutoDealerType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutoDealerType setPhoto(Property\PhotoProperty $photo)
 * @method AutoDealerType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutoDealerType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutoDealerType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AutoDealerType setReview(Property\ReviewProperty $review)
 * @method AutoDealerType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutoDealerType setSlogan(Property\SloganProperty $slogan)
 * @method AutoDealerType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AutoDealerType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AutoDealerType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AutoDealerType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutoDealerType setUrl(Property\UrlProperty $url)
 */
class AutoDealerType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoDealer';
	}
}