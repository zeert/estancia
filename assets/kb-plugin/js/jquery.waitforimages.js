;(function($){$.waitForImages={hasImageProperties:['backgroundImage','listStyleImage','borderImage','borderCornerImage']};$.expr[':'].uncached=function(obj){var img=document.createElement('img');img.src=obj.src;return $(obj).is('img[src!=""]')&&!img.complete;};$.fn.waitForImages=function(finishedCallback,eachCallback,waitForAll){if($.isPlainObject(arguments[0])){eachCallback=finishedCallback.each;waitForAll=finishedCallback.waitForAll;finishedCallback=finishedCallback.finished;}
finishedCallback=finishedCallback||$.noop;eachCallback=eachCallback||$.noop;waitForAll=!!waitForAll;if(!$.isFunction(finishedCallback)||!$.isFunction(eachCallback)){throw new TypeError('An invalid callback was supplied.');};return this.each(function(){var obj=$(this),allImgs=[];if(waitForAll){var hasImgProperties=$.waitForImages.hasImageProperties||[],matchUrl=/url\((['"]?)(.*?)\1\)/g;obj.find('*').each(function(){var element=$(this);if(element.is('img:uncached')){allImgs.push({src:element.attr('src'),element:element[0]});}
$.each(hasImgProperties,function(i,property){var propertyValue=element.css(property);if(!propertyValue){return true;}
var match;while(match=matchUrl.exec(propertyValue)){allImgs.push({src:match[2],element:element[0]});};});});}else{obj.find('img:uncached').each(function(){allImgs.push({src:this.src,element:this});});};var allImgsLength=allImgs.length,allImgsLoaded=0;if(allImgsLength==0){finishedCallback.call(obj[0]);};$.each(allImgs,function(i,img){var image=new Image;$(image).bind('load error',function(event){allImgsLoaded++;eachCallback.call(img.element,allImgsLoaded,allImgsLength,event.type=='load');if(allImgsLoaded==allImgsLength){finishedCallback.call(obj[0]);return false;};});image.src=img.src;});});};})(jQuery);