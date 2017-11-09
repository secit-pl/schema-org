<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PostOfficeType.
 * 
 * @method PostOfficeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PostOfficeType setAddress(Property\AddressProperty $address)
 * @method PostOfficeType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PostOfficeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PostOfficeType setAlumni(Property\AlumniProperty $alumni)
 * @method PostOfficeType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method PostOfficeType setAward(Property\AwardProperty $award)
 * @method PostOfficeType setBrand(Property\BrandProperty $brand)
 * @method PostOfficeType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method PostOfficeType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PostOfficeType setDepartment(Property\DepartmentProperty $department)
 * @method PostOfficeType setDescription(Property\DescriptionProperty $description)
 * @method PostOfficeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PostOfficeType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method PostOfficeType setDuns(Property\DunsProperty $duns)
 * @method PostOfficeType setEmail(Property\EmailProperty $email)
 * @method PostOfficeType setEmployee(Property\EmployeeProperty $employee)
 * @method PostOfficeType setEvent(Property\EventProperty $event)
 * @method PostOfficeType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PostOfficeType setFounder(Property\FounderProperty $founder)
 * @method PostOfficeType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method PostOfficeType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method PostOfficeType setFunder(Property\FunderProperty $funder)
 * @method PostOfficeType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PostOfficeType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method PostOfficeType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method PostOfficeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PostOfficeType setImage(Property\ImageProperty $image)
 * @method PostOfficeType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PostOfficeType setLegalName(Property\LegalNameProperty $legalName)
 * @method PostOfficeType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method PostOfficeType setLocation(Property\LocationProperty $location)
 * @method PostOfficeType setLogo(Property\LogoProperty $logo)
 * @method PostOfficeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PostOfficeType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method PostOfficeType setMember(Property\MemberProperty $member)
 * @method PostOfficeType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method PostOfficeType setNaics(Property\NaicsProperty $naics)
 * @method PostOfficeType setName(Property\NameProperty $name)
 * @method PostOfficeType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method PostOfficeType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PostOfficeType setOwns(Property\OwnsProperty $owns)
 * @method PostOfficeType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method PostOfficeType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PostOfficeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PostOfficeType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PostOfficeType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method PostOfficeType setReview(Property\ReviewProperty $review)
 * @method PostOfficeType setSameAs(Property\SameAsProperty $sameAs)
 * @method PostOfficeType setSeeks(Property\SeeksProperty $seeks)
 * @method PostOfficeType setSponsor(Property\SponsorProperty $sponsor)
 * @method PostOfficeType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method PostOfficeType setTaxID(Property\TaxIDProperty $taxID)
 * @method PostOfficeType setTelephone(Property\TelephoneProperty $telephone)
 * @method PostOfficeType setUrl(Property\UrlProperty $url)
 * @method PostOfficeType setVatID(Property\VatIDProperty $vatID)
 */
class PostOfficeType extends GovernmentOfficeType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PostOffice';
	}
}