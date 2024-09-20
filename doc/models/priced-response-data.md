
# Priced Response Data

## Structure

`PricedResponseData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Name of the account<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `36` | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountId` | `?int` | Optional | Account Id (i.e. Customer Id of the Sub Account in GFN) of the selected account. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | AccountNumber of the selected account. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountShortName` | `?string` | Optional | Nick name of the account<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `25` | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `additional1` | `?string` | Optional | Addtional SerialId or endpoint Id<br>**Constraints**: *Minimum Length*: `14`, *Maximum Length*: `20` | getAdditional1(): ?string | setAdditional1(?string additional1): void |
| `additional2` | `?string` | Optional | Addtional SerialId or endpoint Id<br>**Constraints**: *Minimum Length*: `14`, *Maximum Length*: `20` | getAdditional2(): ?string | setAdditional2(?string additional2): void |
| `additional3` | `?string` | Optional | Addtional SerialId or endpoint Id<br>**Constraints**: *Minimum Length*: `14`, *Maximum Length*: `20` | getAdditional3(): ?string | setAdditional3(?string additional3): void |
| `additional4` | `?string` | Optional | Addtional SerialId or endpoint Id<br>**Constraints**: *Minimum Length*: `14`, *Maximum Length*: `20` | getAdditional4(): ?string | setAdditional4(?string additional4): void |
| `allowClearing` | `?string` | Optional | Allow clearings<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `25` | getAllowClearing(): ?string | setAllowClearing(?string allowClearing): void |
| `authorisationCode` | `?int` | Optional | Autorization code<br>**Constraints**: `>= 1`, `<= 999999` | getAuthorisationCode(): ?int | setAuthorisationCode(?int authorisationCode): void |
| `transactionStatus` | `?string` | Optional | Status of the transaction<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1` | getTransactionStatus(): ?string | setTransactionStatus(?string transactionStatus): void |
| `driverName` | `?string` | Optional | Driver Name of Card record<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `25` | getDriverName(): ?string | setDriverName(?string driverName): void |
| `cardExpiryPeriod` | `?int` | Optional | Expiry period of the card<br>**Constraints**: `>= 1`, `<= 9999` | getCardExpiryPeriod(): ?int | setCardExpiryPeriod(?int cardExpiryPeriod): void |
| `cardExpiry` | `?string` | Optional | Card Expiry Date | getCardExpiry(): ?string | setCardExpiry(?string cardExpiry): void |
| `cardGroupId` | `?int` | Optional | Card Group Code<br>**Constraints**: `>= 1`, `<= 99999` | getCardGroupId(): ?int | setCardGroupId(?int cardGroupId): void |
| `cardGroupName` | `?string` | Optional | Group nmae of the card | getCardGroupName(): ?string | setCardGroupName(?string cardGroupName): void |
| `issuerCode` | `?int` | Optional | Issuer code<br>**Constraints**: `>= 1`, `<= 9999` | getIssuerCode(): ?int | setIssuerCode(?int issuerCode): void |
| `cardPAN` | `?string` | Optional | Full Card PAN<br>**Constraints**: *Minimum Length*: `19`, *Maximum Length*: `19` | getCardPAN(): ?string | setCardPAN(?string cardPAN): void |
| `releaseCode` | `?int` | Optional | Release code<br>**Constraints**: `>= 1`, `<= 10` | getReleaseCode(): ?int | setReleaseCode(?int releaseCode): void |
| `cardSequenceNumber` | `?int` | Optional | Sequesnce number of the card<br>**Constraints**: `>= 1`, `<= 999` | getCardSequenceNumber(): ?int | setCardSequenceNumber(?int cardSequenceNumber): void |
| `cardType` | `?string` | Optional | Type of card<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `50` | getCardType(): ?string | setCardType(?string cardType): void |
| `colCoCode` | `?string` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getColCoCode(): ?string | setColCoCode(?string colCoCode): void |
| `unitDiscountInvoiceCurrency` | `?float` | Optional | Unit discount Invoice currency | getUnitDiscountInvoiceCurrency(): ?float | setUnitDiscountInvoiceCurrency(?float unitDiscountInvoiceCurrency): void |
| `colCoExchangeRate` | `?float` | Optional | Colco exchange rate | getColCoExchangeRate(): ?float | setColCoExchangeRate(?float colCoExchangeRate): void |
| `invoiceCurrencySymbol` | `?string` | Optional | Currency symbol on which the invoice was raised<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getInvoiceCurrencySymbol(): ?string | setInvoiceCurrencySymbol(?string invoiceCurrencySymbol): void |
| `correctionFlag` | `?bool` | Optional | Is there any correction | getCorrectionFlag(): ?bool | setCorrectionFlag(?bool correctionFlag): void |
| `cRMNumber` | `?float` | Optional | CRM number<br>**Constraints**: `>= 10`, `<= 10` | getCRMNumber(): ?float | setCRMNumber(?float cRMNumber): void |
| `customerCountry` | `?string` | Optional | Customer country<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `30` | getCustomerCountry(): ?string | setCustomerCountry(?string customerCountry): void |
| `customerCurrencyCode` | `?string` | Optional | Curreny which customer uses to transact.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getCustomerCurrencyCode(): ?string | setCustomerCurrencyCode(?string customerCurrencyCode): void |
| `customerCurrencySymbol` | `?string` | Optional | Custome currency symbol<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1` | getCustomerCurrencySymbol(): ?string | setCustomerCurrencySymbol(?string customerCurrencySymbol): void |
| `rebateonNetAmountInCustomerCurrency` | `?float` | Optional | Rebate on net amount in customer currency | getRebateonNetAmountInCustomerCurrency(): ?float | setRebateonNetAmountInCustomerCurrency(?float rebateonNetAmountInCustomerCurrency): void |
| `effectiveDiscountInCustomerCurrency` | `?float` | Optional | Effective discount in customers currency | getEffectiveDiscountInCustomerCurrency(): ?float | setEffectiveDiscountInCustomerCurrency(?float effectiveDiscountInCustomerCurrency): void |
| `effectiveUnitDiscountInCustomerCurrency` | `?float` | Optional | effectiive unit discount in customers currency | getEffectiveUnitDiscountInCustomerCurrency(): ?float | setEffectiveUnitDiscountInCustomerCurrency(?float effectiveUnitDiscountInCustomerCurrency): void |
| `unitPriceInInvoiceCurrency` | `?float` | Optional | Unitpricing in invoice currency | getUnitPriceInInvoiceCurrency(): ?float | setUnitPriceInInvoiceCurrency(?float unitPriceInInvoiceCurrency): void |
| `invoiceTax` | `?float` | Optional | Invoice tax | getInvoiceTax(): ?float | setInvoiceTax(?float invoiceTax): void |
| `invoiceGrossAmount` | `?float` | Optional | Invoice amount befor tax | getInvoiceGrossAmount(): ?float | setInvoiceGrossAmount(?float invoiceGrossAmount): void |
| `invoiceNetAmount` | `?float` | Optional | Invoice amount after tax | getInvoiceNetAmount(): ?float | setInvoiceNetAmount(?float invoiceNetAmount): void |
| `vATonNetAmountInCustomerCurrency` | `?float` | Optional | Vat on net amount in customer currency | getVATonNetAmountInCustomerCurrency(): ?float | setVATonNetAmountInCustomerCurrency(?float vATonNetAmountInCustomerCurrency): void |
| `customerRetailPriceUnitGross` | `?float` | Optional | Customer retail unit price before tax | getCustomerRetailPriceUnitGross(): ?float | setCustomerRetailPriceUnitGross(?float customerRetailPriceUnitGross): void |
| `customerRetailValueTotalGross` | `?float` | Optional | Total Customer retail value before tax | getCustomerRetailValueTotalGross(): ?float | setCustomerRetailValueTotalGross(?float customerRetailValueTotalGross): void |
| `customerRetailValueTotalNet` | `?float` | Optional | Total customer retail value after tax | getCustomerRetailValueTotalNet(): ?float | setCustomerRetailValueTotalNet(?float customerRetailValueTotalNet): void |
| `transactionTypeDescription` | `?float` | Optional | Trasaction type description | getTransactionTypeDescription(): ?float | setTransactionTypeDescription(?float transactionTypeDescription): void |
| `rebateonNetAmountInTransactionCurrency` | `?float` | Optional | Rebate give to net amountin transaction currency that is used | getRebateonNetAmountInTransactionCurrency(): ?float | setRebateonNetAmountInTransactionCurrency(?float rebateonNetAmountInTransactionCurrency): void |
| `effectiveDiscountInTrxCurrency` | `?float` | Optional | Currency used to giveEffective discount on transactions | getEffectiveDiscountInTrxCurrency(): ?float | setEffectiveDiscountInTrxCurrency(?float effectiveDiscountInTrxCurrency): void |
| `delCoToColCoExchangeRate` | `?int` | Optional | Exchange rate between Delco and Colco | getDelCoToColCoExchangeRate(): ?int | setDelCoToColCoExchangeRate(?int delCoToColCoExchangeRate): void |
| `cards` | `?(int[])` | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `500` | getCards(): ?array | setCards(?array cards): void |
| `unitDiscountTransactionCurrency` | `?float` | Optional | Currency used forto provide unit Transaction discount | getUnitDiscountTransactionCurrency(): ?float | setUnitDiscountTransactionCurrency(?float unitDiscountTransactionCurrency): void |
| `transactionGrossAmount` | `?float` | Optional | Transactional amount before tax | getTransactionGrossAmount(): ?float | setTransactionGrossAmount(?float transactionGrossAmount): void |
| `transactionNetAmount` | `?float` | Optional | Transaction net amount after tax | getTransactionNetAmount(): ?float | setTransactionNetAmount(?float transactionNetAmount): void |
| `transactionTax` | `?float` | Optional | Transaction tax | getTransactionTax(): ?float | setTransactionTax(?float transactionTax): void |
| `vATonNetAmount` | `?float` | Optional | Transactinal tax rates | getVATonNetAmount(): ?float | setVATonNetAmount(?float vATonNetAmount): void |
| `delcoListPriceUnitNet` | `?float` | Optional | Priv | getDelcoListPriceUnitNet(): ?float | setDelcoListPriceUnitNet(?float delcoListPriceUnitNet): void |
| `delcoRetailPriceUnitGross` | `?float` | Optional | Delco retail price per unit before tax | getDelcoRetailPriceUnitGross(): ?float | setDelcoRetailPriceUnitGross(?float delcoRetailPriceUnitGross): void |
| `unitPriceInTransactionCurrency` | `?float` | Optional | Delco retail price per unit after tax | getUnitPriceInTransactionCurrency(): ?float | setUnitPriceInTransactionCurrency(?float unitPriceInTransactionCurrency): void |
| `delcoRetailPriceUnitNet` | `?float` | Optional | Delco retail price per unit | getDelcoRetailPriceUnitNet(): ?float | setDelcoRetailPriceUnitNet(?float delcoRetailPriceUnitNet): void |
| `delcoRetailValueTotalGross` | `?float` | Optional | Delco retail price before tax | getDelcoRetailValueTotalGross(): ?float | setDelcoRetailValueTotalGross(?float delcoRetailValueTotalGross): void |
| `delcoRetailValueTotalNet` | `?float` | Optional | Delco per unit price after tax | getDelcoRetailValueTotalNet(): ?float | setDelcoRetailValueTotalNet(?float delcoRetailValueTotalNet): void |
| `transactionCurrencySymbol` | `?string` | Optional | Currency used for transaction. | getTransactionCurrencySymbol(): ?string | setTransactionCurrencySymbol(?string transactionCurrencySymbol): void |
| `discountType` | `?string` | Optional | Type of discount available | getDiscountType(): ?string | setDiscountType(?string discountType): void |
| `disputeStatus` | `?bool` | Optional | Is there any dispute status?True or False<br>**Default**: `false` | getDisputeStatus(): ?bool | setDisputeStatus(?bool disputeStatus): void |
| `isShellSite` | `?bool` | Optional | Is it a shell sites?True or False<br>**Default**: `false` | getIsShellSite(): ?bool | setIsShellSite(?bool isShellSite): void |
| `fleetIdInput` | `?string` | Optional | Fleet identifier | getFleetIdInput(): ?string | setFleetIdInput(?string fleetIdInput): void |
| `incomingProductCode` | `?int` | Optional | In coming product code | getIncomingProductCode(): ?int | setIncomingProductCode(?int incomingProductCode): void |
| `postingDate` | `?string` | Optional | Date of Posting | getPostingDate(): ?string | setPostingDate(?string postingDate): void |
| `postingTime` | `?string` | Optional | Time whern posting happened | getPostingTime(): ?string | setPostingTime(?string postingTime): void |
| `productCode` | `?int` | Optional | Product Code - 21 Unleaded - High octane,22 Unleaded - Medium octane,23 Unleaded - Low octane,24 Unleaded Environmental | getProductCode(): ?int | setProductCode(?int productCode): void |
| `productName` | `?string` | Optional | Name of the product<br>**Constraints**: *Minimum Length*: `8`, *Maximum Length*: `30` | getProductName(): ?string | setProductName(?string productName): void |
| `productGroupId` | `?int` | Optional | Id of the product to which group it belongs | getProductGroupId(): ?int | setProductGroupId(?int productGroupId): void |
| `incomingCurrencyCode` | `?string` | Optional | In coming currecncy code<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getIncomingCurrencyCode(): ?string | setIncomingCurrencyCode(?string incomingCurrencyCode): void |
| `incomingSiteDescription` | `?string` | Optional | In coming Site description | getIncomingSiteDescription(): ?string | setIncomingSiteDescription(?string incomingSiteDescription): void |
| `location` | `?string` | Optional | Location of the Shell site<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getLocation(): ?string | setLocation(?string location): void |
| `siteName` | `?string` | Optional | Shell site name<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getSiteName(): ?string | setSiteName(?string siteName): void |
| `siteCode` | `?int` | Optional | Shell site code | getSiteCode(): ?int | setSiteCode(?int siteCode): void |
| `incomingSiteNumber` | `?int` | Optional | In coming site number | getIncomingSiteNumber(): ?int | setIncomingSiteNumber(?int incomingSiteNumber): void |
| `invoiceCurrencyCode` | `?string` | Optional | Currency code on which the invoice is raised<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getInvoiceCurrencyCode(): ?string | setInvoiceCurrencyCode(?string invoiceCurrencyCode): void |
| `invoiceDate` | `?string` | Optional | Date on which the invoice was raised | getInvoiceDate(): ?string | setInvoiceDate(?string invoiceDate): void |
| `invoiceNumber` | `?float` | Optional | Invoice number | getInvoiceNumber(): ?float | setInvoiceNumber(?float invoiceNumber): void |
| `fuelProduct` | `?bool` | Optional | Is it a fuel product? True or False | getFuelProduct(): ?bool | setFuelProduct(?bool fuelProduct): void |
| `vATApplicable` | `?string` | Optional | Is VAT applicable?Y or N<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1` | getVATApplicable(): ?string | setVATApplicable(?string vATApplicable): void |
| `payerName` | `?string` | Optional | Name of the payer<br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `50` | getPayerName(): ?string | setPayerName(?string payerName): void |
| `payerNumber` | `?string` | Optional | Payer account number<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `15` | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `parentCustomerNumber` | `?string` | Optional | Parent account number of the payer<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `15` | getParentCustomerNumber(): ?string | setParentCustomerNumber(?string parentCustomerNumber): void |
| `payerGroup` | `?string` | Optional | The group which the payer belongs to | getPayerGroup(): ?string | setPayerGroup(?string payerGroup): void |
| `payerGroupName` | `?string` | Optional | Name of the group to which the payer belongs to.<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getPayerGroupName(): ?string | setPayerGroupName(?string payerGroupName): void |
| `checkDigit` | `?int` | Optional | Check digit | getCheckDigit(): ?int | setCheckDigit(?int checkDigit): void |
| `netInvoiceIndicator` | `?string` | Optional | After tax net invoice number | getNetInvoiceIndicator(): ?string | setNetInvoiceIndicator(?string netInvoiceIndicator): void |
| `delcoCode` | `?int` | Optional | Delco code | getDelcoCode(): ?int | setDelcoCode(?int delcoCode): void |
| `networkCode` | `?int` | Optional | Network  code of the payer<br>**Constraints**: `>= 3`, `<= 3` | getNetworkCode(): ?int | setNetworkCode(?int networkCode): void |
| `purchasedInCountry` | `?string` | Optional | Country of purchase<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getPurchasedInCountry(): ?string | setPurchasedInCountry(?string purchasedInCountry): void |
| `siteCountry` | `?string` | Optional | Country where the site exists<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getSiteCountry(): ?string | setSiteCountry(?string siteCountry): void |
| `vATCountry` | `?string` | Optional | Country where VAT is applicable<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getVATCountry(): ?string | setVATCountry(?string vATCountry): void |
| `delcoName` | `?string` | Optional | Name of the delivery company<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getDelcoName(): ?string | setDelcoName(?string delcoName): void |
| `network` | `?string` | Optional | Network of the Delivery company<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `25` | getNetwork(): ?string | setNetwork(?string network): void |
| `odometerInput` | `?int` | Optional | Odometet input | getOdometerInput(): ?int | setOdometerInput(?int odometerInput): void |
| `originalSalesItemId` | `?string` | Optional | Original item identifier for sales<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `25` | getOriginalSalesItemId(): ?string | setOriginalSalesItemId(?string originalSalesItemId): void |
| `fleetIDDescription` | `?string` | Optional | Fleet identifier description | getFleetIDDescription(): ?string | setFleetIDDescription(?string fleetIDDescription): void |
| `parentCustomerId` | `?int` | Optional | Identifier of parent customer | getParentCustomerId(): ?int | setParentCustomerId(?int parentCustomerId): void |
| `pINIndicator` | `?string` | Optional | PIN indicator | getPINIndicator(): ?string | setPINIndicator(?string pINIndicator): void |
| `productGroupName` | `?string` | Optional | Name og the group the product belongs to | getProductGroupName(): ?string | setProductGroupName(?string productGroupName): void |
| `purchasedInCountryCode` | `?string` | Optional | The countroy code where the purchase was made | getPurchasedInCountryCode(): ?string | setPurchasedInCountryCode(?string purchasedInCountryCode): void |
| `quantity` | `?float` | Optional | Quantity of the product | getQuantity(): ?float | setQuantity(?float quantity): void |
| `rebateRate` | `?float` | Optional | Rebate rate if any | getRebateRate(): ?float | setRebateRate(?float rebateRate): void |
| `receiptNumber` | `?int` | Optional | Reciept number | getReceiptNumber(): ?int | setReceiptNumber(?int receiptNumber): void |
| `refundFlag` | [`?string(PricedTransactionRespV2RefundFlagEnum)`](../../doc/models/priced-transaction-resp-v2-refund-flag-enum.md) | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1` | getRefundFlag(): ?string | setRefundFlag(?string refundFlag): void |
| `siteGroupId` | `?int` | Optional | Group identifier for the site | getSiteGroupId(): ?int | setSiteGroupId(?int siteGroupId): void |
| `siteGroupName` | `?string` | Optional | Name of the Site group | getSiteGroupName(): ?string | setSiteGroupName(?string siteGroupName): void |
| `latitude` | `?float` | Optional | Latitude of the site | getLatitude(): ?float | setLatitude(?float latitude): void |
| `longitude` | `?float` | Optional | Longitude of the site | getLongitude(): ?float | setLongitude(?float longitude): void |
| `delCoExchangeRate` | `?float` | Optional | Delivery company exchange rate | getDelCoExchangeRate(): ?float | setDelCoExchangeRate(?float delCoExchangeRate): void |
| `euroRebateAmount` | `?float` | Optional | Rebate amount in Euros | getEuroRebateAmount(): ?float | setEuroRebateAmount(?float euroRebateAmount): void |
| `netEuroAmount` | `?float` | Optional | Net amount in Euros | getNetEuroAmount(): ?float | setNetEuroAmount(?float netEuroAmount): void |
| `euroVATAmount` | `?float` | Optional | Vat amount in Euros | getEuroVATAmount(): ?float | setEuroVATAmount(?float euroVATAmount): void |
| `parentCustomerName` | `?string` | Optional | Customers parent name<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getParentCustomerName(): ?string | setParentCustomerName(?string parentCustomerName): void |
| `isInvoiced` | `?bool` | Optional | Is invoice raised<br>**Default**: `false` | getIsInvoiced(): ?bool | setIsInvoiced(?bool isInvoiced): void |
| `transactionCurrencyCode` | `?string` | Optional | Transaction currency code | getTransactionCurrencyCode(): ?string | setTransactionCurrencyCode(?string transactionCurrencyCode): void |
| `creditDebitCode` | `?string` | Optional | Is it Credit or debit C for credit D for Debit | getCreditDebitCode(): ?string | setCreditDebitCode(?string creditDebitCode): void |
| `transactionDate` | `?string` | Optional | Date of transaction | getTransactionDate(): ?string | setTransactionDate(?string transactionDate): void |
| `transactionTime` | `?string` | Optional | Time of transaction | getTransactionTime(): ?string | setTransactionTime(?string transactionTime): void |
| `transactionItemId` | `?string` | Optional | Identifier of the Iem in transaction | getTransactionItemId(): ?string | setTransactionItemId(?string transactionItemId): void |
| `trnIdentifier` | `?string` | Optional | Transaction identifier | getTrnIdentifier(): ?string | setTrnIdentifier(?string trnIdentifier): void |
| `type` | `?string` | Optional | Transaction type for Delco | getType(): ?string | setType(?string type): void |
| `transactionLine` | `?int` | Optional | - | getTransactionLine(): ?int | setTransactionLine(?int transactionLine): void |
| `transactionType` | `?string` | Optional | Transaction type Colco | getTransactionType(): ?string | setTransactionType(?string transactionType): void |
| `uTCOffset` | `?string` | Optional | Leaving country | getUTCOffset(): ?string | setUTCOffset(?string uTCOffset): void |
| `vATCategory` | `?string` | Optional | To which category and counry does the  VAT come under | getVATCategory(): ?string | setVATCategory(?string vATCategory): void |
| `vATRate` | `?float` | Optional | VAT rate | getVATRate(): ?float | setVATRate(?float vATRate): void |
| `vehicleRegistration` | `?string` | Optional | Vehicle registration number | getVehicleRegistration(): ?string | setVehicleRegistration(?string vehicleRegistration): void |
| `isCancelled` | `?string` | Optional | Check if the pruchase is cancelled<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1` | getIsCancelled(): ?string | setIsCancelled(?string isCancelled): void |
| `colCoGrossAmount` | `?float` | Optional | Gross amount from Colco | getColCoGrossAmount(): ?float | setColCoGrossAmount(?float colCoGrossAmount): void |
| `colCoNetAmount` | `?float` | Optional | Net amount from Colco | getColCoNetAmount(): ?float | setColCoNetAmount(?float colCoNetAmount): void |
| `colCoVATAmount` | `?float` | Optional | Colco VAT amount | getColCoVATAmount(): ?float | setColCoVATAmount(?float colCoVATAmount): void |
| `originalCurrencySymbol` | `?string` | Optional | Original currency code<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1` | getOriginalCurrencySymbol(): ?string | setOriginalCurrencySymbol(?string originalCurrencySymbol): void |
| `originalCurrencyCode` | `?string` | Optional | Original currency code<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1` | getOriginalCurrencyCode(): ?string | setOriginalCurrencyCode(?string originalCurrencyCode): void |
| `originalVATAmount` | `?float` | Optional | Original VAT amount | getOriginalVATAmount(): ?float | setOriginalVATAmount(?float originalVATAmount): void |
| `embossText` | `?string` | Optional | Comapany name embosses in text<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getEmbossText(): ?string | setEmbossText(?string embossText): void |
| `originalExchangeRate` | `?float` | Optional | Orginal exchange rate | getOriginalExchangeRate(): ?float | setOriginalExchangeRate(?float originalExchangeRate): void |
| `originalTransactionItemInvoiceDate` | `?string` | Optional | Original treansaction date | getOriginalTransactionItemInvoiceDate(): ?string | setOriginalTransactionItemInvoiceDate(?string originalTransactionItemInvoiceDate): void |
| `feeTypeId` | `?int` | Optional | Fee type identifier<br>**Constraints**: `>= 1`, `<= 1` | getFeeTypeId(): ?int | setFeeTypeId(?int feeTypeId): void |
| `lineItemDescription` | `?bool` | Optional | Line item identifier of the product<br>**Default**: `false` | getLineItemDescription(): ?bool | setLineItemDescription(?bool lineItemDescription): void |
| `feeRuleDescription` | `?string` | Optional | Fee rule description<br>**Constraints**: *Minimum Length*: `8`, *Maximum Length*: `25` | getFeeRuleDescription(): ?string | setFeeRuleDescription(?string feeRuleDescription): void |
| `frequency` | `?int` | Optional | Frequency of transaction<br>**Constraints**: `>= 1`, `<= 1` | getFrequency(): ?int | setFrequency(?int frequency): void |
| `feeRuleId` | `?int` | Optional | Fee rule identifier<br>**Constraints**: `>= 1`, `<= 1` | getFeeRuleId(): ?int | setFeeRuleId(?int feeRuleId): void |
| `systemEntryDate` | `?string` | Optional | Entry date in the system | getSystemEntryDate(): ?string | setSystemEntryDate(?string systemEntryDate): void |
| `systemEntryTime` | `?string` | Optional | Entry time in the system | getSystemEntryTime(): ?string | setSystemEntryTime(?string systemEntryTime): void |
| `isManual` | `?string` | Optional | Checking if its manual<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1` | getIsManual(): ?string | setIsManual(?string isManual): void |
| `originalTransactionItemId` | `?string` | Optional | Is it manual<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1` | getOriginalTransactionItemId(): ?string | setOriginalTransactionItemId(?string originalTransactionItemId): void |
| `originalTransactionItemInvoiceNumber` | `?int` | Optional | Original invoice transaction number | getOriginalTransactionItemInvoiceNumber(): ?int | setOriginalTransactionItemInvoiceNumber(?int originalTransactionItemInvoiceNumber): void |
| `originalTransactionItemInvoiceId` | `?int` | Optional | Original Invoice transaction Identifier | getOriginalTransactionItemInvoiceId(): ?int | setOriginalTransactionItemInvoiceId(?int originalTransactionItemInvoiceId): void |
| `payerShortName` | `?string` | Optional | Payers short name<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getPayerShortName(): ?string | setPayerShortName(?string payerShortName): void |
| `reverseCharge` | `?string` | Optional | Is reverse charge?<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1` | getReverseCharge(): ?string | setReverseCharge(?string reverseCharge): void |
| `originalGrossAmount` | `?float` | Optional | Original gross amount | getOriginalGrossAmount(): ?float | setOriginalGrossAmount(?float originalGrossAmount): void |
| `originalNetAmount` | `?float` | Optional | Original Net amount | getOriginalNetAmount(): ?float | setOriginalNetAmount(?float originalNetAmount): void |
| `unitOfMeasure` | `?string` | Optional | Unit of measure<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1` | getUnitOfMeasure(): ?string | setUnitOfMeasure(?string unitOfMeasure): void |
| `roadType` | `?string` | Optional | Type of road<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getRoadType(): ?string | setRoadType(?string roadType): void |
| `customerCountryIsoCode` | `?string` | Optional | Customer country ISO Code<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `2` | getCustomerCountryIsoCode(): ?string | setCustomerCountryIsoCode(?string customerCountryIsoCode): void |
| `eVOperator` | `?string` | Optional | EvOperator Name<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `20` | getEVOperator(): ?string | setEVOperator(?string eVOperator): void |
| `eVSerialId` | `?string` | Optional | Ev Operator identifier<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getEVSerialId(): ?string | setEVSerialId(?string eVSerialId): void |
| `eVChargePointSerial` | `?string` | Optional | EV Charging point iserial identifier<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `50` | getEVChargePointSerial(): ?string | setEVChargePointSerial(?string eVChargePointSerial): void |
| `eVChargePointConnectorType` | `?int` | Optional | Ev chariging connector type | getEVChargePointConnectorType(): ?int | setEVChargePointConnectorType(?int eVChargePointConnectorType): void |
| `eVChargePointConnectorTypeDescription` | `?string` | Optional | EV charging point connector type description | getEVChargePointConnectorTypeDescription(): ?string | setEVChargePointConnectorTypeDescription(?string eVChargePointConnectorTypeDescription): void |
| `eVChargeDuration` | `?string` | Optional | Ev charging Duration | getEVChargeDuration(): ?string | setEVChargeDuration(?string eVChargeDuration): void |
| `eVChargeStartDate` | `?string` | Optional | EvCharging start Date | getEVChargeStartDate(): ?string | setEVChargeStartDate(?string eVChargeStartDate): void |
| `eVChargeStartTime` | `?string` | Optional | EvCharging start time | getEVChargeStartTime(): ?string | setEVChargeStartTime(?string eVChargeStartTime): void |
| `eVChargeEndDate` | `?string` | Optional | EvCharging End Date | getEVChargeEndDate(): ?string | setEVChargeEndDate(?string eVChargeEndDate): void |
| `eVChargeEndTime` | `?string` | Optional | EvCharging End time | getEVChargeEndTime(): ?string | setEVChargeEndTime(?string eVChargeEndTime): void |
| `hostingCollectingCompanyNumber` | `?int` | Optional | - | getHostingCollectingCompanyNumber(): ?int | setHostingCollectingCompanyNumber(?int hostingCollectingCompanyNumber): void |
| `transactionId` | `?float` | Optional | - | getTransactionId(): ?float | setTransactionId(?float transactionId): void |
| `fuelOnly` | `?bool` | Optional | - | getFuelOnly(): ?bool | setFuelOnly(?bool fuelOnly): void |

