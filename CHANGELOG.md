# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [Unreleased]

---

## [1.0.0] - 2026-06-09

### Added
- Initial release as `letkode/helpers-bundle` (renamed from `letkode/helpers`)
- Symfony bundle integration via `LetkodeHelpersBundle` extending `AbstractBundle`
- Auto-discovery support via `extra.symfony.bundles` in Composer
- Service auto-wiring for all helpers via `config/services.yaml`
- **Array helpers**: `AddPrefixKeysHelper`, `BuildParentChildTreeHelper`, `BuildTreeByParentHelper`, `BuildTreeUserGroupHelper`, `ChunkHelper`, `ConvertArrayInUniqueKeyHelper`, `ConvertValuesToDoctrineHelper`, `DiffByKeyHelper`, `DynamicArrayOtherSimpleByDataHelper`, `FlattenHelper`, `GroupArrayColumnHelper`, `PluckHelper`, `RangeColsDynamicHelper`, `SearchByArrayHelper`, `SortByKeyHelper`, `UniqueByKeyHelper`, `ZipHelper`
- **String helpers**: `CleanSpecialCharactersHelper`, `ClearSpaceWhiteHelper`, `ExcerptHelper`, `FormatDateHelper`, `GenerateHashRandomHelper`, `GetterByKeyHelper`, `MaskSensitiveHelper`, `NormalizeStringHelper`, `ReplaceValuesTextFromArrayHelper`, `SanitizeFileNameHelper`, `SetterByKeyHelper`, `SlugifyHelper`, `StringCaseHelper`, `StringToUTF8Helper`, `TitleCaseCompanyHelper`, `TruncateByWordsHelper`
- **Conversion helpers**: `AgoShortDateHelper`, `BytesToHumanHelper`, `CurrencyFormatHelper`, `DateRangeHelper`, `DateToWordsHelper`, `GenerateRandomPasswordHelper`, `NumberToOrdinalHelper`, `NumberToWordsHelper`, `SecondsToHumanHelper`, `ValueToBooleanHelper`
- **Validation helpers**: `CompareDateHelper`, `IsValidDateHelper`, `IsValidEmailHelper`, `IsValidIpHelper`, `IsValidJsonHelper`, `IsValidStrengthHelper`, `IsValidUrlHelper`, `IsValidUuidHelper`
- **Contracts**: `ArrayHelperInterface`, `ConverterHelperInterface`, `NumberHelperInterface`, `PasswordHelperInterface`, `StringHelperInterface`, `TransformerHelperInterface`, `ValidatorHelperInterface`
- **Exceptions**: `HelperException`, `InvalidConfigurationException`, `InvalidInputException`, `MissingParameterException`

### Changed
- Package renamed from `letkode/helpers` to `letkode/helpers-bundle`
- Package type changed from `library` to `symfony-bundle`
- Namespace migrated from `Letkode\Helpers` to `Letkode\HelpersBundle`
- Symfony dependencies (`http-kernel`, `dependency-injection`, `translation`) moved from `require-dev` to `require`

### Requirements
- PHP `^8.4`
- Symfony `^7.0`
- `nesbot/carbon` `^3.0`
- `ext-intl`

[Unreleased]: https://github.com/letkode/helpers-bundle/compare/v1.0.0...HEAD
[1.0.0]: https://github.com/letkode/helpers-bundle/releases/tag/v1.0.0
