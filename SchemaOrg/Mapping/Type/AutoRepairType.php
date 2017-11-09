<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoRepairType.
 * 
 * @method AutoRepairType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutoRepairType setAddress(Property\AddressProperty $address)
 * @method AutoRepairType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutoRepairType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutoRepairType setAlumni(Property\AlumniProperty $alumni)
 * @method AutoRepairType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AutoRepairType setAward(Property\AwardProperty $award)
 * @method AutoRepairType setBrand(Property\BrandProperty $brand)
 * @method AutoRepairType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AutoRepairType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutoRepairType setDepartment(Property\DepartmentProperty $department)
 * @method AutoRepairType setDescription(Property\DescriptionProperty $description)
 * @method AutoRepairType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutoRepairType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AutoRepairType setDuns(Property\DunsProperty $duns)
 * @method AutoRepairType setEmail(Property\EmailProperty $email)
 * @method AutoRepairType setEmployee(Property\EmployeeProperty $employee)
 * @method AutoRepairType setEvent(Property\EventProperty $event)
 * @method AutoRepairType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutoRepairType setFounder(Property\FounderProperty $founder)
 * @method AutoRepairType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AutoRepairType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AutoRepairType setFunder(Property\FunderProperty $funder)
 * @method AutoRepairType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutoRepairType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AutoRepairType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AutoRepairType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutoRepairType setImage(Property\ImageProperty $image)
 * @method AutoRepairType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutoRepairType setLegalName(Property\LegalNameProperty $legalName)
 * @method AutoRepairType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AutoRepairType setLocation(Property\LocationProperty $location)
 * @method AutoRepairType setLogo(Property\LogoProperty $logo)
 * @method AutoRepairType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutoRepairType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AutoRepairType setMember(Property\MemberProperty $member)
 * @method AutoRepairType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AutoRepairType setNaics(Property\NaicsProperty $naics)
 * @method AutoRepairType setName(Property\NameProperty $name)
 * @method AutoRepairType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AutoRepairType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutoRepairType setOwns(Property\OwnsProperty $owns)
 * @method AutoRepairType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AutoRepairType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutoRepairType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutoRepairType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutoRepairType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AutoRepairType setReview(Property\ReviewProperty $review)
 * @method AutoRepairType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutoRepairType setSeeks(Property\SeeksProperty $seeks)
 * @method AutoRepairType setSponsor(Property\SponsorProperty $sponsor)
 * @method AutoRepairType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AutoRepairType setTaxID(Property\TaxIDProperty $taxID)
 * @method AutoRepairType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutoRepairType setUrl(Property\UrlProperty $url)
 * @method AutoRepairType setVatID(Property\VatIDProperty $vatID)
 */
class AutoRepairType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoRepair';
	}
}