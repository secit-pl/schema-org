<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ResortType.
 * 
 * @method ResortType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ResortType setAddress(Property\AddressProperty $address)
 * @method ResortType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ResortType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ResortType setAlumni(Property\AlumniProperty $alumni)
 * @method ResortType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ResortType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ResortType setAudience(Property\AudienceProperty $audience)
 * @method ResortType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method ResortType setAward(Property\AwardProperty $award)
 * @method ResortType setBrand(Property\BrandProperty $brand)
 * @method ResortType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method ResortType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method ResortType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ResortType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ResortType setDepartment(Property\DepartmentProperty $department)
 * @method ResortType setDescription(Property\DescriptionProperty $description)
 * @method ResortType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ResortType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ResortType setDuns(Property\DunsProperty $duns)
 * @method ResortType setEmail(Property\EmailProperty $email)
 * @method ResortType setEmployee(Property\EmployeeProperty $employee)
 * @method ResortType setEvent(Property\EventProperty $event)
 * @method ResortType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ResortType setFounder(Property\FounderProperty $founder)
 * @method ResortType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ResortType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ResortType setFunder(Property\FunderProperty $funder)
 * @method ResortType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ResortType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ResortType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ResortType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ResortType setImage(Property\ImageProperty $image)
 * @method ResortType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ResortType setLegalName(Property\LegalNameProperty $legalName)
 * @method ResortType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ResortType setLocation(Property\LocationProperty $location)
 * @method ResortType setLogo(Property\LogoProperty $logo)
 * @method ResortType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ResortType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ResortType setMember(Property\MemberProperty $member)
 * @method ResortType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ResortType setNaics(Property\NaicsProperty $naics)
 * @method ResortType setName(Property\NameProperty $name)
 * @method ResortType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ResortType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ResortType setOwns(Property\OwnsProperty $owns)
 * @method ResortType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ResortType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ResortType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method ResortType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ResortType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ResortType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ResortType setReview(Property\ReviewProperty $review)
 * @method ResortType setSameAs(Property\SameAsProperty $sameAs)
 * @method ResortType setSeeks(Property\SeeksProperty $seeks)
 * @method ResortType setSponsor(Property\SponsorProperty $sponsor)
 * @method ResortType setStarRating(Property\StarRatingProperty $starRating)
 * @method ResortType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ResortType setTaxID(Property\TaxIDProperty $taxID)
 * @method ResortType setTelephone(Property\TelephoneProperty $telephone)
 * @method ResortType setUrl(Property\UrlProperty $url)
 * @method ResortType setVatID(Property\VatIDProperty $vatID)
 */
class ResortType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Resort';
	}
}