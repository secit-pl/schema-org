<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HotelType.
 * 
 * @method HotelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HotelType setAddress(Property\AddressProperty $address)
 * @method HotelType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HotelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HotelType setAlumni(Property\AlumniProperty $alumni)
 * @method HotelType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HotelType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HotelType setAudience(Property\AudienceProperty $audience)
 * @method HotelType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method HotelType setAward(Property\AwardProperty $award)
 * @method HotelType setBrand(Property\BrandProperty $brand)
 * @method HotelType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method HotelType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method HotelType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HotelType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HotelType setDepartment(Property\DepartmentProperty $department)
 * @method HotelType setDescription(Property\DescriptionProperty $description)
 * @method HotelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HotelType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HotelType setDuns(Property\DunsProperty $duns)
 * @method HotelType setEmail(Property\EmailProperty $email)
 * @method HotelType setEmployee(Property\EmployeeProperty $employee)
 * @method HotelType setEvent(Property\EventProperty $event)
 * @method HotelType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HotelType setFounder(Property\FounderProperty $founder)
 * @method HotelType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HotelType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HotelType setFunder(Property\FunderProperty $funder)
 * @method HotelType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HotelType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HotelType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HotelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HotelType setImage(Property\ImageProperty $image)
 * @method HotelType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HotelType setLegalName(Property\LegalNameProperty $legalName)
 * @method HotelType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HotelType setLocation(Property\LocationProperty $location)
 * @method HotelType setLogo(Property\LogoProperty $logo)
 * @method HotelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HotelType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HotelType setMember(Property\MemberProperty $member)
 * @method HotelType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HotelType setNaics(Property\NaicsProperty $naics)
 * @method HotelType setName(Property\NameProperty $name)
 * @method HotelType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HotelType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HotelType setOwns(Property\OwnsProperty $owns)
 * @method HotelType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HotelType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HotelType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method HotelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HotelType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HotelType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HotelType setReview(Property\ReviewProperty $review)
 * @method HotelType setSameAs(Property\SameAsProperty $sameAs)
 * @method HotelType setSeeks(Property\SeeksProperty $seeks)
 * @method HotelType setSponsor(Property\SponsorProperty $sponsor)
 * @method HotelType setStarRating(Property\StarRatingProperty $starRating)
 * @method HotelType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HotelType setTaxID(Property\TaxIDProperty $taxID)
 * @method HotelType setTelephone(Property\TelephoneProperty $telephone)
 * @method HotelType setUrl(Property\UrlProperty $url)
 * @method HotelType setVatID(Property\VatIDProperty $vatID)
 */
class HotelType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Hotel';
	}
}