class Pageo.Views.Product extends Backbone.View
  tagName: 'li'
  
  render: ->
    @$el.html( JST['application/templates/products/product'](model: @model))
    @