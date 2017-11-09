<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BedAndBreakfastType.
 * 
 * @method BedAndBreakfastType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BedAndBreakfastType setAddress(Property\AddressProperty $address)
 * @method BedAndBreakfastType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BedAndBreakfastType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BedAndBreakfastType setAlumni(Property\AlumniProperty $alumni)
 * @method BedAndBreakfastType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BedAndBreakfastType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method BedAndBreakfastType setAudience(Property\AudienceProperty $audience)
 * @method BedAndBreakfastType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method BedAndBreakfastType setAward(Property\AwardProperty $award)
 * @method BedAndBreakfastType setBrand(Property\BrandProperty $brand)
 * @method BedAndBreakfastType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method BedAndBreakfastType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method BedAndBreakfastType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method BedAndBreakfastType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BedAndBreakfastType setDepartment(Property\DepartmentProperty $department)
 * @method BedAndBreakfastType setDescription(Property\DescriptionProperty $description)
 * @method BedAndBreakfastType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BedAndBreakfastType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method BedAndBreakfastType setDuns(Property\DunsProperty $duns)
 * @method BedAndBreakfastType setEmail(Property\EmailProperty $email)
 * @method BedAndBreakfastType setEmployee(Property\EmployeeProperty $employee)
 * @method BedAndBreakfastType setEvent(Property\EventProperty $event)
 * @method BedAndBreakfastType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BedAndBreakfastType setFounder(Property\FounderProperty $founder)
 * @method BedAndBreakfastType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method BedAndBreakfastType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method BedAndBreakfastType setFunder(Property\FunderProperty $funder)
 * @method BedAndBreakfastType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BedAndBreakfastType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method BedAndBreakfastType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method BedAndBreakfastType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BedAndBreakfastType setImage(Property\ImageProperty $image)
 * @method BedAndBreakfastType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BedAndBreakfastType setLegalName(Property\LegalNameProperty $legalName)
 * @method BedAndBreakfastType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method BedAndBreakfastType setLocation(Property\LocationProperty $location)
 * @method BedAndBreakfastType setLogo(Property\LogoProperty $logo)
 * @method BedAndBreakfastType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BedAndBreakfastType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method BedAndBreakfastType setMember(Property\MemberProperty $member)
 * @method BedAndBreakfastType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method BedAndBreakfastType setNaics(Property\NaicsProperty $naics)
 * @method BedAndBreakfastType setName(Property\NameProperty $name)
 * @method BedAndBreakfastType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method BedAndBreakfastType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BedAndBreakfastType setOwns(Property\OwnsProperty $owns)
 * @method BedAndBreakfastType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method BedAndBreakfastType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BedAndBreakfastType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method BedAndBreakfastType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BedAndBreakfastType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BedAndBreakfastType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method BedAndBreakfastType setReview(Property\ReviewProperty $review)
 * @method BedAndBreakfastType setSameAs(Property\SameAsProperty $sameAs)
 * @method BedAndBreakfastType setSeeks(Property\SeeksProperty $seeks)
 * @method BedAndBreakfastType setSponsor(Property\SponsorProperty $sponsor)
 * @method BedAndBreakfastType setStarRating(Property\StarRatingProperty $starRating)
 * @method BedAndBreakfastType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method BedAndBreakfastType setTaxID(Property\TaxIDProperty $taxID)
 * @method BedAndBreakfastType setTelephone(Property\TelephoneProperty $telephone)
 * @method BedAndBreakfastType setUrl(Property\UrlProperty $url)
 * @method BedAndBreakfastType setVatID(Property\VatIDProperty $vatID)
 */
class BedAndBreakfastType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BedAndBreakfast';
	}
}