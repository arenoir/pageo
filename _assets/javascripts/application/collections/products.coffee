class Pageo.Collections.Products extends Backbone.Collection

	model: Pageo.Models.Product

	url: ->
		'http://pageo.myshopify.com/collections/frontpage/products.json?limit=40&callback=?'

	parse: (resp, xhr) ->
    	return resp.products


