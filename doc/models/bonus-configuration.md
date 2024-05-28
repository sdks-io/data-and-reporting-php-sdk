
# Bonus Configuration

## Structure

`BonusConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricingAccountId` | `?int` | Optional | Account identifier of the Pricing Account associated with the Payer. | getPricingAccountId(): ?int | setPricingAccountId(?int pricingAccountId): void |
| `pricingAccountNumber` | `?string` | Optional | Account number of the Pricing Account associated with the Payer. | getPricingAccountNumber(): ?string | setPricingAccountNumber(?string pricingAccountNumber): void |
| `pricingAccountShortName` | `?string` | Optional | Short name of the Pricing Account associated with the Payer. | getPricingAccountShortName(): ?string | setPricingAccountShortName(?string pricingAccountShortName): void |
| `pricingAccountFullName` | `?string` | Optional | Full name of the Pricing Account associated with the Payer. | getPricingAccountFullName(): ?string | setPricingAccountFullName(?string pricingAccountFullName): void |
| `feeRuleId` | `?int` | Optional | Bonus or association bonus configuration identifier that is associated to the payer. | getFeeRuleId(): ?int | setFeeRuleId(?int feeRuleId): void |
| `feeRuleDescription` | `?string` | Optional | Bonus or association bonus configuration description that is associated to the payer. | getFeeRuleDescription(): ?string | setFeeRuleDescription(?string feeRuleDescription): void |
| `feeRuleDateEffective` | `?string` | Optional | The bonus or association bonus configuration becomes effective on the payer from this date.<br>Format: YYYYMMDD | getFeeRuleDateEffective(): ?string | setFeeRuleDateEffective(?string feeRuleDateEffective): void |
| `feeRuleDateTerminated` | `?string` | Optional | The bonus or association bonus configuration is terminated for the payer on this date.<br>Format: YYYYMMDD | getFeeRuleDateTerminated(): ?string | setFeeRuleDateTerminated(?string feeRuleDateTerminated): void |
| `bonusPaidTo` | `?string` | Optional | Configuration to specify how the bonus is paid.<br>Format: ID-Description<br>Example:<br>1-Pay to Payer<br>2-Pay to invoice levels before the payer<br>3-Pay to specific customer<br>4-Pay to Association Customer<br>5-Pay to Associated Customers | getBonusPaidTo(): ?string | setBonusPaidTo(?string bonusPaidTo): void |
| `bonusPaidToAccountId` | `?int` | Optional | Account identifier of the specific account to which the bonus is paid back | getBonusPaidToAccountId(): ?int | setBonusPaidToAccountId(?int bonusPaidToAccountId): void |
| `bonusPaidToAccountNumber` | `?string` | Optional | Account number of the specific account to which the bonus is paid back | getBonusPaidToAccountNumber(): ?string | setBonusPaidToAccountNumber(?string bonusPaidToAccountNumber): void |
| `bonusPaidToAccountShortName` | `?string` | Optional | Short name of the specific account to which the bonus is paid back | getBonusPaidToAccountShortName(): ?string | setBonusPaidToAccountShortName(?string bonusPaidToAccountShortName): void |
| `bonusPaidToAccountFullName` | `?string` | Optional | Full name of the specific account to which the bonus is paid back | getBonusPaidToAccountFullName(): ?string | setBonusPaidToAccountFullName(?string bonusPaidToAccountFullName): void |
| `frequency` | `?string` | Optional | Frequency of the configuration.<br>Format: ID-Description<br>Examples:<br>1-Daily (all days)<br>2-Daily (only working days)<br>3-Weekly – Monday | getFrequency(): ?string | setFrequency(?string frequency): void |
| `nextCalculationDate` | `?string` | Optional | The next bonus is calculated for the payer on this date.<br>Format: YYYYMMDD | getNextCalculationDate(): ?string | setNextCalculationDate(?string nextCalculationDate): void |
| `previousCalculatedDate` | `?string` | Optional | The previous bonus was calculated for the payer on this date.<br>Format: YYYYMMDD | getPreviousCalculatedDate(): ?string | setPreviousCalculatedDate(?string previousCalculatedDate): void |
| `feeRuleBasis` | `?string` | Optional | Fee Rule Basis configured.<br>Format: ID-Description<br>Example:<br>1-Currency Per Unit<br>2-Percentage of Uplift<br>3-Lump Sum | getFeeRuleBasis(): ?string | setFeeRuleBasis(?string feeRuleBasis): void |
| `feeRuleCurrencyCode` | `?string` | Optional | ISO currency code of the currency configured in the Bonus Configuration, if any. | getFeeRuleCurrencyCode(): ?string | setFeeRuleCurrencyCode(?string feeRuleCurrencyCode): void |
| `feeRuleCurrencySymbol` | `?string` | Optional | Currency symbol of the currency configured in the Bonus Configuration, if any. | getFeeRuleCurrencySymbol(): ?string | setFeeRuleCurrencySymbol(?string feeRuleCurrencySymbol): void |
| `feeRuleAvailableFrom` | `?string` | Optional | This bonus or association bonus is available from this date.<br>Format: YYYYMMDD | getFeeRuleAvailableFrom(): ?string | setFeeRuleAvailableFrom(?string feeRuleAvailableFrom): void |
| `feeRuleAvailableTo` | `?string` | Optional | This bonus or association bonus configuration will not be available from this date.<br>Format: YYYYMMDD | getFeeRuleAvailableTo(): ?string | setFeeRuleAvailableTo(?string feeRuleAvailableTo): void |
| `feeRuleLocations` | [`?(FeeRuleLocation[])`](../../doc/models/fee-rule-location.md) | Optional | - | getFeeRuleLocations(): ?array | setFeeRuleLocations(?array feeRuleLocations): void |
| `feeRuleTiers` | [`?(FeeRuleTier[])`](../../doc/models/fee-rule-tier.md) | Optional | - | getFeeRuleTiers(): ?array | setFeeRuleTiers(?array feeRuleTiers): void |
| `associatedAccounts` | [`?(AssociatedAccount[])`](../../doc/models/associated-account.md) | Optional | - | getAssociatedAccounts(): ?array | setAssociatedAccounts(?array associatedAccounts): void |
| `feeRuleProducts` | [`?(FeeRuleProduct[])`](../../doc/models/fee-rule-product.md) | Optional | - | getFeeRuleProducts(): ?array | setFeeRuleProducts(?array feeRuleProducts): void |

## Example (as JSON)

```json
{
  "PricingAccountId": 80,
  "PricingAccountNumber": "PricingAccountNumber0",
  "PricingAccountShortName": "PricingAccountShortName2",
  "PricingAccountFullName": "PricingAccountFullName8",
  "FeeRuleId": 12
}
```

