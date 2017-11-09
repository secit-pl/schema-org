<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ToyStoreType.
 * 
 * @method ToyStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ToyStoreType setAddress(Property\AddressProperty $address)
 * @method ToyStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ToyStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ToyStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method ToyStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ToyStoreType setAward(Property\AwardProperty $award)
 * @method ToyStoreType setBrand(Property\BrandProperty $brand)
 * @method ToyStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ToyStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ToyStoreType setDepartment(Property\DepartmentProperty $department)
 * @method ToyStoreType setDescription(Property\DescriptionProperty $description)
 * @method ToyStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ToyStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ToyStoreType setDuns(Property\DunsProperty $duns)
 * @method ToyStoreType setEmail(Property\EmailProperty $email)
 * @method ToyStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method ToyStoreType setEvent(Property\EventProperty $event)
 * @method ToyStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ToyStoreType setFounder(Property\FounderProperty $founder)
 * @method ToyStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ToyStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ToyStoreType setFunder(Property\FunderProperty $funder)
 * @method ToyStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ToyStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ToyStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ToyStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ToyStoreType setImage(Property\ImageProperty $image)
 * @method ToyStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ToyStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method ToyStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ToyStoreType setLocation(Property\LocationProperty $location)
 * @method ToyStoreType setLogo(Property\LogoProperty $logo)
 * @method ToyStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ToyStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ToyStoreType setMember(Property\MemberProperty $member)
 * @method ToyStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ToyStoreType setNaics(Property\NaicsProperty $naics)
 * @method ToyStoreType setName(Property\NameProperty $name)
 * @method ToyStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ToyStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ToyStoreType setOwns(Property\OwnsProperty $owns)
 * @method ToyStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ToyStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ToyStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ToyStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ToyStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ToyStoreType setReview(Property\ReviewProperty $review)
 * @method ToyStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method ToyStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method ToyStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method ToyStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ToyStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method ToyStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method ToyStoreType setUrl(Property\UrlProperty $url)
 * @method ToyStoreType setVatID(Property\VatIDProperty $vatID)
 */
class ToyStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ToyStore';
	}
}