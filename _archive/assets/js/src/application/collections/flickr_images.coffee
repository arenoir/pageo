class Pageo.Collections.FlickrImages extends Backbone.Collection

 initialize: (options) ->
   @photosetId = options.photosetId || '72157633247984014'

  url: ->
    'https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=' + Pageo.flickrApiKey + '&photoset_id=' + @photosetId + '&format=json&nojsoncallback=1&extras=title'
  
  parse: (resp, xhr) ->
    return resp.photoset.photo

  model: Pageo.Models.FlickrImage

