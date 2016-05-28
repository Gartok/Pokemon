/**
 * Created by nico on 28/05/16.
 */
var cancel = false;

$(function() {
    $( "#attacklist, #attack1" ).sortable({
        update: function(event, ui) {
            if (this.id == "attack1" && !this.cancel) {
                $('#pokemons_firstAttack option[value=' + $(ui.item).attr('id') + ']').prop('selected', true)
            } else {
                $('#pokemons_firstAttack option[value='+ $(ui.item).attr('id') +']').prop('selected', false)
            }
        }
    })
});
$(function() {
    $( "#attacklist, #attack1" ).sortable({
        connectWith: ".connectedSortable",
        receive: function(event, ui) {
            var $this = $(this);
            if ($this.children('li').length > 1 && $this.attr('id') != "attacklist") {
                $(ui.sender).sortable('cancel');
                this.cancel = true;
            } else {
                this.cancel = false;
            }
        }
    }).disableSelection();
});
$(function() {
    $( "#attacklist, #attack2" ).sortable({
        update: function(event, ui) {
            if (this.id == "attack2" && !this.cancel) {
                $('#pokemons_secondAttack option[value=' + $(ui.item).attr('id') + ']').prop('selected', true)
            } else {
                $('#pokemons_secondAttack option[value='+ $(ui.item).attr('id') +']').prop('selected', false)
            }
        }
    })
});
$(function() {
    $( "#attacklist, #attack2" ).sortable({
        connectWith: ".connectedSortable",
        receive: function(event, ui) {
            var $this = $(this);
            if ($this.children('li').length > 1 && $this.attr('id') != "attacklist") {
                $(ui.sender).sortable('cancel');
                this.cancel = true;
            } else {
                this.cancel = false;
            }
        }
    }).disableSelection();
});
$(function() {
    $( "#attacklist, #attack3" ).sortable({
        update: function(event, ui) {
            if (this.id == "attack3" && !this.cancel) {
                $('#pokemons_thirdAttack option[value=' + $(ui.item).attr('id') + ']').prop('selected', true)
            } else {
                $('#pokemons_thirdAttack option[value='+ $(ui.item).attr('id') +']').prop('selected', false)
            }
        }
    })
});
$(function() {
    $( "#attacklist, #attack3" ).sortable({
        connectWith: ".connectedSortable",
        receive: function(event, ui) {
            var $this = $(this);
            if ($this.children('li').length > 1 && $this.attr('id') != "attacklist") {
                $(ui.sender).sortable('cancel');
                this.cancel = true;
            } else {
                this.cancel = false;
            }
        }
    }).disableSelection();
});
$(function() {
    $( "#attacklist, #attack4" ).sortable({
        update: function(event, ui) {
            if (this.id == "attack4" && !this.cancel) {
                $('#pokemons_fourthAttack option[value=' + $(ui.item).attr('id') + ']').prop('selected', true)
            } else {
                $('#pokemons_fourthAttack option[value='+ $(ui.item).attr('id') +']').prop('selected', false)
            }
        }
    })
});
$(function() {
    $( "#attacklist, #attack4" ).sortable({
        connectWith: ".connectedSortable",
        receive: function(event, ui) {
            var $this = $(this);
            if ($this.children('li').length > 1 && $this.attr('id') != "attacklist") {
                $(ui.sender).sortable('cancel');
                this.cancel = true;
            } else {
                this.cancel = false;
            }
        }
    }).disableSelection();
});