<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PoliceStationType.
 * 
 * @method PoliceStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PoliceStationType setAddress(Property\AddressProperty $address)
 * @method PoliceStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PoliceStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PoliceStationType setAlumni(Property\AlumniProperty $alumni)
 * @method PoliceStationType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method PoliceStationType setAward(Property\AwardProperty $award)
 * @method PoliceStationType setBrand(Property\BrandProperty $brand)
 * @method PoliceStationType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method PoliceStationType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PoliceStationType setDepartment(Property\DepartmentProperty $department)
 * @method PoliceStationType setDescription(Property\DescriptionProperty $description)
 * @method PoliceStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PoliceStationType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method PoliceStationType setDuns(Property\DunsProperty $duns)
 * @method PoliceStationType setEmail(Property\EmailProperty $email)
 * @method PoliceStationType setEmployee(Property\EmployeeProperty $employee)
 * @method PoliceStationType setEvent(Property\EventProperty $event)
 * @method PoliceStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PoliceStationType setFounder(Property\FounderProperty $founder)
 * @method PoliceStationType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method PoliceStationType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method PoliceStationType setFunder(Property\FunderProperty $funder)
 * @method PoliceStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PoliceStationType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method PoliceStationType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method PoliceStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PoliceStationType setImage(Property\ImageProperty $image)
 * @method PoliceStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PoliceStationType setLegalName(Property\LegalNameProperty $legalName)
 * @method PoliceStationType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method PoliceStationType setLocation(Property\LocationProperty $location)
 * @method PoliceStationType setLogo(Property\LogoProperty $logo)
 * @method PoliceStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PoliceStationType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method PoliceStationType setMember(Property\MemberProperty $member)
 * @method PoliceStationType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method PoliceStationType setNaics(Property\NaicsProperty $naics)
 * @method PoliceStationType setName(Property\NameProperty $name)
 * @method PoliceStationType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method PoliceStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PoliceStationType setOwns(Property\OwnsProperty $owns)
 * @method PoliceStationType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method PoliceStationType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PoliceStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PoliceStationType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PoliceStationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method PoliceStationType setReview(Property\ReviewProperty $review)
 * @method PoliceStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method PoliceStationType setSeeks(Property\SeeksProperty $seeks)
 * @method PoliceStationType setSponsor(Property\SponsorProperty $sponsor)
 * @method PoliceStationType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method PoliceStationType setTaxID(Property\TaxIDProperty $taxID)
 * @method PoliceStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method PoliceStationType setUrl(Property\UrlProperty $url)
 * @method PoliceStationType setVatID(Property\VatIDProperty $vatID)
 */
class PoliceStationType extends EmergencyServiceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PoliceStation';
	}
}