(function($){
    $.fn.select_skin=function(w){return $(this).each(function(i){s=$(this);
    if(!s.attr('multiple')){s.wrap('<div class="cmf-skinned-select"></div>');
    c=s.parent();
    //c.children().before('<div class="cmf-skinned-text"> </div>').each(function(){if(this.selectedIndex>=0)$(this).prev().text(this.options[this.selectedIndex].innerHTML)});
    //c.children().before('<div class="cmf-skinned-text">' + $("#kategori").val() + '</div>');
    c.children().before('<div class="cmf-skinned-text">' + w + '</div>');
    c.width(s.outerWidth()-2);c.height(s.outerHeight()-2);
    c.css('background-color',s.css('background-color'));
    c.css('color',s.css('color'));
    c.css('font-size',s.css('font-size'));
    c.css('font-family',s.css('font-family'));
    c.css('font-style',s.css('font-style'));
    c.css('position','relative');
    s.css({'opacity':0,'position':'relative','z-index':1001});
    var t=c.children().prev();
    t.height(c.outerHeight()-s.css('padding-top').replace(/px,*\)*/g,"")-s.css('padding-bottom').replace(/px,*\)*/g,"")-t.css('padding-top').replace(/px,*\)*/g,"")-t.css('padding-bottom').replace(/px,*\)*/g,"")-2);
    t.width(c.innerWidth()-s.css('padding-right').replace(/px,*\)*/g,"")-s.css('padding-left').replace(/px,*\)*/g,"")-t.css('padding-right').replace(/px,*\)*/g,"")-t.css('padding-left').replace(/px,*\)*/g,"")-c.innerHeight());
    t.css({'opacity':100,'overflow':'hidden','position':'absolute','text-indent':'0px','z-index':1,'top':0,'left':0});
    c.children().click(function(){t.text((this.options.length>0&&this.selectedIndex>=0?this.options[this.selectedIndex].innerHTML:''));});c.children().change(function(){t.text((this.options.length>0&&this.selectedIndex>=0?this.options[this.selectedIndex].innerHTML:''));});}});}
    
$.fn.select_unskin=function(w){return $(this).each(function(i){s=$(this);if(!s.attr('multiple')&&s.parent().hasClass('cmf-skinned-select')){s.siblings('.cmf-skinned-text').remove();s.css({'opacity':100,'z-index':0}).unwrap();}});}}(jQuery));