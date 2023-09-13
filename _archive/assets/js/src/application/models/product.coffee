class Pageo.Models.Product extends Backbone.Model

	baseUrl = 'http://pageo.myshopify.com/products/'

	buyUrl: ->
		if h = @get('handle')
			baseUrl + h

	imageUrl: ->
		@get('images').first()