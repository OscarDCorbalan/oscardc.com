+++
showonlyimage = false
draft = false
image = "portfolio/mealeaters/mealeaters.jpg"
title = "MealEaters"
description = "Meleaters was a restaurant information scrapper and aggregator, created as a web application built for the cloud, built with Python, NodeJS and PostgreSQL."
year = 2017
weight = -20172
+++

MealEaters is a restaurant review aggregator, built to live in the cloud. A cloud-based web application.

## Technologies used

As this is a free-time project, there's still not available a public version of the website. A list of the technologies used so far, is:

* **Provisioning**: Ansible, virtualenv and Vagrant.
* **Database**: PostgreSQL and MongoDB.
* **Back end**: Python for web scraping and server provisioning; NodeJS for the monitoring website.
* **Front end**: React, D3.js, HTML5/CSS3 plus Bootstrap.

### Provisioning

It uses **Ansible** to automate deployment of cloud/virtual servers in multiple providers: **ScaleWay**, **Amazon AWS**, **GinerNet**, **LowEndBox**...

The Ansible-automated deployment makes it possible to start/stop/manage servers running **Scrapy** that crawl websites looking for restaurant reviews. The environments for Scrapy are built with or **virtualenv**.

### Database - Backend

All these scrapers run automatically, and are synchronized, through job queues implemented in **PostgreSQL**, to easily keep all the scraped restaurant data consistent. The main website is fed through a **MongoDB** database that is updated, every few minutes, with new data from the PostgreSQL DB.

### Front-end

The website is fully built with **React** and **Redux** with optional SSR, plus **redux-saga**, **ImmutableJS** & friends to be able to inject actions, reducers, sagas, etc, on the fly.

The application takes advantage of **bundle-splitting** and is built with the principles of **progressive web apps**: it loads super-fast for the user, and even if ther is a CDN error when the user returns, the app will continue working thanks to web workers and browser caching

**D3.js** is also used for the charts.

The status page is built with HTML5/CSS3 plus Bootstrap.

### Screenshots

 ![Home page](/portfolio/mealeaters/home.jpg)
 ![Restaurant page](/portfolio/mealeaters/restaurant.jpg)

### Project links

  * Live website (down): www.mealeaters.com
  * Status/monitor page (down): monitor.mealeaters.com
