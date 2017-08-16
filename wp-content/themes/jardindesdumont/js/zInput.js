jQuery.fn.zInput = function(){

var jQueryinputs = this.find(":radio,:checkbox");
jQueryinputs.hide();
var inputNames = [];
jQueryinputs.map(function(){
  inputNames.push(jQuery(this).attr('name'));
});

inputNames = jQuery.unique(inputNames);

jQuery.each(inputNames, function(index,value){

	var jQueryelement = jQuery("input[name='" + value + "']");
	var elementType = jQueryelement.attr("type");
	jQueryelement.wrapAll('<div class="zInputWrapper" />');
	if (elementType == "radio"){
		jQueryelement.wrap(function(){ return '<div class="zInput"><span style="display:table;width: 100%;height: 100%;"><span style="display: table-cell;vertical-align:middle;">' + jQuery(this).attr("title") + '</span></span></div>'});
	}
	if (elementType == "checkbox")
	{
		jQueryelement.wrap(function(){ return '<div class="zInput zCheckbox"><span style="display:table;width: 100%;height: 100%;"><span style="display: table-cell;vertical-align:middle;">' + jQuery(this).attr("title") + '</span></span></div>'});
	}

	});


var jQueryzRadio = jQuery(".zInput").not(".zCheckbox");
var jQueryzCheckbox	= jQuery(".zCheckbox");

jQueryzRadio.click(function(){
	jQuerytheClickedButton = jQuery(this);

	//move up the DOM to the .zRadioWrapper and then select children. Remove .zSelected from all .zRadio
	jQuerytheClickedButton.parent().children().removeClass("zSelected");
	jQuerytheClickedButton.addClass("zSelected");
	jQuerytheClickedButton.find(":radio").prop("checked", true).change();
	});

jQueryzCheckbox.click(function(){
	jQuerytheClickedButton = jQuery(this);

	//move up the DOM to the .zRadioWrapper and then select children. Remove .zSelected from all .zRadio
	jQuerytheClickedButton.toggleClass("zSelected");
	jQuerytheClickedButton.find(':checkbox').each(function () { this.checked = !this.checked; jQuery(this).change()});
	});


  jQuery.each(jQueryinputs,function(k,v){
    if(jQuery(v).attr('checked')){

      jQuery(v).parent().click();

    }

  });

}
