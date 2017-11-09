<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MovingCompanyType.
 * 
 * @method MovingCompanyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MovingCompanyType setAddress(Property\AddressProperty $address)
 * @method MovingCompanyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MovingCompanyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MovingCompanyType setAlumni(Property\AlumniProperty $alumni)
 * @method MovingCompanyType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method MovingCompanyType setAward(Property\AwardProperty $award)
 * @method MovingCompanyType setBrand(Property\BrandProperty $brand)
 * @method MovingCompanyType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method MovingCompanyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MovingCompanyType setDepartment(Property\DepartmentProperty $department)
 * @method MovingCompanyType setDescription(Property\DescriptionProperty $description)
 * @method MovingCompanyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MovingCompanyType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method MovingCompanyType setDuns(Property\DunsProperty $duns)
 * @method MovingCompanyType setEmail(Property\EmailProperty $email)
 * @method MovingCompanyType setEmployee(Property\EmployeeProperty $employee)
 * @method MovingCompanyType setEvent(Property\EventProperty $event)
 * @method MovingCompanyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MovingCompanyType setFounder(Property\FounderProperty $founder)
 * @method MovingCompanyType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method MovingCompanyType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method MovingCompanyType setFunder(Property\FunderProperty $funder)
 * @method MovingCompanyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MovingCompanyType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method MovingCompanyType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method MovingCompanyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MovingCompanyType setImage(Property\ImageProperty $image)
 * @method MovingCompanyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MovingCompanyType setLegalName(Property\LegalNameProperty $legalName)
 * @method MovingCompanyType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method MovingCompanyType setLocation(Property\LocationProperty $location)
 * @method MovingCompanyType setLogo(Property\LogoProperty $logo)
 * @method MovingCompanyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MovingCompanyType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method MovingCompanyType setMember(Property\MemberProperty $member)
 * @method MovingCompanyType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method MovingCompanyType setNaics(Property\NaicsProperty $naics)
 * @method MovingCompanyType setName(Property\NameProperty $name)
 * @method MovingCompanyType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method MovingCompanyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MovingCompanyType setOwns(Property\OwnsProperty $owns)
 * @method MovingCompanyType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method MovingCompanyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MovingCompanyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MovingCompanyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MovingCompanyType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MovingCompanyType setReview(Property\ReviewProperty $review)
 * @method MovingCompanyType setSameAs(Property\SameAsProperty $sameAs)
 * @method MovingCompanyType setSeeks(Property\SeeksProperty $seeks)
 * @method MovingCompanyType setSponsor(Property\SponsorProperty $sponsor)
 * @method MovingCompanyType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method MovingCompanyType setTaxID(Property\TaxIDProperty $taxID)
 * @method MovingCompanyType setTelephone(Property\TelephoneProperty $telephone)
 * @method MovingCompanyType setUrl(Property\UrlProperty $url)
 * @method MovingCompanyType setVatID(Property\VatIDProperty $vatID)
 */
class MovingCompanyType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MovingCompany';
	}
}