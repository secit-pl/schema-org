<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HVACBusinessType.
 * 
 * @method HVACBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HVACBusinessType setAddress(Property\AddressProperty $address)
 * @method HVACBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HVACBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HVACBusinessType setAlumni(Property\AlumniProperty $alumni)
 * @method HVACBusinessType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HVACBusinessType setAward(Property\AwardProperty $award)
 * @method HVACBusinessType setBrand(Property\BrandProperty $brand)
 * @method HVACBusinessType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HVACBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HVACBusinessType setDepartment(Property\DepartmentProperty $department)
 * @method HVACBusinessType setDescription(Property\DescriptionProperty $description)
 * @method HVACBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HVACBusinessType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HVACBusinessType setDuns(Property\DunsProperty $duns)
 * @method HVACBusinessType setEmail(Property\EmailProperty $email)
 * @method HVACBusinessType setEmployee(Property\EmployeeProperty $employee)
 * @method HVACBusinessType setEvent(Property\EventProperty $event)
 * @method HVACBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HVACBusinessType setFounder(Property\FounderProperty $founder)
 * @method HVACBusinessType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HVACBusinessType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HVACBusinessType setFunder(Property\FunderProperty $funder)
 * @method HVACBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HVACBusinessType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HVACBusinessType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HVACBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HVACBusinessType setImage(Property\ImageProperty $image)
 * @method HVACBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HVACBusinessType setLegalName(Property\LegalNameProperty $legalName)
 * @method HVACBusinessType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HVACBusinessType setLocation(Property\LocationProperty $location)
 * @method HVACBusinessType setLogo(Property\LogoProperty $logo)
 * @method HVACBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HVACBusinessType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HVACBusinessType setMember(Property\MemberProperty $member)
 * @method HVACBusinessType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HVACBusinessType setNaics(Property\NaicsProperty $naics)
 * @method HVACBusinessType setName(Property\NameProperty $name)
 * @method HVACBusinessType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HVACBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HVACBusinessType setOwns(Property\OwnsProperty $owns)
 * @method HVACBusinessType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HVACBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HVACBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HVACBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HVACBusinessType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HVACBusinessType setReview(Property\ReviewProperty $review)
 * @method HVACBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method HVACBusinessType setSeeks(Property\SeeksProperty $seeks)
 * @method HVACBusinessType setSponsor(Property\SponsorProperty $sponsor)
 * @method HVACBusinessType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HVACBusinessType setTaxID(Property\TaxIDProperty $taxID)
 * @method HVACBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method HVACBusinessType setUrl(Property\UrlProperty $url)
 * @method HVACBusinessType setVatID(Property\VatIDProperty $vatID)
 */
class HVACBusinessType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HVACBusiness';
	}
}