class Pageo.Collections.Slides extends Backbone.Collection
  model: Pageo.Models.Slide

  setSelected: (slide) ->
    @selected = slide
    @trigger 'selected', slide

  next: ->
    if m = @selected
      index = @indexOf(m) + 1
      t = @at(index) || @first()
      @setSelected t

  previous: ->
    if m = @selected
      index = @indexOf(m) - 1
      t = @at(index) || @last()
      @setSelected t