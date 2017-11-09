<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EmergencyServiceType.
 * 
 * @method EmergencyServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EmergencyServiceType setAddress(Property\AddressProperty $address)
 * @method EmergencyServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method EmergencyServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EmergencyServiceType setAlumni(Property\AlumniProperty $alumni)
 * @method EmergencyServiceType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method EmergencyServiceType setAward(Property\AwardProperty $award)
 * @method EmergencyServiceType setBrand(Property\BrandProperty $brand)
 * @method EmergencyServiceType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method EmergencyServiceType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method EmergencyServiceType setDepartment(Property\DepartmentProperty $department)
 * @method EmergencyServiceType setDescription(Property\DescriptionProperty $description)
 * @method EmergencyServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EmergencyServiceType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method EmergencyServiceType setDuns(Property\DunsProperty $duns)
 * @method EmergencyServiceType setEmail(Property\EmailProperty $email)
 * @method EmergencyServiceType setEmployee(Property\EmployeeProperty $employee)
 * @method EmergencyServiceType setEvent(Property\EventProperty $event)
 * @method EmergencyServiceType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method EmergencyServiceType setFounder(Property\FounderProperty $founder)
 * @method EmergencyServiceType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method EmergencyServiceType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method EmergencyServiceType setFunder(Property\FunderProperty $funder)
 * @method EmergencyServiceType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method EmergencyServiceType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method EmergencyServiceType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method EmergencyServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EmergencyServiceType setImage(Property\ImageProperty $image)
 * @method EmergencyServiceType setIsicV4(Property\IsicV4Property $isicV4)
 * @method EmergencyServiceType setLegalName(Property\LegalNameProperty $legalName)
 * @method EmergencyServiceType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method EmergencyServiceType setLocation(Property\LocationProperty $location)
 * @method EmergencyServiceType setLogo(Property\LogoProperty $logo)
 * @method EmergencyServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EmergencyServiceType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method EmergencyServiceType setMember(Property\MemberProperty $member)
 * @method EmergencyServiceType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method EmergencyServiceType setNaics(Property\NaicsProperty $naics)
 * @method EmergencyServiceType setName(Property\NameProperty $name)
 * @method EmergencyServiceType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method EmergencyServiceType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method EmergencyServiceType setOwns(Property\OwnsProperty $owns)
 * @method EmergencyServiceType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method EmergencyServiceType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method EmergencyServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EmergencyServiceType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method EmergencyServiceType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method EmergencyServiceType setReview(Property\ReviewProperty $review)
 * @method EmergencyServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method EmergencyServiceType setSeeks(Property\SeeksProperty $seeks)
 * @method EmergencyServiceType setSponsor(Property\SponsorProperty $sponsor)
 * @method EmergencyServiceType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method EmergencyServiceType setTaxID(Property\TaxIDProperty $taxID)
 * @method EmergencyServiceType setTelephone(Property\TelephoneProperty $telephone)
 * @method EmergencyServiceType setUrl(Property\UrlProperty $url)
 * @method EmergencyServiceType setVatID(Property\VatIDProperty $vatID)
 */
class EmergencyServiceType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EmergencyService';
	}
}