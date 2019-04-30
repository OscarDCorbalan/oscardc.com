+++
showonlyimage = false
draft = false
image = "portfolio/restaurant-menu/restaurant-menu.jpg"
title = "Restaurant menus"
description = "Restaurant Menus is an OAuth-enabled web application that allows restaurant owners to publish and manage their menus. Built with Python/Flask, Bootstrap and Vagrant."
year = 2016
weight = -20161
+++

Restaurant Menus is a project, built on top of Python and Flask, that I started while coursing the Full Stack Developer Nanodegree degree at Udacity. It's a web application that allows restaurant owners to register, manage and show off their menus.

## Technologies used

It's built with:

* **Database**: SQLAlchemy on top of PostgreSQL, tested to work also on top of MySQL and SQLite.
* **Back end**: Python, plus the Flask framework.
* **Front end**:  HTML5 & CSS3, with an interface built on top of Bootstrap and jQuery.
* **Authentication**: The project allows to authenticate via Facebook and Google by implementing OAuth authentication usign their public APIs.

### Provisioning

Everything was developed using Vagrant, and hosted at [Heroku](https://www.heroku.com).

### Screenshots

![Restaurant page](/portfolio/restaurant-menu/menu-of-restaurant.jpg)
![Facebook OAuth code](/portfolio/restaurant-menu/oauth-facebook.png)
![Google OAuth implementation](/portfolio/restaurant-menu/oauth-google.png)

### Project links

 * Live app at Heroku: https://oscardoc-restaurant-menu.herokuapp.com
 * Code repository: https://github.com/OscarDCorbalan/fullstack-nanodegree-vm/tree/master/vagrant/restaurants
 
