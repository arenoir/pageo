class Pageo.Views.UpcomingEvents extends Backbone.View
  tagName: 'ul'
  className: 'upcoming-events'

  render: ->
    @collection.each (item) =>
      @$el.append( JST['application/templates/upcoming_events/item'](model: item) )
    @
