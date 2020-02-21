+++
showonlyimage = false
draft = false
image = "lazyload-js.jpg"
title = "Lazyload.js"
description = "Lazyload.js is an open source JavaScript library that can lazy load any kind of web content, think of images, or html fragment in your website."
year = 2017
weight = -20171
+++

Lazyload.js is one of my open sources projects built absolutely from scrach. It's an Ipen Source JavaScript library that can lazy load any kind of web content or html fragment in your website.

## Tired of JS libraries that only work for images?

I took the project to build this library because I was tired of packages that only worked to lazyload images. Really? I don't need a library to just change an `<img random-src-attribute="xyz" />` to `<img src="xyz" />` when the user scroll is going to make the image visible

Lazyload.js detects viewport and user scrolling and allows you to lazy load:

* Images.
* HTML nodes.
* IFrames.
* **And whatever you want.**

You can see it live, loading all kind of content, at TopBoats.com.


### Screenshots

The images below show it working:

1. At first, there is no content.
1. Then, the AJAX configured to ask for the lazyloaded HTML is fired.
1. The AJAX finishes and the HTML is painted.
1. This HTML includes images that also lazyload.
1. The images are lazy-loaded.

![At first, there is no content](/project/lazyload-js/lazyload-1.png)
![Then, an AJAX to retrieve HTML is fired](/project/lazyload-js/lazyload-2.png)
![The HTML fires... which includes images that also lazyload](/project/lazyload-js/lazyload-3.png)
![The images are loaded](/project/lazyload-js/lazyload-4.png)

### Project links

 * Code repository: [Link to library repo at GitHub](https://github.com/OscarDCorbalan/lazyload.js/)
 * Ready-to-use & minified version hosted on CDN: [Link to JSDeliver CDN](https://www.jsdelivr.com/projects/lazyload-js)
