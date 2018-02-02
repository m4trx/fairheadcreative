# Fairhead Creative developers test
---

## About the test

The test itself consists of  sections, each graded separately:

0.) General section

1.) CSS (SASS with SCSS syntax)

2.) JavaScript

3.) WP PHP / Backend

Each of the sections consists of a couple of pages, with certain variations. The first part will usually require you to use the resources (e.g. scripts or stylesheets) that are already in there by manipulating markup only, and the second one will test your coding skills or knowledge. There's also a bonus round where you'll be asked to use skills that may be outside of the scope of your expertise in order to test your resourcefullness and initiative

Knowledge prerequisites you'll need in order to take this test:
* you should be able to set up local WP environment, meaning:
  * set up local Apache server with MySQL database
  * install wordpress locally
  * fork and plug this repo into your local WP install. for this bit you'll need to be familiar with:
    * Git
    * Wordpress file structure
  * know your way around Wordpress wp-admin area
  
These are the qualities we'll be considering while reviewing your solutions:
* focus and precision in following instructions
* analytical skills
* attention to detail
* resourcefullness and understanding of the code already in place. How well you use the resources at hand.
* code optimization
* how well you test your code - ability to isolate and squash bugs
* how well you'll be able to adjust to the project's code formatting
* the quality of your commit messages
* how well you communicate during and after the task is finished

Instructions
---
The task is to fix or modify the Homepage of the theme provided with this repository.

### General section (or setting things up and starting the test)
This is the part that everyone should be able to do themselves, regardless of being front or back-end:
1. set up local environment
2. fork this repo into your account and plug it into your local Wordpress install
3. rename the dev test theme folder to "dev test - YOUR NAME" and set the theme name as "Fairhead Creative Developers Test - YOUR NAME"
4. set the newly created theme as as your active theme 
5. set page-home.php as homepage, open it in your browser and start your test from there

### CSS Test
* access it by clicking the appropriate button from the Homepage hero section
* you'll be using SASS with SCSS syntax. The screen.scss file should compile to screen.css file (~PATH/sass sass --watch screen.scss:..\css\screen.css)
* we're using Bourbon, Neat & Bitters as base SASS libraries, and they're already installed and set up. Neat grid used in this test is Neat 1
* placing your code into proper locations, being mindful of syntax and indentation and leaving a clean and readable file behind you will get you a long way. Being able to adapt, organized and respectful to other people's work counts a lot

### JS Test
* access it by clicking the apropriate button from the Homepage hero section
* use Grunt to compile everything from /js folder into the production.js, then minify to production.min.js file
* you have all the libraries you need for this test present in the theme folder
* placing your code into proper locations, being mindful of syntax and indentation and leaving a clean and readable file behind you will get you a long way. Being able to adapt, organized and respectful to other people's work counts a lot

### PHP/Backend Test
* access it by clicking the apropriate button from the Homepage hero section
* placing your code into proper locations, being mindful of syntax and indentation and leaving a clean and readable file behind you will get you a long way. Being able to adapt, organized and respectful to other people's work counts a lot

### After you've finished with the test
Add me (Denis) as a collaborator to your repo, and drop me a note outlining what you've done inside it, so I can pull and review.
Your message to me should consist of these details:
1. outline what you did in each of your tasks. Feel free to go into as much technical details you want. Boast what you did better than the current codebase, and defend if you've made decisions you feel need defending
2. show me how I should set up wp-admin in order to view your modifications properly (as if you were delivering a project to a client–assume I have set up a local wp install with nothing on it)
3. any comments you might have, either on the codebase, or this test
4. your contact details: First name, last name, Skype handle, email, your location and/or time zone, preferred working hours, and maximum number of hours you may be available for work on weekly basis 
