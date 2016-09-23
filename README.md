# _Livin' on My Hair_

#### _A Database of Hair Stylists and The Clients Who Love Them, 23 September 2016_

#### By _**HK Kahng**_

## Description

Project Requirements: Create an application for a hair salon. The owner should be able to add stylists, and for each stylist, add clients who see that stylist. The stylists work independently, so each client only belongs to a single stylist.

## Specifications

* Able to retrieve Stylist name
  * Input: database record for Stylist named "Joe McCool"
  * Output: "Joe McCool"

* Able to retrieve Stylist ID Number
  * Input: database record for Stylist named "Joe McCool", ID Number of 1
  * Output: 1

* Can record Stylist information into database
  * Input: Stylist named "Joe McCool"
  * Output: create and retrieve "Joe McCool" from database

* Can replace Stylist name with new name
  * Input: new name for "Joe McCool" - "Joseph McCool"
  * Output: updated name - "Joseph McCool"

* Able to retrieve all Stylists
  * Input: database with the Stylists "Joe McCool", "Lana Smith", "Roland Curley"
  * Output: retrieved the list "Joe McCool", "Lana Smith", "Roland Curley"

* Can remove all Stylists from database
  * Input: database with the Stylists "Joe McCool", "Lana Smith", "Roland Curley"
  * Output: retrieved an empty list

* Can find Stylist based on ID Number
  * Input: database record for Stylist named "Joe McCool", ID Number of 1, finding Stylist with ID Number of 1
  * Output: "Joe McCool"'s database record



## Setup/Installation Requirements

### Database Setup

* CREATE DATABASE hair_salon;
* USE hair_salon;
* CREATE TABLE stylists (id serial PRIMARY KEY, name varchar (255));
* CREATE TABLE clients (id serial PRIMARY KEY, name varchar (255), stylist_id int);

### Application Setup

* Unzip and import database into mySQL.
* Adjust mySQL port as appropriate based on your local server's settings.
* Start the PHP server in the application's /web directory.
* Open a web browser to the server's root.

## Known Bugs

There are no known issues with this application.

## Support and contact details

Contact me via GitHub!

## Technologies Used

_{Tell me about the languages and tools you used to create this app. Assume that I know you probably used HTML and CSS. If you did something really cool using only HTML, point that out.}_

### License

Published under the MIT License.

Copyright (c) 2016 **_HK Kahng_**