## Example (as JSON)

```json
{
  "AccountName": "Blue Colour Ltd",
  "AccountId": 29484,
  "AccountNumber": "DE26667080",
  "AccountShortName": "Mathew",
  "Additional1": "GBALLEGO0002452",
  "Additional2": "GBALLEGO0002452",
  "Additional3": "GBALLEGO0002452",
  "Additional4": "GBALLEGO0002452",
  "AllowClearing": "Null",
  "AuthorisationCode": 300796,
  "TransactionStatus": "Y",
  "DriverName": "SATTY BHAMRA",
  "CardExpiryPeriod": 2204,
  "CardExpiry": "2022-01-01",
  "CardGroupId": 40000,
  "CardGroupName": "006240 FIRE BRIGHT SOLUTIONS",
  "IssuerCode": 7002,
  "CardPAN": "7002053465789891000",
  "ReleaseCode": 9,
  "CardSequenceNumber": 617,
  "CardType": "GB STD FLT NAT SINGLE R9",
  "ColCoCode": "014",
  "UnitDiscountInvoiceCurrency": -0.0051,
  "ColCoExchangeRate": 0.851858,
  "InvoiceCurrencySymbol": "GBP",
  "CustomerCountry": "United Kingdom",
  "CustomerCurrencyCode": "GBP",
  "CustomerCurrencySymbol": "£",
  "EffectiveDiscountInCustomerCurrency": -0.22,
  "EffectiveUnitDiscountInCustomerCurrency": -0.0051,
  "UnitPriceInInvoiceCurrency": 1.1024,
  "InvoiceTax": 0,
  "InvoiceGrossAmount": 57.25,
  "InvoiceNetAmount": 47.71,
  "VATonNetAmountInCustomerCurrency": 9.54,
  "CustomerRetailPriceUnitGross": 0,
  "CustomerRetailValueTotalGross": 57.52,
  "CustomerRetailValueTotalNet": 47.93,
  "TransactionTypeDescription": 9.59,
  "RebateonNetAmountInTransactionCurrency": -0.22,
  "EffectiveDiscountInTrxCurrency": -0.22,
  "UnitDiscountTransactionCurrency": -0.005,
  "TransactionGrossAmount": 57.25,
  "TransactionNetAmount": 47.71,
  "TransactionTax": 9.54,
  "VATonNetAmount": 9.54,
  "DelcoListPriceUnitNet": 0,
  "DelcoRetailPriceUnitGross": 1.32888,
  "UnitPriceInTransactionCurrency": 1.1074,
  "DelcoRetailPriceUnitNet": 1.1074,
  "DelcoRetailValueTotalGross": 57.52,
  "DelcoRetailValueTotalNet": 47.93,
  "TransactionCurrencySymbol": "$",
  "DiscountType": "Retail",
  "DisputeStatus": false,
  "IsShellSite": false,
  "FleetIdInput": "YG67OUM",
  "IncomingProductCode": 23,
  "PostingDate": "2021-08-02",
  "ProductCode": 30,
  "ProductName": "Unleaded - Medium octane",
  "ProductGroupId": 22,
  "IncomingCurrencyCode": "GBP",
  "IncomingSiteDescription": "Shell Broadway Ring",
  "Location": "Shell Broadway Ring",
  "SiteName": "Shell Broadway Ring",
  "SiteCode": 32,
  "IncomingSiteNumber": 15,
  "InvoiceCurrencyCode": "GBP",
  "InvoiceDate": "2021-08-02",
  "InvoiceNumber": 3201016193,
  "VATApplicable": "Y",
  "PayerName": "Colours Services Ltd",
  "PayerNumber": "GB12121212",
  "ParentCustomerNumber": "GB12121212",
  "PayerGroup": "H312066",
  "PayerGroupName": "12162566 - FUEL CARD SERVICE",
  "CheckDigit": 6,
  "NetInvoiceIndicator": "Y",
  "DelcoCode": 5,
  "NetworkCode": 3,
  "PurchasedInCountry": "United Kingdom",
  "SiteCountry": "United Kingdom",
  "VATCountry": "United Kingdom",
  "DelcoName": "Shell U.K. Oil Products Limited",
  "Network": "Shell",
  "OdometerInput": 0,
  "OriginalSalesItemId": "Null",
  "FleetIDDescription": "YG67OUM",
  "ParentCustomerId": 6494,
  "PINIndicator": "Y, N",
  "ProductGroupName": "Fees",
  "PurchasedInCountryCode": "GB",
  "Quantity": 43.28,
  "RebateRate": 0.0022,
  "ReceiptNumber": 6803,
  "SiteGroupId": 202,
  "SiteGroupName": "CZ 9100 ECONOMY NETWORK",
  "Latitude": 53.83606,
  "Longitude": -1.61854,
  "DelCoExchangeRate": 0.851858,
  "EuroRebateAmount": -0.258259,
  "NetEuroAmount": 56.01,
  "EuroVATAmount": 11.2,
  "ParentCustomerName": "FUEL CARD SERVICES LTD",
  "IsInvoiced": false,
  "TransactionCurrencyCode": "GBP",
  "CreditDebitCode": "D or C",
  "TransactionDate": "2021-08-01",
  "TransactionTime": "01/01/0001 12:16:58",
  "TransactionItemId": "H305908971030",
  "TrnIdentifier": "H305908971030",
  "Type": "SALE",
  "TransactionLine": 1,
  "TransactionType": "Purchase",
  "UTCOffset": "Europe/London",
  "VATCategory": "United Kingdom Standard VAT Rate",
  "VATRate": 0.2,
  "VehicleRegistration": "YG67OUM",
  "IsCancelled": "Y",
  "ColCoGrossAmount": 57.25,
  "ColCoNetAmount": 47.71,
  "ColCoVATAmount": 9.54,
  "OriginalCurrencySymbol": "$",
  "OriginalCurrencyCode": "$",
  "OriginalVATAmount": 0,
  "EmbossText": "PARKLANE PROPERTIES LTD",
  "OriginalExchangeRate": 0,
  "OriginalTransactionItemInvoiceDate": "2022-02-02",
  "FeeTypeId": 1,
  "LineItemDescription": true,
  "FeeRuleDescription": "Simple Fee",
  "Frequency": 1,
  "FeeRuleId": 1,
  "SystemEntryDate": "2021-08-28",
  "SystemEntryTime": "01/01/0001 20:21:08",
  "IsManual": "Y",
  "OriginalTransactionItemId": "Y",
  "OriginalTransactionItemInvoiceNumber": 6750802,
  "OriginalTransactionItemInvoiceId": 234,
  "PayerShortName": "FUEL CARD SERVICES LTD",
  "ReverseCharge": "Y",
  "OriginalGrossAmount": 57.25,
  "OriginalNetAmount": 57.25,
  "UnitOfMeasure": "L",
  "RoadType": "National Road",
  "CustomerCountryIsoCode": "DE",
  "EVOperator": "Shell Recharge",
  "EVSerialId": "GBALLEGO0002452",
  "EVChargePointSerial": "GBALLEGO0002452",
  "EVChargePointConnectorType": 5,
  "EVChargePointConnectorTypeDescription": "DC 50 kW",
  "EVChargeDuration": "PT3205S",
  "EVChargeStartDate": "2021-08-01",
  "EVChargeStartTime": "01/01/0001 20:08:01",
  "EVChargeEndDate": "2022-08-01",
  "EVChargeEndTime": "01/01/0001 20:08:01"
}
```

