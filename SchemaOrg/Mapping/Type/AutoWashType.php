<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoWashType.
 * 
 * @method AutoWashType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutoWashType setAddress(Property\AddressProperty $address)
 * @method AutoWashType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutoWashType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutoWashType setAlumni(Property\AlumniProperty $alumni)
 * @method AutoWashType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AutoWashType setAward(Property\AwardProperty $award)
 * @method AutoWashType setBrand(Property\BrandProperty $brand)
 * @method AutoWashType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AutoWashType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutoWashType setDepartment(Property\DepartmentProperty $department)
 * @method AutoWashType setDescription(Property\DescriptionProperty $description)
 * @method AutoWashType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutoWashType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AutoWashType setDuns(Property\DunsProperty $duns)
 * @method AutoWashType setEmail(Property\EmailProperty $email)
 * @method AutoWashType setEmployee(Property\EmployeeProperty $employee)
 * @method AutoWashType setEvent(Property\EventProperty $event)
 * @method AutoWashType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutoWashType setFounder(Property\FounderProperty $founder)
 * @method AutoWashType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AutoWashType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AutoWashType setFunder(Property\FunderProperty $funder)
 * @method AutoWashType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutoWashType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AutoWashType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AutoWashType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutoWashType setImage(Property\ImageProperty $image)
 * @method AutoWashType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutoWashType setLegalName(Property\LegalNameProperty $legalName)
 * @method AutoWashType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AutoWashType setLocation(Property\LocationProperty $location)
 * @method AutoWashType setLogo(Property\LogoProperty $logo)
 * @method AutoWashType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutoWashType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AutoWashType setMember(Property\MemberProperty $member)
 * @method AutoWashType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AutoWashType setNaics(Property\NaicsProperty $naics)
 * @method AutoWashType setName(Property\NameProperty $name)
 * @method AutoWashType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AutoWashType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutoWashType setOwns(Property\OwnsProperty $owns)
 * @method AutoWashType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AutoWashType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutoWashType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutoWashType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutoWashType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AutoWashType setReview(Property\ReviewProperty $review)
 * @method AutoWashType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutoWashType setSeeks(Property\SeeksProperty $seeks)
 * @method AutoWashType setSponsor(Property\SponsorProperty $sponsor)
 * @method AutoWashType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AutoWashType setTaxID(Property\TaxIDProperty $taxID)
 * @method AutoWashType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutoWashType setUrl(Property\UrlProperty $url)
 * @method AutoWashType setVatID(Property\VatIDProperty $vatID)
 */
class AutoWashType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoWash';
	}
}