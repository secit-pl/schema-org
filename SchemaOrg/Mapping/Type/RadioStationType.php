<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RadioStationType.
 * 
 * @method RadioStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RadioStationType setAddress(Property\AddressProperty $address)
 * @method RadioStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RadioStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RadioStationType setAlumni(Property\AlumniProperty $alumni)
 * @method RadioStationType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method RadioStationType setAward(Property\AwardProperty $award)
 * @method RadioStationType setBrand(Property\BrandProperty $brand)
 * @method RadioStationType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method RadioStationType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method RadioStationType setDepartment(Property\DepartmentProperty $department)
 * @method RadioStationType setDescription(Property\DescriptionProperty $description)
 * @method RadioStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RadioStationType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method RadioStationType setDuns(Property\DunsProperty $duns)
 * @method RadioStationType setEmail(Property\EmailProperty $email)
 * @method RadioStationType setEmployee(Property\EmployeeProperty $employee)
 * @method RadioStationType setEvent(Property\EventProperty $event)
 * @method RadioStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RadioStationType setFounder(Property\FounderProperty $founder)
 * @method RadioStationType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method RadioStationType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method RadioStationType setFunder(Property\FunderProperty $funder)
 * @method RadioStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RadioStationType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method RadioStationType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method RadioStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RadioStationType setImage(Property\ImageProperty $image)
 * @method RadioStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RadioStationType setLegalName(Property\LegalNameProperty $legalName)
 * @method RadioStationType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method RadioStationType setLocation(Property\LocationProperty $location)
 * @method RadioStationType setLogo(Property\LogoProperty $logo)
 * @method RadioStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RadioStationType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method RadioStationType setMember(Property\MemberProperty $member)
 * @method RadioStationType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method RadioStationType setNaics(Property\NaicsProperty $naics)
 * @method RadioStationType setName(Property\NameProperty $name)
 * @method RadioStationType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method RadioStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method RadioStationType setOwns(Property\OwnsProperty $owns)
 * @method RadioStationType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method RadioStationType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method RadioStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RadioStationType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method RadioStationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method RadioStationType setReview(Property\ReviewProperty $review)
 * @method RadioStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method RadioStationType setSeeks(Property\SeeksProperty $seeks)
 * @method RadioStationType setSponsor(Property\SponsorProperty $sponsor)
 * @method RadioStationType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method RadioStationType setTaxID(Property\TaxIDProperty $taxID)
 * @method RadioStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method RadioStationType setUrl(Property\UrlProperty $url)
 * @method RadioStationType setVatID(Property\VatIDProperty $vatID)
 */
class RadioStationType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RadioStation';
	}
}