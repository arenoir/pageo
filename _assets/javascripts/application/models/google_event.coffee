class Pageo.Models.GoogleEvent extends Backbone.Model
  
  startDate: ->
    if d = @get('start.date')
      d