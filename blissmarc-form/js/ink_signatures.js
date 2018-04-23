sform={c:'NOTICE: Copyright 2011-2012 Lux Scientiae, Incorporated (http://luxsci.com). All right reserved. No permission to copy, modify, reverse-engineer, or use outside of the context of the LuxSci SecureForm service.',sigs:{},don:0,bel:0};sform.Signature=function(p){var t=this;var pfx='SecureForm Signatures: ';var f=document[p.form_name];var id=p.id||p.field_name||'sid';p.field_name=p.field_name||'signature';if(!f){alert(pfx+"Web form named '"+p.form_name+"' not found on page!");return;}if(f[p.field_name]){alert(pfx+"Web form field '"+p.field_name+"' already exists in form!");return;}t.f=f;t.field=p.field_name;t.file=p.file_name||t.field;t.cap=p.caption||t.field;t.w=p.w?parseInt(p.w)||400:400;t.h=p.h?parseInt(p.h)||100:100;t.id=sform.Q(id);t.hidden=p.hidden||0;t.cid=t.id+"_canvas";t.path=[];t.css=p.css;t.x=937853;t.ison=1;t.fg=p.fg||'black';t.bg=p.bg||'white';if(p.h>999)p.h=999;if(!p.delay_render)document.write(t.getHTML());sform.sigs[id]=t;if(!sform.bel)sform.xAEL(document.body,'touchmove',function(event){sform.BM(event);},false);sform.bel=1;return t;};sform.BM=function(event){if(sform.don)event.preventDefault();};sform.Signature.prototype.getHTML=function(){var t=this;var h='<input type="hidden" name="'+t.field+'_sfs" value="'+t.x+","+t.w+","+t.h+","+t.bg+","+t.fg+'" />';h=h+'<input type="hidden" name="'+t.field+'" value="" />';h=h+'<input type="hidden" name="'+t.field+'_file" value="'+sform.Q(t.file)+'" />';h=h+'<input type="hidden" name="'+t.field+'_caption" value="'+sform.Q(t.cap)+'" />';h=h+'<canvas id="'+t.cid+'" width="'+t.w+'" height="'+t.h+'" '+'style="cursor:pointer;background-color:'+t.bg+'" '+'onMouseDown="sform.od(event,'+"'"+t.id+"'"+');" '+'onMouseUp="sform.ou(event,'+"'"+t.id+"'"+');" '+'onMouseMove="sform.om(event,'+"'"+t.id+"'"+');" '+'onTouchStart="sform.od(event,'+"'"+t.id+"'"+');" '+'onTouchEnd="sform.ou(event,'+"'"+t.id+"'"+');" '+'onTouchMove="sform.om(event,'+"'"+t.id+"'"+');" '+(t.css?'class="'+t.css+'"':"")+'>'+'Your web browser does not support HTML5 Canvas.  Signature object cannot be displayed.'+'</canvas>';h='<div id="'+t.id+'" class="sform_sig"'+(t.hidden?' class="display:none" ':'')+'>'+h+'</div>';return h;};sform.od=function(ev,id){var t=sform.sigs[id];if(!t||!t.ison)return 1;xPD(ev);var e=new sform.xE(ev);var cx=sform.xGE(t.cid);t.don=1;sform.don=1;t.dx0=e.pageX-sform.xA(cx);t.dy0=e.pageY-sform.xB(cx);t.path.push("x"+t.x);return 0;};sform.ou=function(ev,id){var t=sform.sigs[id];if(!t||!t.ison)return 1;xPD(ev);t.don=0;sform.don=0;return 0;};sform.ap=function(t){t.path.push((t.dx0*1000+t.dy0)^t.x);};sform.om=function(ev,id){var t=sform.sigs[id];if(!t||!t.don||!t.ison)return 1;xPD(ev);var e=new sform.xE(ev);var cx=sform.xGE(t.cid);if(t.don==1)sform.ap(t);var x0=t.dx0;var y0=t.dy0;t.dx0=e.pageX-sform.xA(cx);t.dy0=e.pageY-sform.xB(cx);sform.ap(t);t.don++;var ff=t.f[t.field];if(ff)ff.value=t.path.join(":");if(cx&&cx.getContext){var c=cx.getContext('2d');c.strokeStyle=t.fg;c.beginPath();c.moveTo(x0,y0);c.lineTo(t.dx0,t.dy0);c.closePath();c.stroke();}return 0;};sform.Signature.getById=function(id){return sform.sigs[id];};sform.Signature.prototype.reset=function(){this.path=[];var e=sform.xGE(this.cid);if(e&&e.getContext){var c=e.getContext('2d');c.clearRect(0,0,e.width,e.height);e.width=e.width;c.fillStyle=this.bg;c.fillRect(0,0,e.width,e.height);c.fill();}};sform.Signature.prototype.filename=function(fn){var ff=this.f[this.field+"_file"];if(fn)ff.value=fn;return ff.value;};sform.Signature.prototype.caption=function(fn){var ff=this.f[this.field+"_caption"];if(fn)ff.value=fn;return ff.value;};sform.Signature.prototype.isSigned=function(){return this.path.length;};sform.Signature.prototype.hide=function(){sform.xGE(this.id).style.display='none';};sform.Signature.prototype.show=function(){sform.xGE(this.id).style.display='block';};sform.Signature.prototype.active=function(a){if(a!=undefined)this.ison=a?1:0;return this.ison;};sform.Q=function(t){t=String(t).replace(/&/g,'&amp;');t=t.replace(/[""]/g,'&quot;');t=t.replace(/>/g,'&gt;');t=t.replace(/</g,'&lt;');return t;};sform.xE=function(evt){var e=evt||window.event;if(!e)return;if(sform.xD(e.pageX)){this.pageX=e.pageX;this.pageY=e.pageY;}else if(sform.xD(e.clientX)){this.pageX=e.clientX+sform.xSL();this.pageY=e.clientY+sform.xST();}if(e&&e.targetTouches&&e.targetTouches.length==1){var tch=e.targetTouches[0];this.pageX=tch.pageX;this.pageY=tch.pageY;}};sform.xAEL=function(e,eT,eL,cap){if(!(e=sform.xGE(e)))return;eT=eT.toLowerCase();if(e.addEventListener)e.addEventListener(eT,eL,cap||false);else if(e.attachEvent)e.attachEvent('on'+eT,eL);else{var o=e['on'+eT];e['on'+eT]=typeof o=='function'?function(v){o(v);eL(v);}:eL;}};sform.xA=function(e){var x=0;e=sform.xGE(e);while(e){if(sform.xD(e.offsetLeft))x+=e.offsetLeft;e=sform.xD(e.offsetParent)?e.offsetParent:null;}return x;};sform.xB=function(e){var y=0;e=sform.xGE(e);while(e){if(sform.xD(e.offsetTop))y+=e.offsetTop;e=sform.xD(e.offsetParent)?e.offsetParent:null;}return y;};sform.xST=function(e,bWin){var offset=0;if(!sform.xD(e)||bWin||e==document||e.tagName.toLowerCase()=='html'||e.tagName.toLowerCase()=='body'){var w=window;if(bWin&&e)w=e;if(w.document.documentElement&&w.document.documentElement.scrollTop)offset=w.document.documentElement.scrollTop;else if(w.document.body&&sform.xD(w.document.body.scrollTop))offset=w.document.body.scrollTop;}else{e=sform.xGE(e);if(e&&xNum(e.scrollTop))offset=e.scrollTop;}return offset;};sform.xSL=function(e,bWin){var offset=0;if(!sform.xD(e)||bWin||e==document||e.tagName.toLowerCase()=='html'||e.tagName.toLowerCase()=='body'){var w=window;if(bWin&&e)w=e;if(w.document.documentElement&&w.document.documentElement.scrollLeft)offset=w.document.documentElement.scrollLeft;else if(w.document.body&&sform.xD(w.document.body.scrollLeft))offset=w.document.body.scrollLeft;}else{e=sform.xGE(e);if(e&&xNum(e.scrollLeft))offset=e.scrollLeft;}return offset;};sform.xGE=function(e){if(typeof(e)=='string'){if(document.getElementById)e=document.getElementById(e);else if(document.all)e=document.all[e];else e=null;}return e;};sform.xD=function(){for(var i=0;i<arguments.length;++i){if(typeof(arguments[i])=='undefined')return false;}return true;};function xPD(e){if(e&&e.preventDefault)e.preventDefault();else if(window.event)window.event.returnValue=false;}

