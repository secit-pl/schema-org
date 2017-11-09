<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HospitalType.
 * 
 * @method HospitalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HospitalType setAddress(Property\AddressProperty $address)
 * @method HospitalType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HospitalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HospitalType setAlumni(Property\AlumniProperty $alumni)
 * @method HospitalType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HospitalType setAward(Property\AwardProperty $award)
 * @method HospitalType setBrand(Property\BrandProperty $brand)
 * @method HospitalType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HospitalType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HospitalType setDepartment(Property\DepartmentProperty $department)
 * @method HospitalType setDescription(Property\DescriptionProperty $description)
 * @method HospitalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HospitalType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HospitalType setDuns(Property\DunsProperty $duns)
 * @method HospitalType setEmail(Property\EmailProperty $email)
 * @method HospitalType setEmployee(Property\EmployeeProperty $employee)
 * @method HospitalType setEvent(Property\EventProperty $event)
 * @method HospitalType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HospitalType setFounder(Property\FounderProperty $founder)
 * @method HospitalType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HospitalType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HospitalType setFunder(Property\FunderProperty $funder)
 * @method HospitalType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HospitalType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HospitalType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HospitalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HospitalType setImage(Property\ImageProperty $image)
 * @method HospitalType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HospitalType setLegalName(Property\LegalNameProperty $legalName)
 * @method HospitalType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HospitalType setLocation(Property\LocationProperty $location)
 * @method HospitalType setLogo(Property\LogoProperty $logo)
 * @method HospitalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HospitalType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HospitalType setMember(Property\MemberProperty $member)
 * @method HospitalType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HospitalType setNaics(Property\NaicsProperty $naics)
 * @method HospitalType setName(Property\NameProperty $name)
 * @method HospitalType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HospitalType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HospitalType setOwns(Property\OwnsProperty $owns)
 * @method HospitalType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HospitalType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HospitalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HospitalType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HospitalType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HospitalType setReview(Property\ReviewProperty $review)
 * @method HospitalType setSameAs(Property\SameAsProperty $sameAs)
 * @method HospitalType setSeeks(Property\SeeksProperty $seeks)
 * @method HospitalType setSponsor(Property\SponsorProperty $sponsor)
 * @method HospitalType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HospitalType setTaxID(Property\TaxIDProperty $taxID)
 * @method HospitalType setTelephone(Property\TelephoneProperty $telephone)
 * @method HospitalType setUrl(Property\UrlProperty $url)
 * @method HospitalType setVatID(Property\VatIDProperty $vatID)
 */
class HospitalType extends EmergencyServiceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Hospital';
	}
}