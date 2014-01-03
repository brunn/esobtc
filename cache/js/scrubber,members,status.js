
var ETScrubber={header:null,body:null,scrubber:null,items:null,loadItemsCallback:null,scrollToIndexCallback:null,count:0,startFrom:0,perPage:0,moreText:"Load more",loadedItems:[],init:function(){var count=Math.min(this.startFrom+this.perPage,this.count);for(var i=this.startFrom;i<count;i++)
this.loadedItems.push(i);this.header=$("#hdr");var headerTop=this.header.offset().top;var headerWidth=this.header.width();var scrubberTop=this.scrubber.length&&(this.scrubber.offset().top-this.header.outerHeight()-20);$(window).scroll(function(){var y=$(this).scrollTop();if(y>=scrubberTop&&!ET.disableFixedPositions){ETScrubber.scrubber.addClass("floating").css({position:"fixed",top:ETScrubber.header.outerHeight()+20,zIndex:100});}
else{ETScrubber.scrubber.removeClass("floating").css({position:"",top:""});}
$("li",ETScrubber.items).each(function(){var item=$(this);if(y>item.offset().top+item.outerHeight()-ETScrubber.header.outerHeight())return true;else{$(".scrubber li").removeClass("selected");var index=item.data("index");if($(document).scrollTop()<=0&&ETScrubber.loadedItems.indexOf(0)!=-1)index="op";$(".scrubber-"+index,ETScrubber.scrubber).addClass("selected").parents("li").addClass("selected");return false;}});var newer=$(".scrubberNext",ETScrubber.body);if(newer.length&&y+$(window).height()>newer.offset().top&&!newer.hasClass("loading")&&!ET.disableFixedPositions){newer.find("a").click();}});$(".scrubberMore a",ETScrubber.body).live("click",function(e){e.preventDefault();$(this).parent().addClass("loading");var moreItem=$(this).parent();var backwards,position;if(moreItem.is(".scrubberPrevious")){backwards=true;position=Math.min.apply(Math,ETScrubber.loadedItems)-ETScrubber.perPage;}
else if(moreItem.is(".scrubberNext")){backwards=false;position=Math.max.apply(Math,ETScrubber.loadedItems)+1;}
else{backwards=moreItem.offset().top-$(document).scrollTop()<250;position=backwards?$(this).parent().data("positionEnd")-ETScrubber.perPage+1:$(this).parent().data("positionStart");}
ETScrubber.loadItemsCallback(position,function(data){if(backwards){var firstItem=moreItem.next();var scrollOffset=firstItem.offset().top-$(document).scrollTop();}
var items=ETScrubber.addItems(data.startFrom,data.view,moreItem);if(backwards)
$.scrollTo(firstItem.offset().top-scrollOffset);return items;});});$(".scrubber a",ETScrubber.body).click(function(e){e.preventDefault();var index=$(this).parent().data("index");if(index=="last")index=Infinity;else if(index=="first")index=0;var found=ETScrubber.scrollToIndex(index);if(!found){var moreItem=null,prevPost=null;$("li",ETScrubber.items).each(function(){if($(this).is(".scrubberMore"))moreItem=$(this);else{var item=$(this).first();if(item.data("index")>index)
return false;moreItem=null;prevPost=$(this);}});if(!moreItem&&!prevPost)
ETScrubber.scrollTo(0);else if(!moreItem&&prevPost&&index!=Infinity)
ETScrubber.scrollTo(prevPost.offset().top);else if(moreItem){ETScrubber.scrollTo(moreItem.offset().top);moreItem.addClass("loading");ETScrubber.loadItemsCallback(index,function(data){if(index==Infinity)var scrollOffset=ETScrubber.items.offset().top+ETScrubber.items.outerHeight()-$(document).scrollTop();var items=ETScrubber.addItems(data.startFrom,data.view,moreItem);if(index==Infinity)$.scrollTo(ETScrubber.items.offset().top+ETScrubber.items.outerHeight()-scrollOffset);else ETScrubber.scrollToIndex(index);return items;},true);}}});},scrollTo:function(position){$.scrollTo(Math.max(0,position-ETScrubber.header.outerHeight()),"slow");},scrollToIndex:function(index){var post=null,found=false,item;$("li",ETScrubber.items).each(function(){item=$(this);if(item.data("index")==index){found=true;return false;}
if(item.data("index")>index)
return false;});if(item)ETScrubber.scrollTo(index==0?0:$(item).offset().top);if(typeof ETScrubber.scrollToIndexCallback=="function")ETScrubber.scrollToIndexCallback(index);return found;},addItems:function(startFrom,items,moreItem,animate){startFrom=parseInt(startFrom);moreItem.removeClass("loading");var view=$(items);view=view.filter("li");var items=[],newStartFrom=startFrom;for(var i=0;i<ETScrubber.perPage;i++){if(startFrom+i>=ETScrubber.count)break;if(ETScrubber.loadedItems.indexOf(startFrom+i)!=-1){if(items.length)break;newStartFrom=startFrom+i+1;continue;}
items.push(view[i]);}
startFrom=newStartFrom;items=$(items);if($("div.timeMarker[data-now]",ETScrubber.body).length){items.find("div.timeMarker[data-now]").remove();}
if(moreItem.is(".scrubberPrevious"))
moreItem.after(items);else if(moreItem.is(".scrubberNext"))
moreItem.before(items);else if(items.length)
moreItem.replaceWith(items);var scrubberMore=$("<li class='scrubberMore'><a href='#'>"+ETScrubber.moreText+"</a></li>");if(ETScrubber.loadedItems.indexOf(startFrom-1)==-1&&items.first().prev().is("li:not(.scrubberMore)")){scrubberMore=scrubberMore.clone();items.first().before(scrubberMore);for(var i=startFrom-1;i>0;i--){if(ETScrubber.loadedItems.indexOf(i)!=-1)break;}
scrubberMore.data("positionStart",i+1);scrubberMore.data("positionEnd",startFrom-1);}
if(ETScrubber.loadedItems.indexOf(startFrom+items.length)==-1&&items.last().next().is("li:not(.scrubberMore)")){scrubberMore=scrubberMore.clone();items.last().after(scrubberMore);for(var i=startFrom+items.length+1;i<ETScrubber.count;i++){if(ETScrubber.loadedItems.indexOf(i)!=-1)break;}
scrubberMore.data("positionStart",startFrom+items.length);scrubberMore.data("positionEnd",i-1);}
if(animate)items.hide().fadeIn("slow");for(var i=startFrom;i<startFrom+items.length;i++){if(ETScrubber.loadedItems.indexOf(i)==-1)
ETScrubber.loadedItems.push(i);}
if(Math.min.apply(Math,ETScrubber.loadedItems)<=0)
$(".scrubberPrevious").remove();if(Math.max.apply(Math,ETScrubber.loadedItems)>=ETScrubber.count-1)
$(".scrubberNext").remove();return items;}};var ETMembers={init:function(){$("#createMemberLink").click(function(e){e.preventDefault();ETMembers.loadCreateMemberSheet();});ETScrubber.body=$("#memberListBody");ETScrubber.scrubber=$("#memberListBody .scrubberContent");ETScrubber.items=$("#memberList");ETScrubber.count=ET.countMembers;ETScrubber.perPage=ET.membersPerPage;ETScrubber.moreText=T("Load more members");ETScrubber.startFrom=ET.startFrom;ETScrubber.loadItemsCallback=function(position,success){$.ETAjax({url:"members/index.ajax/"+ET.orderBy+"/"+position,data:{search:ET.searchString},success:success,global:false});};ETScrubber.scrollToIndexCallback=function(index){$.history.load("members/"+ET.orderBy+"/"+index,true);};ETScrubber.init();$("#memberList .online").tooltip({alignment:"left",className:"withArrow withArrowBottom",offset:[-9,0]}).css("cursor","pointer");},loadCreateMemberSheet:function(formData){ETSheet.loadSheet("createMemberSheet","members/create.view",function(){$(this).find("form").ajaxForm("submit",ETMembers.loadCreateMemberSheet);},formData);}};$(function(){ETMembers.init();});$(function(){if($("#conversationStatusControls").length)
$("#conversationBody .scrubberContent").prepend($("#conversationStatusControls").popup({alignment:"left",content:"<i class='icon-pushpin'></i> <span class='text'>Sildid</span> <i class='icon-caret-down'></i>"}).find(".button").addClass("big").end());});