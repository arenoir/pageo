class Pageo.Models.PhotoSet extends Backbone.Model


  url: ->
    'http://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=' + Pageo.flickrApiKey + '&photoset_id=' + @id + '&format=json&nojsoncallback=1'
  
  parse: (resp, xhr) ->
    return resp.photoset

  photos: ->
    console.log @get("photo")
    new Pageo.Collections.Photos( collection: @get("photo") )