<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EmploymentAgencyType.
 * 
 * @method EmploymentAgencyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EmploymentAgencyType setAddress(Property\AddressProperty $address)
 * @method EmploymentAgencyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method EmploymentAgencyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EmploymentAgencyType setAlumni(Property\AlumniProperty $alumni)
 * @method EmploymentAgencyType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method EmploymentAgencyType setAward(Property\AwardProperty $award)
 * @method EmploymentAgencyType setBrand(Property\BrandProperty $brand)
 * @method EmploymentAgencyType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method EmploymentAgencyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method EmploymentAgencyType setDepartment(Property\DepartmentProperty $department)
 * @method EmploymentAgencyType setDescription(Property\DescriptionProperty $description)
 * @method EmploymentAgencyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EmploymentAgencyType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method EmploymentAgencyType setDuns(Property\DunsProperty $duns)
 * @method EmploymentAgencyType setEmail(Property\EmailProperty $email)
 * @method EmploymentAgencyType setEmployee(Property\EmployeeProperty $employee)
 * @method EmploymentAgencyType setEvent(Property\EventProperty $event)
 * @method EmploymentAgencyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method EmploymentAgencyType setFounder(Property\FounderProperty $founder)
 * @method EmploymentAgencyType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method EmploymentAgencyType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method EmploymentAgencyType setFunder(Property\FunderProperty $funder)
 * @method EmploymentAgencyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method EmploymentAgencyType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method EmploymentAgencyType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method EmploymentAgencyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EmploymentAgencyType setImage(Property\ImageProperty $image)
 * @method EmploymentAgencyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method EmploymentAgencyType setLegalName(Property\LegalNameProperty $legalName)
 * @method EmploymentAgencyType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method EmploymentAgencyType setLocation(Property\LocationProperty $location)
 * @method EmploymentAgencyType setLogo(Property\LogoProperty $logo)
 * @method EmploymentAgencyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EmploymentAgencyType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method EmploymentAgencyType setMember(Property\MemberProperty $member)
 * @method EmploymentAgencyType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method EmploymentAgencyType setNaics(Property\NaicsProperty $naics)
 * @method EmploymentAgencyType setName(Property\NameProperty $name)
 * @method EmploymentAgencyType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method EmploymentAgencyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method EmploymentAgencyType setOwns(Property\OwnsProperty $owns)
 * @method EmploymentAgencyType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method EmploymentAgencyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method EmploymentAgencyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EmploymentAgencyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method EmploymentAgencyType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method EmploymentAgencyType setReview(Property\ReviewProperty $review)
 * @method EmploymentAgencyType setSameAs(Property\SameAsProperty $sameAs)
 * @method EmploymentAgencyType setSeeks(Property\SeeksProperty $seeks)
 * @method EmploymentAgencyType setSponsor(Property\SponsorProperty $sponsor)
 * @method EmploymentAgencyType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method EmploymentAgencyType setTaxID(Property\TaxIDProperty $taxID)
 * @method EmploymentAgencyType setTelephone(Property\TelephoneProperty $telephone)
 * @method EmploymentAgencyType setUrl(Property\UrlProperty $url)
 * @method EmploymentAgencyType setVatID(Property\VatIDProperty $vatID)
 */
class EmploymentAgencyType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EmploymentAgency';
	}
}