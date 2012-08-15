# Blueprints for an article

title: Article
pages: false
files: true
fields:
	title:
		label: title
		type: text
		help: The title of your article.
		required: true    
	description:
		label: description
		type: textarea
		size: small
		help: Short description of your article.
		required: true
	published:
		label: published
		type: text
		help: Publishing date (01 January 2012).
		required: true
	tags:
		label: tags
		type: text
		help: Your Tags (Tag One, Tag Two, Tag 3).
		required: true
	text:
		label: your content
		type: textarea
		size: large
		help: Your content.
		required: true
		buttons: 
			- h1
			- h2
			- h3
			- bold
			- italic
			- email
			- link