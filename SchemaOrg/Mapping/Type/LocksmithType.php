<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LocksmithType.
 * 
 * @method LocksmithType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LocksmithType setAddress(Property\AddressProperty $address)
 * @method LocksmithType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LocksmithType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LocksmithType setAlumni(Property\AlumniProperty $alumni)
 * @method LocksmithType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method LocksmithType setAward(Property\AwardProperty $award)
 * @method LocksmithType setBrand(Property\BrandProperty $brand)
 * @method LocksmithType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method LocksmithType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method LocksmithType setDepartment(Property\DepartmentProperty $department)
 * @method LocksmithType setDescription(Property\DescriptionProperty $description)
 * @method LocksmithType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LocksmithType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method LocksmithType setDuns(Property\DunsProperty $duns)
 * @method LocksmithType setEmail(Property\EmailProperty $email)
 * @method LocksmithType setEmployee(Property\EmployeeProperty $employee)
 * @method LocksmithType setEvent(Property\EventProperty $event)
 * @method LocksmithType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LocksmithType setFounder(Property\FounderProperty $founder)
 * @method LocksmithType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method LocksmithType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method LocksmithType setFunder(Property\FunderProperty $funder)
 * @method LocksmithType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LocksmithType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method LocksmithType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method LocksmithType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LocksmithType setImage(Property\ImageProperty $image)
 * @method LocksmithType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LocksmithType setLegalName(Property\LegalNameProperty $legalName)
 * @method LocksmithType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method LocksmithType setLocation(Property\LocationProperty $location)
 * @method LocksmithType setLogo(Property\LogoProperty $logo)
 * @method LocksmithType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LocksmithType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method LocksmithType setMember(Property\MemberProperty $member)
 * @method LocksmithType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method LocksmithType setNaics(Property\NaicsProperty $naics)
 * @method LocksmithType setName(Property\NameProperty $name)
 * @method LocksmithType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method LocksmithType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method LocksmithType setOwns(Property\OwnsProperty $owns)
 * @method LocksmithType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method LocksmithType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method LocksmithType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LocksmithType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method LocksmithType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method LocksmithType setReview(Property\ReviewProperty $review)
 * @method LocksmithType setSameAs(Property\SameAsProperty $sameAs)
 * @method LocksmithType setSeeks(Property\SeeksProperty $seeks)
 * @method LocksmithType setSponsor(Property\SponsorProperty $sponsor)
 * @method LocksmithType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method LocksmithType setTaxID(Property\TaxIDProperty $taxID)
 * @method LocksmithType setTelephone(Property\TelephoneProperty $telephone)
 * @method LocksmithType setUrl(Property\UrlProperty $url)
 * @method LocksmithType setVatID(Property\VatIDProperty $vatID)
 */
class LocksmithType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Locksmith';
	}
}