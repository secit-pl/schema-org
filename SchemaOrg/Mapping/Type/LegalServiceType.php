<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LegalServiceType.
 * 
 * @method LegalServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LegalServiceType setAddress(Property\AddressProperty $address)
 * @method LegalServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LegalServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LegalServiceType setAlumni(Property\AlumniProperty $alumni)
 * @method LegalServiceType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method LegalServiceType setAward(Property\AwardProperty $award)
 * @method LegalServiceType setBrand(Property\BrandProperty $brand)
 * @method LegalServiceType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method LegalServiceType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method LegalServiceType setDepartment(Property\DepartmentProperty $department)
 * @method LegalServiceType setDescription(Property\DescriptionProperty $description)
 * @method LegalServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LegalServiceType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method LegalServiceType setDuns(Property\DunsProperty $duns)
 * @method LegalServiceType setEmail(Property\EmailProperty $email)
 * @method LegalServiceType setEmployee(Property\EmployeeProperty $employee)
 * @method LegalServiceType setEvent(Property\EventProperty $event)
 * @method LegalServiceType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LegalServiceType setFounder(Property\FounderProperty $founder)
 * @method LegalServiceType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method LegalServiceType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method LegalServiceType setFunder(Property\FunderProperty $funder)
 * @method LegalServiceType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LegalServiceType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method LegalServiceType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method LegalServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LegalServiceType setImage(Property\ImageProperty $image)
 * @method LegalServiceType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LegalServiceType setLegalName(Property\LegalNameProperty $legalName)
 * @method LegalServiceType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method LegalServiceType setLocation(Property\LocationProperty $location)
 * @method LegalServiceType setLogo(Property\LogoProperty $logo)
 * @method LegalServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LegalServiceType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method LegalServiceType setMember(Property\MemberProperty $member)
 * @method LegalServiceType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method LegalServiceType setNaics(Property\NaicsProperty $naics)
 * @method LegalServiceType setName(Property\NameProperty $name)
 * @method LegalServiceType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method LegalServiceType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method LegalServiceType setOwns(Property\OwnsProperty $owns)
 * @method LegalServiceType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method LegalServiceType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method LegalServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LegalServiceType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method LegalServiceType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method LegalServiceType setReview(Property\ReviewProperty $review)
 * @method LegalServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method LegalServiceType setSeeks(Property\SeeksProperty $seeks)
 * @method LegalServiceType setSponsor(Property\SponsorProperty $sponsor)
 * @method LegalServiceType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method LegalServiceType setTaxID(Property\TaxIDProperty $taxID)
 * @method LegalServiceType setTelephone(Property\TelephoneProperty $telephone)
 * @method LegalServiceType setUrl(Property\UrlProperty $url)
 * @method LegalServiceType setVatID(Property\VatIDProperty $vatID)
 */
class LegalServiceType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LegalService';
	}
}