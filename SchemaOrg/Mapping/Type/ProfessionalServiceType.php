<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Original definition: "provider of professional services." The general ProfessionalService type for local businesses was deprecated due to confusion with Service. For reference, the types that it included were: Dentist, AccountingService, Attorney, Notary, as well as types for several kinds of HomeAndConstructionBusiness: Electrician, GeneralContractor, HousePainter, Locksmith, Plumber, RoofingContractor. LegalService was introduced as a more inclusive supertype of Attorney.
 * 
 * @method ProfessionalServiceType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ProfessionalServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ProfessionalServiceType setAddress(Property\AddressProperty $address)
 * @method ProfessionalServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ProfessionalServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ProfessionalServiceType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ProfessionalServiceType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ProfessionalServiceType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ProfessionalServiceType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ProfessionalServiceType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ProfessionalServiceType setDescription(Property\DescriptionProperty $description)
 * @method ProfessionalServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ProfessionalServiceType setEvent(Property\EventProperty $event)
 * @method ProfessionalServiceType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ProfessionalServiceType setGeo(Property\GeoProperty $geo)
 * @method ProfessionalServiceType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ProfessionalServiceType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ProfessionalServiceType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ProfessionalServiceType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ProfessionalServiceType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ProfessionalServiceType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ProfessionalServiceType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ProfessionalServiceType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ProfessionalServiceType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ProfessionalServiceType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ProfessionalServiceType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ProfessionalServiceType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ProfessionalServiceType setHasMap(Property\HasMapProperty $hasMap)
 * @method ProfessionalServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ProfessionalServiceType setImage(Property\ImageProperty $image)
 * @method ProfessionalServiceType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ProfessionalServiceType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ProfessionalServiceType setKeywords(Property\KeywordsProperty $keywords)
 * @method ProfessionalServiceType setLatitude(Property\LatitudeProperty $latitude)
 * @method ProfessionalServiceType setLogo(Property\LogoProperty $logo)
 * @method ProfessionalServiceType setLongitude(Property\LongitudeProperty $longitude)
 * @method ProfessionalServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ProfessionalServiceType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ProfessionalServiceType setName(Property\NameProperty $name)
 * @method ProfessionalServiceType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ProfessionalServiceType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ProfessionalServiceType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ProfessionalServiceType setPhoto(Property\PhotoProperty $photo)
 * @method ProfessionalServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ProfessionalServiceType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ProfessionalServiceType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ProfessionalServiceType setReview(Property\ReviewProperty $review)
 * @method ProfessionalServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method ProfessionalServiceType setSlogan(Property\SloganProperty $slogan)
 * @method ProfessionalServiceType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ProfessionalServiceType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ProfessionalServiceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ProfessionalServiceType setTelephone(Property\TelephoneProperty $telephone)
 * @method ProfessionalServiceType setUrl(Property\UrlProperty $url)
 */
class ProfessionalServiceType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ProfessionalService';
	}
}