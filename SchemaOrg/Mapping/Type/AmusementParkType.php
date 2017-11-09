<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AmusementParkType.
 * 
 * @method AmusementParkType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AmusementParkType setAddress(Property\AddressProperty $address)
 * @method AmusementParkType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AmusementParkType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AmusementParkType setAlumni(Property\AlumniProperty $alumni)
 * @method AmusementParkType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AmusementParkType setAward(Property\AwardProperty $award)
 * @method AmusementParkType setBrand(Property\BrandProperty $brand)
 * @method AmusementParkType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AmusementParkType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AmusementParkType setDepartment(Property\DepartmentProperty $department)
 * @method AmusementParkType setDescription(Property\DescriptionProperty $description)
 * @method AmusementParkType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AmusementParkType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AmusementParkType setDuns(Property\DunsProperty $duns)
 * @method AmusementParkType setEmail(Property\EmailProperty $email)
 * @method AmusementParkType setEmployee(Property\EmployeeProperty $employee)
 * @method AmusementParkType setEvent(Property\EventProperty $event)
 * @method AmusementParkType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AmusementParkType setFounder(Property\FounderProperty $founder)
 * @method AmusementParkType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AmusementParkType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AmusementParkType setFunder(Property\FunderProperty $funder)
 * @method AmusementParkType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AmusementParkType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AmusementParkType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AmusementParkType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AmusementParkType setImage(Property\ImageProperty $image)
 * @method AmusementParkType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AmusementParkType setLegalName(Property\LegalNameProperty $legalName)
 * @method AmusementParkType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AmusementParkType setLocation(Property\LocationProperty $location)
 * @method AmusementParkType setLogo(Property\LogoProperty $logo)
 * @method AmusementParkType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AmusementParkType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AmusementParkType setMember(Property\MemberProperty $member)
 * @method AmusementParkType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AmusementParkType setNaics(Property\NaicsProperty $naics)
 * @method AmusementParkType setName(Property\NameProperty $name)
 * @method AmusementParkType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AmusementParkType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AmusementParkType setOwns(Property\OwnsProperty $owns)
 * @method AmusementParkType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AmusementParkType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AmusementParkType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AmusementParkType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AmusementParkType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AmusementParkType setReview(Property\ReviewProperty $review)
 * @method AmusementParkType setSameAs(Property\SameAsProperty $sameAs)
 * @method AmusementParkType setSeeks(Property\SeeksProperty $seeks)
 * @method AmusementParkType setSponsor(Property\SponsorProperty $sponsor)
 * @method AmusementParkType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AmusementParkType setTaxID(Property\TaxIDProperty $taxID)
 * @method AmusementParkType setTelephone(Property\TelephoneProperty $telephone)
 * @method AmusementParkType setUrl(Property\UrlProperty $url)
 * @method AmusementParkType setVatID(Property\VatIDProperty $vatID)
 */
class AmusementParkType extends EntertainmentBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AmusementPark';
	}
}