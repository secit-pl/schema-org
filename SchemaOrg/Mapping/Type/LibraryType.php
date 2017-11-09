<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LibraryType.
 * 
 * @method LibraryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LibraryType setAddress(Property\AddressProperty $address)
 * @method LibraryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LibraryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LibraryType setAlumni(Property\AlumniProperty $alumni)
 * @method LibraryType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method LibraryType setAward(Property\AwardProperty $award)
 * @method LibraryType setBrand(Property\BrandProperty $brand)
 * @method LibraryType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method LibraryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method LibraryType setDepartment(Property\DepartmentProperty $department)
 * @method LibraryType setDescription(Property\DescriptionProperty $description)
 * @method LibraryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LibraryType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method LibraryType setDuns(Property\DunsProperty $duns)
 * @method LibraryType setEmail(Property\EmailProperty $email)
 * @method LibraryType setEmployee(Property\EmployeeProperty $employee)
 * @method LibraryType setEvent(Property\EventProperty $event)
 * @method LibraryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LibraryType setFounder(Property\FounderProperty $founder)
 * @method LibraryType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method LibraryType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method LibraryType setFunder(Property\FunderProperty $funder)
 * @method LibraryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LibraryType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method LibraryType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method LibraryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LibraryType setImage(Property\ImageProperty $image)
 * @method LibraryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LibraryType setLegalName(Property\LegalNameProperty $legalName)
 * @method LibraryType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method LibraryType setLocation(Property\LocationProperty $location)
 * @method LibraryType setLogo(Property\LogoProperty $logo)
 * @method LibraryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LibraryType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method LibraryType setMember(Property\MemberProperty $member)
 * @method LibraryType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method LibraryType setNaics(Property\NaicsProperty $naics)
 * @method LibraryType setName(Property\NameProperty $name)
 * @method LibraryType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method LibraryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method LibraryType setOwns(Property\OwnsProperty $owns)
 * @method LibraryType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method LibraryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method LibraryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LibraryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method LibraryType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method LibraryType setReview(Property\ReviewProperty $review)
 * @method LibraryType setSameAs(Property\SameAsProperty $sameAs)
 * @method LibraryType setSeeks(Property\SeeksProperty $seeks)
 * @method LibraryType setSponsor(Property\SponsorProperty $sponsor)
 * @method LibraryType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method LibraryType setTaxID(Property\TaxIDProperty $taxID)
 * @method LibraryType setTelephone(Property\TelephoneProperty $telephone)
 * @method LibraryType setUrl(Property\UrlProperty $url)
 * @method LibraryType setVatID(Property\VatIDProperty $vatID)
 */
class LibraryType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Library';
	}
}