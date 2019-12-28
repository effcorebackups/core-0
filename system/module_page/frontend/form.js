document.addEventListener('DOMContentLoaded', function(){

/* range */

  document.effQuerySelectorAll('input[type="range"]').forEach(function(c_range){
    c_range.parentNode.effQuerySelector('x-value').effForFirst(function(x_value){
      c_range.addEventListener('mousemove', function(){
        x_value.innerText = c_range.title = c_range.value;
      });
    });
  });

/* timezone */

  document.effQuerySelectorAll('select[data-source="uagent-timezone"]').forEach(function(c_timezone){
    if (c_timezone.value == '' && window.Intl)
        c_timezone.value = Intl.DateTimeFormat().resolvedOptions().timeZone;
  });

/* palette */

  document.effQuerySelectorAll('x-group[data-type="palette"]').forEach(function(c_palette){
    c_palette.effQuerySelector('input[data-opener-type="palette"]').effForFirst(function(opener){
      c_palette.effQuerySelectorAll('x-field input').forEach(function(c_input){
        c_input.addEventListener('click', function(){
          opener.style.backgroundColor = c_input.style.backgroundColor;
          opener.value                 = c_input.value;
        });
      });
    });
  });

/* table-adaptive + check all */

  document.effQuerySelectorAll('x-selection').forEach(function(c_selection){
    c_selection.effQuerySelector('x-decorator[data-view-type="table-adaptive"]').effForFirst(function(decorator){
      var head_cell       = decorator.effQuerySelector   ('x-head x-cell[data-cellid="checkbox"]'                       );
      var body_checkboxes = decorator.effQuerySelectorAll('x-body x-cell[data-cellid="checkbox"] input[type="checkbox"]');
      if (head_cell.length == 1 && body_checkboxes.length) {
        var checkbox = document.createElement('input');
            checkbox.type = 'checkbox';
            checkbox.title = effcore.tokens['text_select_all_rows'];
        head_cell[0].append(checkbox);
        checkbox.addEventListener('change', function(){
          body_checkboxes.forEach(function(c_checkbox){
            c_checkbox.checked = checkbox.checked;
          });
        });
      }
    });
  });

/* rearrangeable */

  document.effQuerySelectorAll('[data-has-rearrangeable="true"]').forEach(function(c_has_rearrangeable){
    c_has_rearrangeable.setAttribute('data-js-is-processed', 'true');
    c_has_rearrangeable.effQuerySelectorAll('[data-rearrangeable="true"]').forEach(function(c_rearrangeable){

      var draggable_icon = document.createElement('x-draggable-icon');
          draggable_icon.setAttribute('draggable', 'true');
          draggable_icon.addEventListener('dragstart', function(event){ window._effDataTransferNode = this; c_has_rearrangeable.   setAttribute('data-has-rearrangeable-is-active', 'true'); c_rearrangeable.   setAttribute('data-rearrangeable-is-active', 'true'); });
          draggable_icon.addEventListener('dragend',   function(event){ window._effDataTransferNode = null; c_has_rearrangeable.removeAttribute('data-has-rearrangeable-is-active'        ); c_rearrangeable.removeAttribute('data-rearrangeable-is-active'        ); });
      c_rearrangeable.prepend(draggable_icon);

      var handler_on_dragover  = function(event){ event.preventDefault();                                   };
      var handler_on_dragenter = function(event){ this.   setAttribute('data-droppable-is-active', 'true'); };
      var handler_on_dragleave = function(event){ this.removeAttribute('data-droppable-is-active'        ); };
      var handler_on_drop      = function(event){ this.removeAttribute('data-droppable-is-active'        );
          var position = this.getAttribute('data-position');
          var drop     = this.parentNode;
          var drag     = window._effDataTransferNode.parentNode;
          var c_weight = 0;
          if (position == 'before') drop.parentNode.insertBefore(drag, drop            );
          if (position == 'after' ) drop.parentNode.insertBefore(drag, drop.nextSibling);
          c_has_rearrangeable.effQuerySelectorAll('input[data-type="weight"]').forEach(function(c_input){
            c_input.value = c_weight;
            c_weight -= 5;
          });
      };

      var droppable_area_0 = document.createElement('x-droppable-area');
      var droppable_area_N = document.createElement('x-droppable-area');
          droppable_area_0.setAttribute('data-position', 'before');
          droppable_area_N.setAttribute('data-position', 'after' );
      [droppable_area_0, droppable_area_N].forEach(function(droppable_area){
          droppable_area.addEventListener('dragover',  handler_on_dragover );
          droppable_area.addEventListener('dragenter', handler_on_dragenter);
          droppable_area.addEventListener('dragleave', handler_on_dragleave);
          droppable_area.addEventListener('drop',      handler_on_drop  );});
      c_rearrangeable.prepend(droppable_area_0);
      c_rearrangeable.append (droppable_area_N);

    });
  });

});