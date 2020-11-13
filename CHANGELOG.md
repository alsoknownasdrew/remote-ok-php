# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Fixed

- Exception thrown when `Company::getLocation()` was called on null `location` field
- Typo in `PositionFactory` that marked all positions as not original

### Added

- Code of conduct
- Changelog
- Bug report template
- Pull request template
- PHPStan static analysis
- Travis CI integration
- Setup unit tests
- Interfaces for all classes
- Positions list limit feature

### Changed

- Added contributors table in readme
- Added Code of conduct section in readme
- Moved constants to interfaces, used interfaces instead of direct classes

## [0.0.2] - 2020-10-27

### Fixed

- Exception thrown when `Company::getLogoUrl()` was called on null `logoURL` field

## [0.0.1] - 2020-10-20

### Added

- First working implementation