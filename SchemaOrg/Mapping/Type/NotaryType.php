<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NotaryType.
 * 
 * @method NotaryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NotaryType setAddress(Property\AddressProperty $address)
 * @method NotaryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method NotaryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NotaryType setAlumni(Property\AlumniProperty $alumni)
 * @method NotaryType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method NotaryType setAward(Property\AwardProperty $award)
 * @method NotaryType setBrand(Property\BrandProperty $brand)
 * @method NotaryType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method NotaryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method NotaryType setDepartment(Property\DepartmentProperty $department)
 * @method NotaryType setDescription(Property\DescriptionProperty $description)
 * @method NotaryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NotaryType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method NotaryType setDuns(Property\DunsProperty $duns)
 * @method NotaryType setEmail(Property\EmailProperty $email)
 * @method NotaryType setEmployee(Property\EmployeeProperty $employee)
 * @method NotaryType setEvent(Property\EventProperty $event)
 * @method NotaryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method NotaryType setFounder(Property\FounderProperty $founder)
 * @method NotaryType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method NotaryType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method NotaryType setFunder(Property\FunderProperty $funder)
 * @method NotaryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method NotaryType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method NotaryType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method NotaryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NotaryType setImage(Property\ImageProperty $image)
 * @method NotaryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method NotaryType setLegalName(Property\LegalNameProperty $legalName)
 * @method NotaryType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method NotaryType setLocation(Property\LocationProperty $location)
 * @method NotaryType setLogo(Property\LogoProperty $logo)
 * @method NotaryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NotaryType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method NotaryType setMember(Property\MemberProperty $member)
 * @method NotaryType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method NotaryType setNaics(Property\NaicsProperty $naics)
 * @method NotaryType setName(Property\NameProperty $name)
 * @method NotaryType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method NotaryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method NotaryType setOwns(Property\OwnsProperty $owns)
 * @method NotaryType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method NotaryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method NotaryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NotaryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method NotaryType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method NotaryType setReview(Property\ReviewProperty $review)
 * @method NotaryType setSameAs(Property\SameAsProperty $sameAs)
 * @method NotaryType setSeeks(Property\SeeksProperty $seeks)
 * @method NotaryType setSponsor(Property\SponsorProperty $sponsor)
 * @method NotaryType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method NotaryType setTaxID(Property\TaxIDProperty $taxID)
 * @method NotaryType setTelephone(Property\TelephoneProperty $telephone)
 * @method NotaryType setUrl(Property\UrlProperty $url)
 * @method NotaryType setVatID(Property\VatIDProperty $vatID)
 */
class NotaryType extends LegalServiceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Notary';
	}
}