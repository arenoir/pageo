#= require_self

#= require_tree ./models
#= require_tree ./collections
#= require_tree ./views
#= require_tree ./templates

@Pageo =
  Models: {}
  Collections: {}
  Views: {}
  Routers: {}
  flickrApiKey: '8eb075620268500e7336b334d442bdf1'
  
  # startSlideShow: (slides) =>
  #   slides.auto = window.setInterval( () ->
  #       slides.next()
  #       return
  #     10000
  #   )

  # stopSlideShow: (slides) =>
  #   if slides.auto
  #     window.clearInterval( slides.auto )    


  gallery: (el, photosetId) ->

    photosetId ||= '72157633247984014'

    collection = new Pageo.Collections.FlickrImages( photosetId: photosetId )
    collection.fetch()

    gallery = new Pageo.Views.Gallery( collection: collection)

    $(el).html( gallery.render().el )


    return