<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HairSalonType.
 * 
 * @method HairSalonType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HairSalonType setAddress(Property\AddressProperty $address)
 * @method HairSalonType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HairSalonType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HairSalonType setAlumni(Property\AlumniProperty $alumni)
 * @method HairSalonType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HairSalonType setAward(Property\AwardProperty $award)
 * @method HairSalonType setBrand(Property\BrandProperty $brand)
 * @method HairSalonType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HairSalonType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HairSalonType setDepartment(Property\DepartmentProperty $department)
 * @method HairSalonType setDescription(Property\DescriptionProperty $description)
 * @method HairSalonType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HairSalonType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HairSalonType setDuns(Property\DunsProperty $duns)
 * @method HairSalonType setEmail(Property\EmailProperty $email)
 * @method HairSalonType setEmployee(Property\EmployeeProperty $employee)
 * @method HairSalonType setEvent(Property\EventProperty $event)
 * @method HairSalonType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HairSalonType setFounder(Property\FounderProperty $founder)
 * @method HairSalonType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HairSalonType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HairSalonType setFunder(Property\FunderProperty $funder)
 * @method HairSalonType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HairSalonType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HairSalonType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HairSalonType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HairSalonType setImage(Property\ImageProperty $image)
 * @method HairSalonType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HairSalonType setLegalName(Property\LegalNameProperty $legalName)
 * @method HairSalonType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HairSalonType setLocation(Property\LocationProperty $location)
 * @method HairSalonType setLogo(Property\LogoProperty $logo)
 * @method HairSalonType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HairSalonType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HairSalonType setMember(Property\MemberProperty $member)
 * @method HairSalonType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HairSalonType setNaics(Property\NaicsProperty $naics)
 * @method HairSalonType setName(Property\NameProperty $name)
 * @method HairSalonType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HairSalonType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HairSalonType setOwns(Property\OwnsProperty $owns)
 * @method HairSalonType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HairSalonType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HairSalonType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HairSalonType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HairSalonType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HairSalonType setReview(Property\ReviewProperty $review)
 * @method HairSalonType setSameAs(Property\SameAsProperty $sameAs)
 * @method HairSalonType setSeeks(Property\SeeksProperty $seeks)
 * @method HairSalonType setSponsor(Property\SponsorProperty $sponsor)
 * @method HairSalonType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HairSalonType setTaxID(Property\TaxIDProperty $taxID)
 * @method HairSalonType setTelephone(Property\TelephoneProperty $telephone)
 * @method HairSalonType setUrl(Property\UrlProperty $url)
 * @method HairSalonType setVatID(Property\VatIDProperty $vatID)
 */
class HairSalonType extends HealthAndBeautyBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HairSalon';
	}
}