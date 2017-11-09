<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GovernmentOfficeType.
 * 
 * @method GovernmentOfficeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GovernmentOfficeType setAddress(Property\AddressProperty $address)
 * @method GovernmentOfficeType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GovernmentOfficeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GovernmentOfficeType setAlumni(Property\AlumniProperty $alumni)
 * @method GovernmentOfficeType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method GovernmentOfficeType setAward(Property\AwardProperty $award)
 * @method GovernmentOfficeType setBrand(Property\BrandProperty $brand)
 * @method GovernmentOfficeType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method GovernmentOfficeType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method GovernmentOfficeType setDepartment(Property\DepartmentProperty $department)
 * @method GovernmentOfficeType setDescription(Property\DescriptionProperty $description)
 * @method GovernmentOfficeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GovernmentOfficeType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method GovernmentOfficeType setDuns(Property\DunsProperty $duns)
 * @method GovernmentOfficeType setEmail(Property\EmailProperty $email)
 * @method GovernmentOfficeType setEmployee(Property\EmployeeProperty $employee)
 * @method GovernmentOfficeType setEvent(Property\EventProperty $event)
 * @method GovernmentOfficeType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GovernmentOfficeType setFounder(Property\FounderProperty $founder)
 * @method GovernmentOfficeType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method GovernmentOfficeType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method GovernmentOfficeType setFunder(Property\FunderProperty $funder)
 * @method GovernmentOfficeType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GovernmentOfficeType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method GovernmentOfficeType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method GovernmentOfficeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GovernmentOfficeType setImage(Property\ImageProperty $image)
 * @method GovernmentOfficeType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GovernmentOfficeType setLegalName(Property\LegalNameProperty $legalName)
 * @method GovernmentOfficeType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method GovernmentOfficeType setLocation(Property\LocationProperty $location)
 * @method GovernmentOfficeType setLogo(Property\LogoProperty $logo)
 * @method GovernmentOfficeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GovernmentOfficeType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method GovernmentOfficeType setMember(Property\MemberProperty $member)
 * @method GovernmentOfficeType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method GovernmentOfficeType setNaics(Property\NaicsProperty $naics)
 * @method GovernmentOfficeType setName(Property\NameProperty $name)
 * @method GovernmentOfficeType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method GovernmentOfficeType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method GovernmentOfficeType setOwns(Property\OwnsProperty $owns)
 * @method GovernmentOfficeType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method GovernmentOfficeType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method GovernmentOfficeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GovernmentOfficeType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method GovernmentOfficeType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method GovernmentOfficeType setReview(Property\ReviewProperty $review)
 * @method GovernmentOfficeType setSameAs(Property\SameAsProperty $sameAs)
 * @method GovernmentOfficeType setSeeks(Property\SeeksProperty $seeks)
 * @method GovernmentOfficeType setSponsor(Property\SponsorProperty $sponsor)
 * @method GovernmentOfficeType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method GovernmentOfficeType setTaxID(Property\TaxIDProperty $taxID)
 * @method GovernmentOfficeType setTelephone(Property\TelephoneProperty $telephone)
 * @method GovernmentOfficeType setUrl(Property\UrlProperty $url)
 * @method GovernmentOfficeType setVatID(Property\VatIDProperty $vatID)
 */
class GovernmentOfficeType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GovernmentOffice';
	}
}