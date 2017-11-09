<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BankOrCreditUnionType.
 * 
 * @method BankOrCreditUnionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BankOrCreditUnionType setAddress(Property\AddressProperty $address)
 * @method BankOrCreditUnionType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BankOrCreditUnionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BankOrCreditUnionType setAlumni(Property\AlumniProperty $alumni)
 * @method BankOrCreditUnionType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method BankOrCreditUnionType setAward(Property\AwardProperty $award)
 * @method BankOrCreditUnionType setBrand(Property\BrandProperty $brand)
 * @method BankOrCreditUnionType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method BankOrCreditUnionType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BankOrCreditUnionType setDepartment(Property\DepartmentProperty $department)
 * @method BankOrCreditUnionType setDescription(Property\DescriptionProperty $description)
 * @method BankOrCreditUnionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BankOrCreditUnionType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method BankOrCreditUnionType setDuns(Property\DunsProperty $duns)
 * @method BankOrCreditUnionType setEmail(Property\EmailProperty $email)
 * @method BankOrCreditUnionType setEmployee(Property\EmployeeProperty $employee)
 * @method BankOrCreditUnionType setEvent(Property\EventProperty $event)
 * @method BankOrCreditUnionType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BankOrCreditUnionType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method BankOrCreditUnionType setFounder(Property\FounderProperty $founder)
 * @method BankOrCreditUnionType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method BankOrCreditUnionType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method BankOrCreditUnionType setFunder(Property\FunderProperty $funder)
 * @method BankOrCreditUnionType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BankOrCreditUnionType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method BankOrCreditUnionType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method BankOrCreditUnionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BankOrCreditUnionType setImage(Property\ImageProperty $image)
 * @method BankOrCreditUnionType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BankOrCreditUnionType setLegalName(Property\LegalNameProperty $legalName)
 * @method BankOrCreditUnionType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method BankOrCreditUnionType setLocation(Property\LocationProperty $location)
 * @method BankOrCreditUnionType setLogo(Property\LogoProperty $logo)
 * @method BankOrCreditUnionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BankOrCreditUnionType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method BankOrCreditUnionType setMember(Property\MemberProperty $member)
 * @method BankOrCreditUnionType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method BankOrCreditUnionType setNaics(Property\NaicsProperty $naics)
 * @method BankOrCreditUnionType setName(Property\NameProperty $name)
 * @method BankOrCreditUnionType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method BankOrCreditUnionType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BankOrCreditUnionType setOwns(Property\OwnsProperty $owns)
 * @method BankOrCreditUnionType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method BankOrCreditUnionType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BankOrCreditUnionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BankOrCreditUnionType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BankOrCreditUnionType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method BankOrCreditUnionType setReview(Property\ReviewProperty $review)
 * @method BankOrCreditUnionType setSameAs(Property\SameAsProperty $sameAs)
 * @method BankOrCreditUnionType setSeeks(Property\SeeksProperty $seeks)
 * @method BankOrCreditUnionType setSponsor(Property\SponsorProperty $sponsor)
 * @method BankOrCreditUnionType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method BankOrCreditUnionType setTaxID(Property\TaxIDProperty $taxID)
 * @method BankOrCreditUnionType setTelephone(Property\TelephoneProperty $telephone)
 * @method BankOrCreditUnionType setUrl(Property\UrlProperty $url)
 * @method BankOrCreditUnionType setVatID(Property\VatIDProperty $vatID)
 */
class BankOrCreditUnionType extends FinancialServiceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BankOrCreditUnion';
	}
}