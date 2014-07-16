class Pageo.Models.FlickrImage extends Backbone.Model

  imageUrl: (size) ->
    size ||= 'q'
    'https://farm' + @get('farm') + '.staticflickr.com/' + @get('server') + '/' + @get('id') + '_' + @get('secret') + '_' + size + '.jpg'

  imageBackgroundUrl: (size) ->
    'url(' + @imageUrl(size) + ')'