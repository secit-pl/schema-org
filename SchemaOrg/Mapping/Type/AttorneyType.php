<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AttorneyType.
 * 
 * @method AttorneyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AttorneyType setAddress(Property\AddressProperty $address)
 * @method AttorneyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AttorneyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AttorneyType setAlumni(Property\AlumniProperty $alumni)
 * @method AttorneyType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AttorneyType setAward(Property\AwardProperty $award)
 * @method AttorneyType setBrand(Property\BrandProperty $brand)
 * @method AttorneyType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AttorneyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AttorneyType setDepartment(Property\DepartmentProperty $department)
 * @method AttorneyType setDescription(Property\DescriptionProperty $description)
 * @method AttorneyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AttorneyType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AttorneyType setDuns(Property\DunsProperty $duns)
 * @method AttorneyType setEmail(Property\EmailProperty $email)
 * @method AttorneyType setEmployee(Property\EmployeeProperty $employee)
 * @method AttorneyType setEvent(Property\EventProperty $event)
 * @method AttorneyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AttorneyType setFounder(Property\FounderProperty $founder)
 * @method AttorneyType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AttorneyType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AttorneyType setFunder(Property\FunderProperty $funder)
 * @method AttorneyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AttorneyType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AttorneyType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AttorneyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AttorneyType setImage(Property\ImageProperty $image)
 * @method AttorneyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AttorneyType setLegalName(Property\LegalNameProperty $legalName)
 * @method AttorneyType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AttorneyType setLocation(Property\LocationProperty $location)
 * @method AttorneyType setLogo(Property\LogoProperty $logo)
 * @method AttorneyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AttorneyType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AttorneyType setMember(Property\MemberProperty $member)
 * @method AttorneyType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AttorneyType setNaics(Property\NaicsProperty $naics)
 * @method AttorneyType setName(Property\NameProperty $name)
 * @method AttorneyType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AttorneyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AttorneyType setOwns(Property\OwnsProperty $owns)
 * @method AttorneyType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AttorneyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AttorneyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AttorneyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AttorneyType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AttorneyType setReview(Property\ReviewProperty $review)
 * @method AttorneyType setSameAs(Property\SameAsProperty $sameAs)
 * @method AttorneyType setSeeks(Property\SeeksProperty $seeks)
 * @method AttorneyType setSponsor(Property\SponsorProperty $sponsor)
 * @method AttorneyType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AttorneyType setTaxID(Property\TaxIDProperty $taxID)
 * @method AttorneyType setTelephone(Property\TelephoneProperty $telephone)
 * @method AttorneyType setUrl(Property\UrlProperty $url)
 * @method AttorneyType setVatID(Property\VatIDProperty $vatID)
 */
class AttorneyType extends LegalServiceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Attorney';
	}
}