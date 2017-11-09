<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MovieRentalStoreType.
 * 
 * @method MovieRentalStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MovieRentalStoreType setAddress(Property\AddressProperty $address)
 * @method MovieRentalStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MovieRentalStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MovieRentalStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method MovieRentalStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method MovieRentalStoreType setAward(Property\AwardProperty $award)
 * @method MovieRentalStoreType setBrand(Property\BrandProperty $brand)
 * @method MovieRentalStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method MovieRentalStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MovieRentalStoreType setDepartment(Property\DepartmentProperty $department)
 * @method MovieRentalStoreType setDescription(Property\DescriptionProperty $description)
 * @method MovieRentalStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MovieRentalStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method MovieRentalStoreType setDuns(Property\DunsProperty $duns)
 * @method MovieRentalStoreType setEmail(Property\EmailProperty $email)
 * @method MovieRentalStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method MovieRentalStoreType setEvent(Property\EventProperty $event)
 * @method MovieRentalStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MovieRentalStoreType setFounder(Property\FounderProperty $founder)
 * @method MovieRentalStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method MovieRentalStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method MovieRentalStoreType setFunder(Property\FunderProperty $funder)
 * @method MovieRentalStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MovieRentalStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method MovieRentalStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method MovieRentalStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MovieRentalStoreType setImage(Property\ImageProperty $image)
 * @method MovieRentalStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MovieRentalStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method MovieRentalStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method MovieRentalStoreType setLocation(Property\LocationProperty $location)
 * @method MovieRentalStoreType setLogo(Property\LogoProperty $logo)
 * @method MovieRentalStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MovieRentalStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method MovieRentalStoreType setMember(Property\MemberProperty $member)
 * @method MovieRentalStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method MovieRentalStoreType setNaics(Property\NaicsProperty $naics)
 * @method MovieRentalStoreType setName(Property\NameProperty $name)
 * @method MovieRentalStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method MovieRentalStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MovieRentalStoreType setOwns(Property\OwnsProperty $owns)
 * @method MovieRentalStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method MovieRentalStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MovieRentalStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MovieRentalStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MovieRentalStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MovieRentalStoreType setReview(Property\ReviewProperty $review)
 * @method MovieRentalStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method MovieRentalStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method MovieRentalStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method MovieRentalStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method MovieRentalStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method MovieRentalStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method MovieRentalStoreType setUrl(Property\UrlProperty $url)
 * @method MovieRentalStoreType setVatID(Property\VatIDProperty $vatID)
 */
class MovieRentalStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MovieRentalStore';
	}
}