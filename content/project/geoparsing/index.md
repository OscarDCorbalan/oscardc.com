+++
showonlyimage = false
draft = false
image = "project/geoparsing/geoparsing.jpg"
title = "Geoparsing"
description = "Software developed to geoparse social messages and geolocate users, to amplify semantic-rich, spanish language analytics for multinational brands."
year = 2013
weight = -20131
+++

This software was developed for 'Séntisis Analytics', a company that back in 2013 was a startup and is now the leader in social signal analysis of spanish speakers.

Séntisis had the requirement of geolocating users and messages of hispanic speakers, to be able to study geographic differences in their studies.

## The software

The solution offered allows to geoparse locations by integrating the CLAVIN engine (Cartographic Location And Vicinity INdexer), an Open Source software, plus the, also free, OpenStreetMap cartography. The software allows filtering and interpreting written locations, even misspelled places (e.g. Madriz, Parris, Manatan) and abbrevations (NYC, BCN) as well as possible alias (MDQ for 'Mar de Plata').

The final product was integrated in the Séntisis server stack, and is able of processing millions of entries in batch to, for example, create popularity maps, as well as processing entries in real time to associate signals or social users to a geolocation.

### Technologies used

* CLAVIN to process messages and extract relevant data.
* OpenStreetMap as a free countries, regions and POIs database. To geolocate many users, the content of their messages had to be correlated to real-world entities.
* Custom algorithm to remove spammy or offensive comments  (think of Twitter trolls?).

### Images

![Clavin logo](/project/geoparsing/clavin.jpg)
![ñ](/project/geoparsing/azul.jpg)
![At first, there is no content](/project/geoparsing/openstreetmap.jpg)

### Project links

 * Séntisis website: http://www.sentisis.com/
 * CLAVIN website: http://clavin.bericotechnologies.com/
 * OpenStreetMap: https://www.openstreetmap.org/
