# _Livin' on My Hair_

#### _A Database of Hair Stylists and The Clients Who Love Them, 23 September 2016_

#### By _**HK Kahng**_

## Description

Project Requirements: Create an application for a hair salon. The owner should be able to add stylists, and for each stylist, add clients who see that stylist. The stylists work independently, so each client only belongs to a single stylist.

## Setup/Installation Requirements

### Database Setup

CREATE DATABASE salon;
USE salon;
CREATE TABLE stylists (id serial PRIMARY KEY, name varchar (255));
CREATE TABLE clients (id serial PRIMARY KEY, name varchar (255), stylist_id int);

* _This is a great place_
* _to list setup instructions_
* _in a simple_
* _easy-to-understand_
* _format_

_{Leave nothing to chance! You want it to be easy for potential users, employers and collaborators to run your app. Do I need to run a server? How should I set up my databases? Is there other code this app depends on?}_

## Known Bugs

_{Are there issues that have not yet been resolved that you want to let users know you know?  Outline any issues that would impact use of your application.  Share any workarounds that are in place. }_

## Support and contact details

Contact me via GitHub!

## Technologies Used

_{Tell me about the languages and tools you used to create this app. Assume that I know you probably used HTML and CSS. If you did something really cool using only HTML, point that out.}_

### License

Published under the MIT License.

Copyright (c) 2016 **_HK Kahng_**
