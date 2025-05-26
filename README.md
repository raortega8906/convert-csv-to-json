<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Convert CSV to JSON

## Glossary

A lightweight utility that batch-converts large sets of CSV files into clean, well-structured JSON—perfect for feeding data straight into your CRM’s import workflow. Born out of an internal need to migrate thousands of spreadsheet records quickly and reliably, this tool automates the transformation process, preserves header mappings, and outputs ready-to-use JSON that meets common CRM schema requirements. Ideal for developers or analysts who need a fast, scriptable way to move data from spreadsheets to modern systems without manual reformatting.

- **CSV**: Comma-Separated Values
- **JSON**: JavaScript Object Notation

## Goals

- Convert CSV to JSON.

## Prerequisites

- PHP 8.2 or higher
- MySQL 8.0 or higher
- Composer 2.0 or higher

### Installation

1. Clone the repository
2. Run `composer install`
3. Copy the `.env.example` file to `.env`
4. Run `php artisan key:generate`
5. Run `php artisan migrate`
6. Run `php artisan serve`

## License

Convert CSV to JSON project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).