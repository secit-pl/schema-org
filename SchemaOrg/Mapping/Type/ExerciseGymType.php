<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ExerciseGymType.
 * 
 * @method ExerciseGymType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ExerciseGymType setAddress(Property\AddressProperty $address)
 * @method ExerciseGymType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ExerciseGymType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ExerciseGymType setAlumni(Property\AlumniProperty $alumni)
 * @method ExerciseGymType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ExerciseGymType setAward(Property\AwardProperty $award)
 * @method ExerciseGymType setBrand(Property\BrandProperty $brand)
 * @method ExerciseGymType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ExerciseGymType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ExerciseGymType setDepartment(Property\DepartmentProperty $department)
 * @method ExerciseGymType setDescription(Property\DescriptionProperty $description)
 * @method ExerciseGymType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ExerciseGymType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ExerciseGymType setDuns(Property\DunsProperty $duns)
 * @method ExerciseGymType setEmail(Property\EmailProperty $email)
 * @method ExerciseGymType setEmployee(Property\EmployeeProperty $employee)
 * @method ExerciseGymType setEvent(Property\EventProperty $event)
 * @method ExerciseGymType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ExerciseGymType setFounder(Property\FounderProperty $founder)
 * @method ExerciseGymType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ExerciseGymType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ExerciseGymType setFunder(Property\FunderProperty $funder)
 * @method ExerciseGymType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ExerciseGymType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ExerciseGymType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ExerciseGymType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ExerciseGymType setImage(Property\ImageProperty $image)
 * @method ExerciseGymType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ExerciseGymType setLegalName(Property\LegalNameProperty $legalName)
 * @method ExerciseGymType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ExerciseGymType setLocation(Property\LocationProperty $location)
 * @method ExerciseGymType setLogo(Property\LogoProperty $logo)
 * @method ExerciseGymType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ExerciseGymType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ExerciseGymType setMember(Property\MemberProperty $member)
 * @method ExerciseGymType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ExerciseGymType setNaics(Property\NaicsProperty $naics)
 * @method ExerciseGymType setName(Property\NameProperty $name)
 * @method ExerciseGymType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ExerciseGymType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ExerciseGymType setOwns(Property\OwnsProperty $owns)
 * @method ExerciseGymType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ExerciseGymType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ExerciseGymType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ExerciseGymType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ExerciseGymType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ExerciseGymType setReview(Property\ReviewProperty $review)
 * @method ExerciseGymType setSameAs(Property\SameAsProperty $sameAs)
 * @method ExerciseGymType setSeeks(Property\SeeksProperty $seeks)
 * @method ExerciseGymType setSponsor(Property\SponsorProperty $sponsor)
 * @method ExerciseGymType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ExerciseGymType setTaxID(Property\TaxIDProperty $taxID)
 * @method ExerciseGymType setTelephone(Property\TelephoneProperty $telephone)
 * @method ExerciseGymType setUrl(Property\UrlProperty $url)
 * @method ExerciseGymType setVatID(Property\VatIDProperty $vatID)
 */
class ExerciseGymType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ExerciseGym';
	}
}