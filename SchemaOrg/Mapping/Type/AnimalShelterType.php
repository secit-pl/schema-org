<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AnimalShelterType.
 * 
 * @method AnimalShelterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AnimalShelterType setAddress(Property\AddressProperty $address)
 * @method AnimalShelterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AnimalShelterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AnimalShelterType setAlumni(Property\AlumniProperty $alumni)
 * @method AnimalShelterType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AnimalShelterType setAward(Property\AwardProperty $award)
 * @method AnimalShelterType setBrand(Property\BrandProperty $brand)
 * @method AnimalShelterType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AnimalShelterType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AnimalShelterType setDepartment(Property\DepartmentProperty $department)
 * @method AnimalShelterType setDescription(Property\DescriptionProperty $description)
 * @method AnimalShelterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AnimalShelterType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AnimalShelterType setDuns(Property\DunsProperty $duns)
 * @method AnimalShelterType setEmail(Property\EmailProperty $email)
 * @method AnimalShelterType setEmployee(Property\EmployeeProperty $employee)
 * @method AnimalShelterType setEvent(Property\EventProperty $event)
 * @method AnimalShelterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AnimalShelterType setFounder(Property\FounderProperty $founder)
 * @method AnimalShelterType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AnimalShelterType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AnimalShelterType setFunder(Property\FunderProperty $funder)
 * @method AnimalShelterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AnimalShelterType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AnimalShelterType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AnimalShelterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AnimalShelterType setImage(Property\ImageProperty $image)
 * @method AnimalShelterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AnimalShelterType setLegalName(Property\LegalNameProperty $legalName)
 * @method AnimalShelterType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AnimalShelterType setLocation(Property\LocationProperty $location)
 * @method AnimalShelterType setLogo(Property\LogoProperty $logo)
 * @method AnimalShelterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AnimalShelterType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AnimalShelterType setMember(Property\MemberProperty $member)
 * @method AnimalShelterType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AnimalShelterType setNaics(Property\NaicsProperty $naics)
 * @method AnimalShelterType setName(Property\NameProperty $name)
 * @method AnimalShelterType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AnimalShelterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AnimalShelterType setOwns(Property\OwnsProperty $owns)
 * @method AnimalShelterType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AnimalShelterType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AnimalShelterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AnimalShelterType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AnimalShelterType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AnimalShelterType setReview(Property\ReviewProperty $review)
 * @method AnimalShelterType setSameAs(Property\SameAsProperty $sameAs)
 * @method AnimalShelterType setSeeks(Property\SeeksProperty $seeks)
 * @method AnimalShelterType setSponsor(Property\SponsorProperty $sponsor)
 * @method AnimalShelterType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AnimalShelterType setTaxID(Property\TaxIDProperty $taxID)
 * @method AnimalShelterType setTelephone(Property\TelephoneProperty $telephone)
 * @method AnimalShelterType setUrl(Property\UrlProperty $url)
 * @method AnimalShelterType setVatID(Property\VatIDProperty $vatID)
 */
class AnimalShelterType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AnimalShelter';
	}
}