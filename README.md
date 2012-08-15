# monochrome | A fully responsive Kirby CMS theme
monochrome is an open source theme for [Kirby CMS](http://getkirby.com). It is fully responsive, free and you can use it out of the box. Test the live demo [here](http://monochrome.niklausgerber.com).

## Features
- Clean PHP, HTML and CSS theme for Kirby CMS
- Fully responsive
- Works on any modern web browser
- Prepared for SEO
- Beautiful typography designed for perfect readability on any device
- Non cluttered minimal design which guarantees lightning fast page loading speed
- Can be set up to your needs in less then 10 minutes
- Oh and it is free

## Kirby CMS
Kirby is a file-based CMS. Easy to setup, easy to use, flexible as hell. You will need to download Kirby and install it on your server. Once you are set you can start with the installation of monochrome. [You are free to use and modify this theme, but you must purchase a Kirby license if you want to use it in production](http://getkirby.com/buy).

## Step one | Installation
[Download the monochrome theme from GitHub](https://github.com/niklausgerber/monochrome/zipball/master). Delete the content of those three folders of your Kirby installation.

- /assets
- /content
- /site

Drag the monochrome theme with all its files to your kirby installation and replace existing files with them. Make sure you also copy the .htaccess files. If you now upload your kirby installation to your server the monochrome theme should be up and running.

## Step two | Configuration
I will quickly guide you through the different folders and explain you which settings you will have to change and which settings need optional modification.

### /assets/css
The CSS files are all set up for the beautiful monochrome theme. If you want to change the appearance of the theme you will find all important CSS styles in the base.css.

### /assets/images/icons/facebook
Replace this image with a 646 × 1027 pixels version of your own. It will be used if people are sharing content on Facebook and your article does not contain any images.

### /assets/images/icons/facicon.ico
Replace this image with a 16 × 16 pixels version of your own. This favicon will be displayed in the browser bar and the bookmark collection of your visitors.

### /assets/images/iOS
Replace these two image with a 72 × 72 pixels and a 114 × 114 pixels version of your own. This icon will displayed if an iOS user is adding your website to the home screen.

### /assets/js
Nothing to do here. jquery-1.7.1.min.js helps to power the theme and tinynav.js will change the main navigation to a drop down for mobile devices. If you have more JavaScripts you should add them here.
 
### /content/.htaccess
Make sure you copy the .htaccess file. It will make sure no one can snoop your content folders.

### /content/01-articles
Contains your blog articles. I added some examples of different content types to give you a head start.

### /content/02-home
Your home/info page.

### /content/03-search
Settings for the search page.

### /content/error
Settings for the 404 error page.

### /content/feed
Settings for the RSS feed.

### /content/site.txt
Overall site settings. Make sure you update your Twitter username and change the copyright. If you do not want to use the Twitter share you will have to modify the /site/snippets/share.php file to your needs.

### /content/sitemap
Generates an Google friendly XML site map. You can add the URL afterwards into the robots.txt.

	User-Agent: *
	Allow: /
	Sitemap: http://yourdomain.com

### /site/snippets/diqus.php
Sometimes it is better to build on existing systems rather than reinventing the wheel and a great existing comment system is Disqus.

Disqus has all the features you want from a good comment system: spam protection, multiple login features for your visitors, great admin tools to moderate comments, easy implementation and it is also quite easy to adapt to the design of your site.

Setting up an account with Disqus only takes a few minutes and setting up comments for your site is very straight forward. You can find detailed instructions [here](http://getkirby.com/blog/adding-comments).

After you setup your Disqus account you only have to change the username in the /site/templates/article.php file.

	<?php snippet('disqus', array('disqus_shortname' => 'USERNAME')) ?>	

### /site/snippets/footer.php
The complete footer of your page. Please change it at will but I am happy if you leave the comment on the last line.

### /site/snippets/header.php
The complete footer of your page. Please change it at will.

### /site/snippets/navigation.php
The complete footer of your page. Please change it at will. Any content site which has a number ID will be listed.

### /site/snippets/pagnition.php
The pagnition snippet. Please change it at will.

### /site/snippets/share.php
Social share buttons. Please change them at will.

### /site/templates/article.php
Style for a single article.

### /site/templates/articles.php
List of all articles. If you like you can change how many articles are displayed on the page:

	<? if(param('tag')) {
	
	  $articles = $pages->find('articles')
	                    ->children()
	                    ->visible()
	                    ->filterBy('tags', param('tag'), ',')
	                    ->flip()
	                    ->paginate(10);
	
	} else {
	
	  $articles = $pages->find('articles')
	                    ->children()
	                    ->visible()
	                    ->flip()
	                    ->paginate(10);
	
	} ?>

### /site/templates/default.php
Your Info page.

### /site/templates/error.php
Your Error page.

### /site/templates/search.php
Your Search page.If you like you can change how many results are displayed on the page:

	$search = new search(array(
  	'searchfield' => 'q',
  	'words' => true,
  	'in' => 'articles',
  	'paginate'    => 10
	));

## Disclaimers

### Credits
Please support humans.txt (http://humanstxt.org/). It's an initiative for knowing the people behind a website. It's a TXT file that contains information about the different people who have contributed to building the website.

	monochrome Theme: https://github.com/niklausgerber/monochrome
	Niklaus Gerber
	Twitter: @niklausgerber
	URL: http://niklausgerber.com
	Location: Bern, Switzerland
	
If you are happy with monochrome please link to http://niklausgerber.com & follow me on [Twitter](http://twitter.com/niklausgerber).

### Licences
Monochrome by Niklaus Gerber is licensed under a Creative Commons Attribution-ShareAlike 3.0 Unported License.
Based on a work at github.com.

### Download, Fork, Commit.
If you think you can make this better, please Download, Fork, & Commit. I'd love to see your ideas.