class Pageo.Models.GoogleEvent extends Backbone.Model
  
  startDate: ->
    if d = @get('start').date
      d

  recurrenceString: ->
    @get('recurrence')

  days: -> 
    if str = @get('recurrenceString')
      matches = /BYDAY=([^;]+);?/.exec(str)
      if matches
        return matches[1]


  recurrenceDays: ->
    if r = @get('recurrence')
      r.

