# _Livin' on My Hair_

#### _A Database of Hair Stylists and The Clients Who Love Them, 23 September 2016_

#### By _**HK Kahng**_

## Description

Project Requirements: Create an application for a hair salon. The owner should be able to add stylists, and for each stylist, add clients who see that stylist. The stylists work independently, so each client only belongs to a single stylist.

## Specifications


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
