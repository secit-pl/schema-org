<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ProfessionalServiceType.
 * 
 * @method ProfessionalServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ProfessionalServiceType setAddress(Property\AddressProperty $address)
 * @method ProfessionalServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ProfessionalServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ProfessionalServiceType setAlumni(Property\AlumniProperty $alumni)
 * @method ProfessionalServiceType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ProfessionalServiceType setAward(Property\AwardProperty $award)
 * @method ProfessionalServiceType setBrand(Property\BrandProperty $brand)
 * @method ProfessionalServiceType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ProfessionalServiceType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ProfessionalServiceType setDepartment(Property\DepartmentProperty $department)
 * @method ProfessionalServiceType setDescription(Property\DescriptionProperty $description)
 * @method ProfessionalServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ProfessionalServiceType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ProfessionalServiceType setDuns(Property\DunsProperty $duns)
 * @method ProfessionalServiceType setEmail(Property\EmailProperty $email)
 * @method ProfessionalServiceType setEmployee(Property\EmployeeProperty $employee)
 * @method ProfessionalServiceType setEvent(Property\EventProperty $event)
 * @method ProfessionalServiceType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ProfessionalServiceType setFounder(Property\FounderProperty $founder)
 * @method ProfessionalServiceType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ProfessionalServiceType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ProfessionalServiceType setFunder(Property\FunderProperty $funder)
 * @method ProfessionalServiceType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ProfessionalServiceType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ProfessionalServiceType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ProfessionalServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ProfessionalServiceType setImage(Property\ImageProperty $image)
 * @method ProfessionalServiceType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ProfessionalServiceType setLegalName(Property\LegalNameProperty $legalName)
 * @method ProfessionalServiceType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ProfessionalServiceType setLocation(Property\LocationProperty $location)
 * @method ProfessionalServiceType setLogo(Property\LogoProperty $logo)
 * @method ProfessionalServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ProfessionalServiceType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ProfessionalServiceType setMember(Property\MemberProperty $member)
 * @method ProfessionalServiceType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ProfessionalServiceType setNaics(Property\NaicsProperty $naics)
 * @method ProfessionalServiceType setName(Property\NameProperty $name)
 * @method ProfessionalServiceType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ProfessionalServiceType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ProfessionalServiceType setOwns(Property\OwnsProperty $owns)
 * @method ProfessionalServiceType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ProfessionalServiceType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ProfessionalServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ProfessionalServiceType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ProfessionalServiceType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ProfessionalServiceType setReview(Property\ReviewProperty $review)
 * @method ProfessionalServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method ProfessionalServiceType setSeeks(Property\SeeksProperty $seeks)
 * @method ProfessionalServiceType setSponsor(Property\SponsorProperty $sponsor)
 * @method ProfessionalServiceType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ProfessionalServiceType setTaxID(Property\TaxIDProperty $taxID)
 * @method ProfessionalServiceType setTelephone(Property\TelephoneProperty $telephone)
 * @method ProfessionalServiceType setUrl(Property\UrlProperty $url)
 * @method ProfessionalServiceType setVatID(Property\VatIDProperty $vatID)
 */
class ProfessionalServiceType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ProfessionalService';
	}
}