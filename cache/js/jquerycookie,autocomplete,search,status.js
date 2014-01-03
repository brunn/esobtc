
jQuery.cookie=function(key,value,options){if(arguments.length>1&&(value===null||typeof value!=="object")){options=jQuery.extend({},options);if(value===null){options.expires=-1;}
if(typeof options.expires==='number'){var days=options.expires,t=options.expires=new Date();t.setDate(t.getDate()+days);}
return(document.cookie=[encodeURIComponent(key),'=',options.raw?String(value):encodeURIComponent(String(value)),options.expires?'; expires='+options.expires.toUTCString():'',options.path?'; path='+options.path:'',options.domain?'; domain='+options.domain:'',options.secure?'; secure':''].join(''));}
options=value||{};var result,decode=options.raw?function(s){return s;}:decodeURIComponent;return(result=new RegExp('(?:^|; )'+encodeURIComponent(key)+'=([^;]*)').exec(document.cookie))?decode(result[1]):null;};function ETAutoCompletePopup(field,character,clickHandler){var ac=this;this.field=field;this.character=character;this.active=false;this.items=0;this.index=0;this.cache=[];this.searches=[];this.value="";this.clickHandler=clickHandler;if(!this.clickHandler)this.clickHandler=function(member){var selection=ac.field.getSelection();var value=ac.field.val();var nameStart=0;if(selection.length==0){for(var i=selection.start;i>selection.start-20;i--){if(i!=selection.start&&(value.substr(i,1)=="]"))break;if(value.substr(i,ac.character.length)==ac.character){nameStart=i+ac.character.length;break;}}
if(nameStart){ac.field.val(value.substring(0,nameStart)+member["name"]+" "+value.substr(selection.start));var p=nameStart+member["name"].length+1;ac.field.selectRange(p,p);}}};this.popup=$("#autoCompletePopup-"+field.attr("id"));if(!this.popup.length)this.popup=$("<div id='autoCompletePopup-"+field.attr("id")+"'/>");this.popup.bind("mouseup",function(e){return false;}).addClass("popup").addClass("autoCompletePopup").hide();this.popup.appendTo("body");$(document).mouseup(function(e){ac.hide();});this.field.attr("autocomplete","off").keydown(function(e){if(ac.active){switch(e.which){case 40:ac.updateIndex(ac.index+1);e.preventDefault();break;case 38:ac.updateIndex(ac.index-1);e.preventDefault();break;case 13:case 9:ac.popup.find("li").eq(ac.index).click();e.preventDefault();break;case 27:ac.hide();e.stopPropagation();e.preventDefault();break;}}});this.field.keyup(function(e){switch(e.which){case 27:if(ac.active)e.stopPropagation();break;case 9:case 13:case 27:case 40:case 38:case 37:case 39:break;default:if(ac.character){var selection=$(this).getSelection();var value=$(this).val();var nameStart=0;if(selection.length==0){for(var i=selection.start;i>selection.start-20;i--){if(i!=selection.start&&value.substr(i,1)=="]")break;if(value.substr(i,ac.character.length)==ac.character){nameStart=i+ac.character.length;break;}}
if(nameStart){var name=value.substring(nameStart,selection.start);ac.fetchNewContent(name);}}}
else ac.fetchNewContent($(this).val());break;}});this.update=function(){if(ac.value){var value=ac.value.replace(/ /g,"\xA0");value=value.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&");var regexp=new RegExp("("+value+")","i");var results=[];for(var i in ac.cache){if(regexp.test(ac.cache[i].name)){results.push(ac.cache[i]);}}
ac.popup.html("<ul class='popupMenu'></ul>");if(results.length){results=results.sort(function(a,b){return a.name==b.name?0:(a.name<b.name?-1:1);});results=results.slice(0,5);var item;for(var i in results){var name=$("<div/>").text(results[i].name).html();name=name.replace(regexp,"<strong>$1</strong>");item=$("<li><a href='#'><i>"+results[i].avatar+"</i> "+name+"</a></li>").data("position",i).data("member",results[i]).mouseover(function(){ac.updateIndex($(this).data("position"));}).click(function(e){e.preventDefault();ac.clickHandler($(this).data("member"));ac.stop();});ac.popup.find("ul").append(item);}
ac.items=results.length;ac.active=true;ac.show();ac.updateIndex(ac.index);}
else ac.hide();}else ac.hide();}
this.timeout=null;this.fetchNewContent=function(value){if(value&&value!=ac.value&&ac.searches.indexOf(value)==-1&&value.length>2){clearTimeout(ac.timeout);ac.timeout=setTimeout(function(){$.ETAjax({id:"autoComplete",url:"members/autocomplete.ajax/"+encodeURIComponent(value),global:false,success:function(data){results:for(var i in data.results){for(var j in ac.cache){if(ac.cache[j].type==data.results[i].type&&ac.cache[j].memberId==data.results[i].memberId)continue results;}
ac.cache.push(data.results[i]);}
ac.searches.push(value);ac.update();}});},250);}
ac.value=value;ac.update();}
this.show=function(){ac.popup.show().css({position:"absolute",zIndex:9999});if(ac.character){var selection=ac.field.getSelection();var value=ac.field.val().substr(0,selection.start-ac.value.length);var testSubject=$('<div/>').css({position:'absolute',top:ac.field.offset().top,left:ac.field.offset().left,width:ac.field.width(),height:ac.field.height(),fontSize:ac.field.css('fontSize'),fontFamily:ac.field.css('fontFamily'),fontWeight:ac.field.css('fontWeight'),paddingTop:ac.field.css('paddingTop'),paddingLeft:ac.field.css('paddingLeft'),paddingRight:ac.field.css('paddingRight'),paddingBottom:ac.field.css('paddingBottom'),letterSpacing:ac.field.css('letterSpacing'),lineHeight:ac.field.css('lineHeight')}).html(value.replace(/[\n\r]/g,"<br/>")).appendTo("body").append("<span style='position:absolute'>&nbsp;</span>");var offset=testSubject.find("span").offset();ac.popup.css({left:offset.left,top:offset.top+testSubject.find("span").height()});testSubject.remove();}
else ac.popup.css({left:ac.field.offset().left,top:ac.field.offset().top+ac.field.outerHeight()-1,width:ac.field.outerWidth()});ac.active=true;}
this.hide=function(){ac.popup.hide();ac.active=false;}
this.stop=function(){ac.hide();clearTimeout(ac.timeout);$.ETAjax.abort("autoComplete");}
this.updateIndex=function(index)
{ac.index=index;if(ac.index<0)ac.index=ac.items-1;else if(ac.index>=ac.items)ac.index=0;ac.popup.find("li").removeClass("selected").eq(ac.index).addClass("selected");}};var ETSearch={currentSearch:"",currentChannels:[],form:null,formInput:null,formReset:null,updateInterval:null,init:function(){if(ET.currentChannels)ETSearch.currentChannels=ET.currentChannels;if(ET.currentSearch)ETSearch.currentSearch=ET.currentSearch;ETSearch.form=$("#search");ETSearch.formInput=$("#search .text");ETSearch.formReset=$("#search .control-reset");new ETAutoCompletePopup(ETSearch.formInput,"author:");new ETAutoCompletePopup(ETSearch.formInput,"contributor:");if($("#searchControls").length)
$("#search fieldset").append($("#searchControls").popup({alignment:"right"}));ETSearch.form.submit(function(e){ETSearch.search(ETSearch.formInput.val());e.preventDefault();});ETSearch.formInput.keydown(function(e){if(e.which!=27)return;if(ETSearch.formInput.val()!=""){ETSearch.search("");ETSearch.formInput.focus();}
else ETSearch.formInput.blur();e.preventDefault();}).keyup(function(e){ETSearch.formReset.css("visibility",(ETSearch.formInput.val()!=""||ETSearch.currentSearch!="")?"":"hidden");}).focus(function(){var input=$("#search input.text");$("#gambits").addClass("popup").css({position:"absolute",top:input.offset().top+input.outerHeight()+5,left:input.offset().left+input.outerWidth()-$("#gambits").outerWidth()}).fadeIn("fast");});if(!ETSearch.currentSearch)ETSearch.formReset.css("visibility","hidden");ETSearch.formReset.click(function(e){ETSearch.search("");ETSearch.formInput.focus();e.preventDefault();});$("#gambits").hide();ETSearch.formInput.blur(function(){$("#gambits").fadeOut("fast");});$("#gambits").mousedown(function(e){e.preventDefault();});$("#gambits a").click(function(e){e.preventDefault();ETSearch.gambit(desanitize($(this).data("gambit")),e.shiftKey);ETSearch.formInput.keyup();}).dblclick(function(e){e.preventDefault();ETSearch.search((e.shiftKey?"!":"")+"#"+desanitize($(this).data("gambit")));ETSearch.formInput.blur().keyup();}).bind("mousedown",function(e){e.preventDefault();});ETSearch.updateInterval=new ETIntervalCallback(ETSearch.update,ET.searchUpdateInterval);$("#channels a:not(.channel-list)").tooltip({alignment:"left",delay:250,offset:[0,0],className:"withArrow withArrowBottom"});$("#channels a.channel-list").tooltip();$(document).bind("statechange",function(event,hash){var parts=hash.split("?");var channelParts=parts[0].split("/");if(!channelParts[1])channelParts[1]="all";if(!parts[1])parts[1]="";var newChannel=decodeURIComponent(channelParts[1]);var newSearch=decodeURIComponent(parts[1].replace("search=",""));var oldChannel=ETSearch.getCurrentChannelSlugs().join("+");if(ETSearch.currentSearch!=newSearch||oldChannel!=newChannel){if(oldChannel!=newChannel)ETSearch.changeChannel(newChannel);else ETSearch.search(newSearch);}});$("#conversations a").live("click",function(){$.cookie("scrollTop",$(document).scrollTop(),{path:"/"});$.cookie("cid",ETSearch.getConversationIdForElement(this),{path:"/"});});setTimeout(function(){var scrollTop=$.cookie("scrollTop"),cid=$.cookie("cid");if(scrollTop)$.scrollTo(scrollTop);if(cid)$("#c"+cid).addClass("justVisited");$.cookie("scrollTop",null,{path:"/"});$.cookie("cid",null,{path:"/"});},1);$("#conversations .unreadIndicator").live("click",function(e){e.preventDefault();ETSearch.markAsRead(ETSearch.getConversationIdForElement(this));$.hideToolTip();});$("#conversations .channel").live("click",function(e){ETSearch.changeChannel($(this).data("channel"));e.preventDefault();});ETSearch.initSearchResults();$("#control-markAllAsRead").live("click",function(e){e.preventDefault();ETSearch.currentSearch="";ETSearch.changeChannel("all",false,true);});$("#control-markListedAsRead").live("click",function(e){e.preventDefault();ETSearch.search(ETSearch.currentSearch,"markAsRead");});$("#conversations .viewMore a").live("click",function(e){e.preventDefault();ETSearch.search(decodeURIComponent($(this).attr("href").split("?search=")[1].replace(/\+/g,' ')));});$("#channels a:not(.channel-list)").live("click",function(e){if(e.metaKey||e.ctrlKey)return;e.preventDefault();ETSearch.changeChannel($(this).data("channel"),e.shiftKey);});},getConversationIdForElement:function(elm){elm=$(elm);var id=elm.is("li")?elm.attr("id"):elm.parents("li").attr("id");return id?id.substr(1):null;},initSearchResults:function(){ETMembersAllowedTooltip.init($("#conversations .label-private"),function(elm){return ETSearch.getConversationIdForElement(elm)});ETMembersAllowedTooltip.showDelay=500;$("#conversations .unreadIndicator").tooltip({alignment:"left",className:"withArrow withArrowBottom"});},markAsRead:function(conversationId){$.ETAjax({url:"conversation/read.json/"+conversationId,global:true,success:function(data){var row=$("#c"+conversationId);$(row).removeClass("unread");$(".unreadIndicator",row).remove();}});},changeChannel:function(channel,addChannel,markAllAsRead){$.hideToolTip();$("#channels li:not(.pathItem)").removeClass("selected").find("a").removeClass("channel");var newChannel=null;for(var i in ET.channels){if(ET.channels[i]==channel){newChannel=i;break;}}
if(addChannel){if(ETSearch.currentChannels[0]!="")ETSearch.currentChannels=[""];var k=ETSearch.currentChannels.indexOf(newChannel);if(k!=-1)ETSearch.currentChannels.splice(k,1);else ETSearch.currentChannels.push(newChannel);}
else if(newChannel)ETSearch.currentChannels=[newChannel];else ETSearch.currentChannels=[];if(ETSearch.currentChannels.length){for(var i in ETSearch.currentChannels){$("#channels .channel-"+ETSearch.currentChannels[i]).parent().addClass("selected").not(".pathItem").find("a").addClass("channel");}}
ETSearch.search(ETSearch.currentSearch,markAllAsRead?"markAllAsRead":"");},getCurrentChannelSlugs:function(){var slugs=[];if(ETSearch.currentChannels.length){for(var i in ETSearch.currentChannels){if(ET.channels[ETSearch.currentChannels[i]])slugs.push(encodeURIComponent(ET.channels[ETSearch.currentChannels[i]]));else slugs.push("");}}
else slugs=["all"];return slugs;},search:function(query,customMethod){$("#gambits").fadeOut("fast");ETSearch.currentSearch=ETSearch.formInput.val(query).val();ETSearch.formReset.css("visibility",ETSearch.currentSearch?"visible":"hidden");var channelString=ETSearch.getCurrentChannelSlugs().join("+");$.history.load("conversations/"+channelString+(query?"?search="+encodeURIComponent(query):""),true);ETSearch.updateInterval.reset();$.ETAjax({id:"search",url:"conversations/"+(customMethod?customMethod+".ajax":"index.ajax")+"/"+channelString,type:"post",global:false,data:{search:query},success:function(data){if(data.messages)return;$("#conversations").html(data.view);ETSearch.updateChannels(data.channels);ETSearch.initSearchResults();ETMessages.hideMessage("search");},beforeSend:function(){createLoadingOverlay("conversations","conversations");},complete:function(){hideLoadingOverlay("conversations",false);}});},updateChannels:function(newChannels){var positions={};$("#channels a").each(function(){var classes=$(this).prop("className").split(" ");for(var i in classes){if(classes[i].indexOf("channel-")!=-1){positions[classes[i]]=$(this).offset().left;return;}}});$("#channels li:not(:first-child)").remove();$("#channels").append(newChannels);$("#channels a").each(function(){var classes=$(this).prop("className").split(" ");for(var i in classes){if(typeof classes[i]=="string"&&classes[i].indexOf("channel-")!=-1&&positions[classes[i]]){var newPos=$(this).offset().left;$(this).css("position","relative").css("left",-newPos+positions[classes[i]]).animate({left:0},"fast");return;}}
$(this).css("position","relative").css("left",-100).css("opacity",0).animate({left:0,opacity:1},"fast");});},update:function(){var conversationIds="";var count=Math.min($("#conversations li").length,20);$("#conversations li").each(function(i,row){if(i>count)return false;conversationIds+=ETSearch.getConversationIdForElement(row)+",";});var channelString=ETSearch.getCurrentChannelSlugs().join("+");$.ETAjax({url:"conversations/update.ajax/"+channelString+"/"+encodeURIComponent(ETSearch.currentSearch),type:"post",global:false,data:{conversationIds:conversationIds},success:function(data){if(!data.conversations)return;for(var i in data.conversations){if(!$("#c"+i).length)continue;$("#c"+i).replaceWith(data.conversations[i]);}
ETSearch.initSearchResults();}});},showNewActivity:function(){ETSearch.search(ETSearch.currentSearch);ETMessages.hideMessage("newSearchResults");},gambit:function(gambit,negative){gambit="#"+gambit;var initialLength=$.trim(ETSearch.formInput.val()).length;var safe=gambit.replace(/([?^():\[\]])/g,"\\$1");var regexp=new RegExp(negative?"( ?(- *|!)"+safe+" *$|^ *!"+safe+" *\\+ ?| ?(- *|!)"+safe+"|^ *!"+safe+" *$)":"( ?\\+ *"+safe+" *$|^ *"+safe+" *\\+ ?| ?\\+ *"+safe+"|^ *"+safe+" *$)","i");if(ETSearch.formInput.val().match(regexp))ETSearch.formInput.val(ETSearch.formInput.val().replace(regexp,""));else{var insert=(initialLength?(negative?" - ":" + "):(negative?"!":""))+gambit;ETSearch.formInput.focus();ETSearch.formInput.val(ETSearch.formInput.val()+insert);var placeholderIndex,placeholder;if(insert.indexOf("?")!=-1){placeholderIndex=insert.indexOf("?");placeholder="?";}else if(insert.indexOf(">10")!=-1){placeholderIndex=insert.indexOf(">10");placeholder=">10";}else if(insert.indexOf(":"+T("gambit.member"))!=-1){placeholderIndex=insert.indexOf(":"+T("gambit.member"))+1;placeholder=T("gambit.member");}
if(placeholderIndex){ETSearch.formInput.selectRange(initialLength+placeholderIndex,initialLength+placeholderIndex+placeholder.length);}}}};$(function(){ETSearch.init();});$(function(){if($("#conversationStatusControls").length)
$("#conversationBody .scrubberContent").prepend($("#conversationStatusControls").popup({alignment:"left",content:"<i class='icon-pushpin'></i> <span class='text'>Sildid</span> <i class='icon-caret-down'></i>"}).find(".button").addClass("big").end());});