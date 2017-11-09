<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PetStoreType.
 * 
 * @method PetStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PetStoreType setAddress(Property\AddressProperty $address)
 * @method PetStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PetStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PetStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method PetStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method PetStoreType setAward(Property\AwardProperty $award)
 * @method PetStoreType setBrand(Property\BrandProperty $brand)
 * @method PetStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method PetStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PetStoreType setDepartment(Property\DepartmentProperty $department)
 * @method PetStoreType setDescription(Property\DescriptionProperty $description)
 * @method PetStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PetStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method PetStoreType setDuns(Property\DunsProperty $duns)
 * @method PetStoreType setEmail(Property\EmailProperty $email)
 * @method PetStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method PetStoreType setEvent(Property\EventProperty $event)
 * @method PetStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PetStoreType setFounder(Property\FounderProperty $founder)
 * @method PetStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method PetStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method PetStoreType setFunder(Property\FunderProperty $funder)
 * @method PetStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PetStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method PetStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method PetStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PetStoreType setImage(Property\ImageProperty $image)
 * @method PetStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PetStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method PetStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method PetStoreType setLocation(Property\LocationProperty $location)
 * @method PetStoreType setLogo(Property\LogoProperty $logo)
 * @method PetStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PetStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method PetStoreType setMember(Property\MemberProperty $member)
 * @method PetStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method PetStoreType setNaics(Property\NaicsProperty $naics)
 * @method PetStoreType setName(Property\NameProperty $name)
 * @method PetStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method PetStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PetStoreType setOwns(Property\OwnsProperty $owns)
 * @method PetStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method PetStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PetStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PetStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PetStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method PetStoreType setReview(Property\ReviewProperty $review)
 * @method PetStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method PetStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method PetStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method PetStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method PetStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method PetStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method PetStoreType setUrl(Property\UrlProperty $url)
 * @method PetStoreType setVatID(Property\VatIDProperty $vatID)
 */
class PetStoreType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PetStore';
	}
}