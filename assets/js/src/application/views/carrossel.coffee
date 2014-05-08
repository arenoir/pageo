class Pageo.Views.Carousel extends Backbone.View
  tagName: 'ul'
  className: 'carousel'

  initialize: (options) ->
    @collection.on 'selected', @slideIn, @
    #$(window).bind "resize.app", _.bind(this.resize, this)

  remove: 
    $(window).unbind("resize.app")

  render: ->
    @collection.each (slide) =>
      @$el.append( JST['application/templates/carousel/item'](model: slide) )
    @


  slideIn: (slide) ->
    @$el.animate( { marginLeft: @slideOffset(slide) }, 300 )

  slideOffset: (slide) ->
    index = @collection.indexOf( slide )
    offset = ( -1.0 * index * @imageWidth() )

  imageWidth: ->
    $(document).width()

  ##resize: ->
  #  #h = $(document).width() * 0.62
  #  #@$el('li').each -> $(this).height(h)