# Eclipx PHP Coding Test

## Purpose

This small coding test is used as part of the interview process for openings
with Eclipx. There are threee main tasks to be completed within the test, with
the aim of demonstrating an understanding of PHP frameworks and database
processes.

## Goal

The three challenges that need to be completed are:

1. Create a migration script that will create a new column in the database
named **registration** as a VARCHAR(50) field and extract the registration
number from the description field to fill in this new field.
2. Create an HTML view showing a summary of the invoices that lists the invoice
date, invoice number, total amount net and total amount gst, client_id and the
number of contracts billed.
3. Provide a link from the summary page to a details page that will show the
line data for a single invoice from the database, along with the same total
fields at the bottom of the page.

## Criteria

A PHP framework of you choosing **must** be used, preferably one built upon
Symfony.

The user added code must follow the PSR-12 coding standard.

## Bonus Points

- A UI framework is utilised
- The data retrieval for the UI is done through a REST call
- Test Driven Development methodoly implemented
- Readme on code design and framework use

## Tips

The Docker files provided will build an environment with PHP, Apache, MySQL and
PHPMyAdmin. *docker-compose build* and *docker-compose up* will be helpful
commands once Docker Desktop is installed.

MySQL will have a database initialised and accessible through the credentials
provided in the docker-compose.yaml file.

The *src* folder should be used to store the code required.

The Docker configuration can be updated to include Composer locally if this
makes builds easier.

PHPMyAdmin can be utilised via [http://localhost:8008](http://localhost:8008).
The PHP app can be seen at [http://localhost:8000](http://localhost:8000). If
these ports are used by your environment already they can be updated in the
Docker config.
