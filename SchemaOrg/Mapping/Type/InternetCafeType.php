<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InternetCafeType.
 * 
 * @method InternetCafeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InternetCafeType setAddress(Property\AddressProperty $address)
 * @method InternetCafeType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method InternetCafeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InternetCafeType setAlumni(Property\AlumniProperty $alumni)
 * @method InternetCafeType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method InternetCafeType setAward(Property\AwardProperty $award)
 * @method InternetCafeType setBrand(Property\BrandProperty $brand)
 * @method InternetCafeType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method InternetCafeType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method InternetCafeType setDepartment(Property\DepartmentProperty $department)
 * @method InternetCafeType setDescription(Property\DescriptionProperty $description)
 * @method InternetCafeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InternetCafeType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method InternetCafeType setDuns(Property\DunsProperty $duns)
 * @method InternetCafeType setEmail(Property\EmailProperty $email)
 * @method InternetCafeType setEmployee(Property\EmployeeProperty $employee)
 * @method InternetCafeType setEvent(Property\EventProperty $event)
 * @method InternetCafeType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method InternetCafeType setFounder(Property\FounderProperty $founder)
 * @method InternetCafeType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method InternetCafeType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method InternetCafeType setFunder(Property\FunderProperty $funder)
 * @method InternetCafeType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method InternetCafeType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method InternetCafeType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method InternetCafeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InternetCafeType setImage(Property\ImageProperty $image)
 * @method InternetCafeType setIsicV4(Property\IsicV4Property $isicV4)
 * @method InternetCafeType setLegalName(Property\LegalNameProperty $legalName)
 * @method InternetCafeType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method InternetCafeType setLocation(Property\LocationProperty $location)
 * @method InternetCafeType setLogo(Property\LogoProperty $logo)
 * @method InternetCafeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InternetCafeType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method InternetCafeType setMember(Property\MemberProperty $member)
 * @method InternetCafeType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method InternetCafeType setNaics(Property\NaicsProperty $naics)
 * @method InternetCafeType setName(Property\NameProperty $name)
 * @method InternetCafeType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method InternetCafeType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method InternetCafeType setOwns(Property\OwnsProperty $owns)
 * @method InternetCafeType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method InternetCafeType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method InternetCafeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InternetCafeType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method InternetCafeType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method InternetCafeType setReview(Property\ReviewProperty $review)
 * @method InternetCafeType setSameAs(Property\SameAsProperty $sameAs)
 * @method InternetCafeType setSeeks(Property\SeeksProperty $seeks)
 * @method InternetCafeType setSponsor(Property\SponsorProperty $sponsor)
 * @method InternetCafeType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method InternetCafeType setTaxID(Property\TaxIDProperty $taxID)
 * @method InternetCafeType setTelephone(Property\TelephoneProperty $telephone)
 * @method InternetCafeType setUrl(Property\UrlProperty $url)
 * @method InternetCafeType setVatID(Property\VatIDProperty $vatID)
 */
class InternetCafeType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InternetCafe';
	}
}