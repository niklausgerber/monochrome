# Blueprints for the articles overview page

title: Articles overview page
pages: true
	template: article
	sort: flip
	limit: 10
files: false
fields:
	title:
		label: title
		type: text
		help: The title of the articles overview page.
		required: true    
	description:
		label: description
		type: textarea
		size: small
		help: The description of the articles overview page.
		required: true
