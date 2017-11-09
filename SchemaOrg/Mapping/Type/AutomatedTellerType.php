<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutomatedTellerType.
 * 
 * @method AutomatedTellerType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutomatedTellerType setAddress(Property\AddressProperty $address)
 * @method AutomatedTellerType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutomatedTellerType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutomatedTellerType setAlumni(Property\AlumniProperty $alumni)
 * @method AutomatedTellerType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AutomatedTellerType setAward(Property\AwardProperty $award)
 * @method AutomatedTellerType setBrand(Property\BrandProperty $brand)
 * @method AutomatedTellerType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AutomatedTellerType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutomatedTellerType setDepartment(Property\DepartmentProperty $department)
 * @method AutomatedTellerType setDescription(Property\DescriptionProperty $description)
 * @method AutomatedTellerType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutomatedTellerType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AutomatedTellerType setDuns(Property\DunsProperty $duns)
 * @method AutomatedTellerType setEmail(Property\EmailProperty $email)
 * @method AutomatedTellerType setEmployee(Property\EmployeeProperty $employee)
 * @method AutomatedTellerType setEvent(Property\EventProperty $event)
 * @method AutomatedTellerType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutomatedTellerType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method AutomatedTellerType setFounder(Property\FounderProperty $founder)
 * @method AutomatedTellerType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AutomatedTellerType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AutomatedTellerType setFunder(Property\FunderProperty $funder)
 * @method AutomatedTellerType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutomatedTellerType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AutomatedTellerType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AutomatedTellerType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutomatedTellerType setImage(Property\ImageProperty $image)
 * @method AutomatedTellerType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutomatedTellerType setLegalName(Property\LegalNameProperty $legalName)
 * @method AutomatedTellerType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AutomatedTellerType setLocation(Property\LocationProperty $location)
 * @method AutomatedTellerType setLogo(Property\LogoProperty $logo)
 * @method AutomatedTellerType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutomatedTellerType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AutomatedTellerType setMember(Property\MemberProperty $member)
 * @method AutomatedTellerType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AutomatedTellerType setNaics(Property\NaicsProperty $naics)
 * @method AutomatedTellerType setName(Property\NameProperty $name)
 * @method AutomatedTellerType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AutomatedTellerType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutomatedTellerType setOwns(Property\OwnsProperty $owns)
 * @method AutomatedTellerType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AutomatedTellerType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutomatedTellerType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutomatedTellerType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutomatedTellerType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AutomatedTellerType setReview(Property\ReviewProperty $review)
 * @method AutomatedTellerType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutomatedTellerType setSeeks(Property\SeeksProperty $seeks)
 * @method AutomatedTellerType setSponsor(Property\SponsorProperty $sponsor)
 * @method AutomatedTellerType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AutomatedTellerType setTaxID(Property\TaxIDProperty $taxID)
 * @method AutomatedTellerType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutomatedTellerType setUrl(Property\UrlProperty $url)
 * @method AutomatedTellerType setVatID(Property\VatIDProperty $vatID)
 */
class AutomatedTellerType extends FinancialServiceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutomatedTeller';
	}
}