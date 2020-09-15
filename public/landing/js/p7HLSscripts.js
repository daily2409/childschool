
/* 
 ================================================
 PVII Headline Scroller scripts
 Copyright (c) 2014 Project Seven Development
 www.projectseven.com
 Version: 1.0.8 -build 10
 ================================================
 
*/

var p7HLS={
	ctl: [],
	once: false,
	prf: 'none',
	animDelay: (1000/60)
};
function P7_HLSset(){
	var i,h,sh,hd,x,v,ie=P7_HLSgetIEver();
	if(!document.getElementById || (ie>4 && ie<6)){
		return;
	}
	sh='';
	sh+='.p7hls-viewport {overflow:hidden;position:relative;padding:0;margin:0;}\n';
	sh+='.p7hls-wrapper {width:99000px;overflow:hidden;}\n';
	sh+='.p7hls-item {float:left;display:inline-block;margin-left:0;position:relative;top:0px;overflow:hidden;white-space:nowrap;}\n';
	sh+='.p7hls-item.slideUp {opacity:0;top:500px;}\n';
	sh+='.slideUp.current-item {transition:top 0.8s ease, opacity 2s ease;}\n';
	sh+='.p7hls-item p,.p7hls-item div,.p7hls-item h1,.p7hls-item h2,.p7hls-item h3,.p7hls-item h4,.p7hls-item h5,.p7hls-item pre {display:inline;}\n';
	p7HLS.prf=P7_HLSgetCSSPre();
	if(document.styleSheets){
		if(ie>4 && ie<8){
		}
		h='\n<st' + 'yle type="text/css">\n'+sh+'\n</s' + 'tyle>';
		document.write(h);
	}
	else{
		P7_HLSaddSheet(sh);
	}
}
P7_HLSset();
function P7_HLSop(){
	if(!document.getElementById){
		return;
	}
	p7HLS.ctl[p7HLS.ctl.length]=arguments;
}
function P7_HLSbb(){
	return;
}
function P7_HLSaddLoad(){
	var ie=P7_HLSgetIEver();
	if(!document.getElementById || (ie>4 && ie<6)){
		return;
	}
	if(window.addEventListener){
		window.addEventListener("load",P7_HLSinit,false);
		window.addEventListener("unload",P7_HLSbb,false);
		window.addEventListener("resize",P7_HLSrsz,false);
	}
	else if(window.attachEvent){
		document.write("<script id=p7ie_hls defer src=\"//:\"><\/script>");
		document.getElementById("p7ie_hls").onreadystatechange=function(){
			if (this.readyState=="complete"){
				if(p7HLSctl.length>0){
					P7_HLSinit();
				}
			}
		};
		window.attachEvent("onload",P7_HLSinit);
		window.attachEvent("onunload",P7_HLSbb);
		window.attachEvent("onresize",P7_HLSrsz);
	}
}
P7_HLSaddLoad();
function P7_HLSinit(){
	var i,j,tD,wP,vP,tB,cN,el,ob,an;
	if(p7HLS.once){
		return;
	}
	p7HLS.once=true;
	p7HLS.prf=P7_HLSgetCSSPre();
	for(j=0;j<p7HLS.ctl.length;j++){
		tD=document.getElementById(p7HLS.ctl[j][0]);
		if(tD){
			tD.p7opt=p7HLS.ctl[j];
			tD.hlsSpeed=tD.p7opt[2]/p7HLS.animDelay;
			tD.curLeft=0;
			tD.curItem=null;
			tD.hlsState='pause';
			tD.hlsRunning=false;
			wP=document.getElementById(tD.id.replace('_','wp_'));
			ob=P7_HLSgetItem(wP,'first');
			if(ob==P7_HLSgetItem(wP,'last')){
				el=ob.cloneNode(true);
				wP.appendChild(el);
			}
			tB=document.getElementById(tD.id.replace('_','tb_'));
			vP=document.getElementById(tD.id.replace('_','vp_'));
			if(tB){
				tD.hlsToolbar=true;
				tB.style.height=vP.offsetHeight+'px';
			}
			if(p7HLS.prf=='none'){
				if(tD.p7opt[1]>1){
					tD.p7opt[1]=1;
				}
			}
			cN=wP.childNodes;
			for(i=0;i<cN.length;i++){
				if(cN[i].nodeName=='DIV'){
					cN[i].hlsDelayCounter=0;
					cN[i].hlsDelay=0;
					if(tD.p7opt[6]>0){
						cN[i].hlsDelay=parseInt((tD.p7opt[6]/p7HLS.animDelay),10);
					}
					if(tD.p7opt[1]==2){
						P7_HLSsetClass(cN[i],'slideUp');
					}
				}
			}
			tD.hlsControls=[];
			tD.hlsControls[1]=P7_HLSsetCC(tD.id,'rp_','prev');
			tD.hlsControls[2]=P7_HLSsetCC(tD.id,'rn_','next');
			el=document.getElementById(tD.id.replace('_','rpp_'));
			if(el){
				el.p7state='pause';
				el.hlsDiv=tD.id;
				tD.hlsControls[0]=el;
				el.onclick=function(){
					var ac=(this.p7state=='play')?'pause':'play';
					P7_HLScontrol(this.hlsDiv,ac);
					return false;
				};
				el.hlsSetButtonState=function(st){
					var tx;
					if(st=='play'){
						tx='Pause';
						P7_HLSremClass(this,'play');
					}
					else{
						tx='Play';
						P7_HLSsetClass(this,'play');
					}
					this.innerHTML=tx;
				};
			}
			vP=document.getElementById(tD.id.replace('_','vp_'));
			vP.hlsDiv=tD.id;
			if(tD.p7opt[3]==1){
vP.onmouseover = function(){
	var tD=document.getElementById(this.hlsDiv);
	if(tD.hlsState=='play'){
		tD.hlsResume=true;
		P7_HLSpause(this.hlsDiv);
	}
};
vP.onmouseout=function(evt){
	var tD=document.getElementById(this.hlsDiv);
	if(tD.hlsResume){
		var tg,pp,m=true,d;
		d=this.id;
		evt=(evt)?evt:event;
		tg=(evt.toElement)?evt.toElement:evt.relatedTarget;
		if(tg){
			pp=tg;
			while(pp){
				if(pp.id&&pp.id.indexOf(d)===0){
					m=false;
					break;
				}
				pp=pp.parentNode;
			}
		}
		if(m){
			tD.hlsResume=false;
			P7_HLScontrol(tD.id,'play');
		}
	}
};
}
if(tD.p7opt[4]==1){
tD.hlsPlay=setTimeout("P7_HLScontrol('"+tD.id+"','splay')",tD.p7opt[5]);
}
}
}
}
function P7_HLSctl(d,ac){
	P7_HLScontrol(d,ac);
}
function P7_HLScontrol(d,ac){
	var i,tD,tW,m;
	tD=document.getElementById(d);
	tW=document.getElementById(tD.id.replace('_','wp_'));
	tD.hlsResume=false;
	if(tD){
		m=(tD.hlsState)=='play'?true:false;
		if(!tD.curItem){
			tD.curItem=P7_HLSgetItem(tW,'first');
			P7_HLSsetClass(tD.curItem,'current-item');
			tD.curLeft=0;
			tD.curItem.style.opacity=1;
			tD.curItem.style.top='0px';
		}
		if(tD.hlsRunning){
			tD.hlsRunning=false;
			clearInterval(tD.hlsPlay);
		}
		if(ac=='pause'){
			P7_HLSpause(d);
			m=false;
		}
		if(ac=='play' || ac=='splay'){
			tD.hlsState='play';
			m=true;
			if(tD.hlsControls[0]){
				tD.hlsControls[0].p7state='play';
				tD.hlsControls[0].hlsSetButtonState('play');
			}
		}
		if(ac=='prev'){
			P7_HLSswitch(tD.id,'prev');
		}
		if(ac=='next'){
			P7_HLSswitch(tD.id,'next');
		}
	}
	if(m){
		tD.curItem=P7_HLSgetItem(tW,'first');
		if(tD.p7opt[1]==1 || tD.p7opt[1]==2){
			if(ac=='play'){
				tD.curItem.hlsDelayCounter = tD.curItem.hlsDelay;
			}
			tD.hlsRunning=true;
tD.hlsPlay=setInterval(function(){
	P7_HLSplay(tD);
}
,p7HLS.animDelay);
}
else{
tD.hlsRunning=true;
tD.hlsPlay=setTimeout(function(){
	P7_HLScontrol(tD.id,'next');
}
,p7HLS.staticDelay);
}
}
return false;
}
function P7_HLSpause(d){
	var cD,tD=document.getElementById(d);
	if(tD){
		tD.hlsState='pause';
		if(tD.hlsPlay){
			tD.hlsRunning=false;
			clearInterval(tD.hlsPlay);
		}
		if(tD.hlsControls[0]){
			tD.hlsControls[0].p7state='pause';
			tD.hlsControls[0].hlsSetButtonState('pause');
		}
	}
}
function P7_HLSplay(el){
	var i,m;
	if(el.curItem.offsetTop===0){
		if(!el.curItem.hlsDelay || (parseInt(el.curItem.hlsDelayCounter,10) == parseInt(el.curItem.hlsDelay,10))){
			el.curLeft -= el.hlsSpeed;
			el.curItem.style.marginLeft=el.curLeft+'px';
		}
		else{
			el.curItem.hlsDelayCounter+=1;
		}
	}
	if( Math.abs(el.curLeft) >= el.curItem.offsetWidth){
		P7_HLSswitch(el.id,'next');
	}
}
function P7_HLSswitch(d,ac){
	var tD,cW,cD,vP,prevItem,firstItem,lastItem;
	tD=document.getElementById(d);
	vP=document.getElementById(tD.id.replace('_','vp_'));
	cD=tD.curItem;
	cW=cD.parentNode;
	prevItem=cD;
	if(ac=='next'){
		cW.appendChild(cD);
		cD.style.marginLeft='0px';
		tD.curItem=P7_HLSgetItem(cW,'first');
		P7_HLSsetClass(tD.curItem,'current-item');
		P7_HLSremClass(prevItem,'current-item');
		tD.curLeft=0;
		tD.curItem.hlsDelayCounter=0;
		prevItem.hlsDelayCounter=0;
		if(tD.p7opt[1]==2){
			tD.curItem.style.top=vP.offsetHeight+'px';
			tD.curItem.offsetWidth=tD.curItem.offsetWidth;
			tD.curItem.style.top='0px';
			tD.curItem.style.opacity=1;
			prevItem.style.top=vP.offsetHeight+'px';
			prevItem.style.opacity=0;
		}
	}
	else if(ac=='prev'){
		firstItem=P7_HLSgetItem(cW,'first');
		lastItem=P7_HLSgetItem(cW,'last');
		cW.insertBefore(lastItem,firstItem);
		cD.style.marginLeft='0px';
		tD.curItem=P7_HLSgetItem(cW,'first');
		tD.curLeft=0;
		P7_HLSsetClass(tD.curItem,'current-item');
		P7_HLSremClass(prevItem,'current-item');
		tD.curItem.hlsDelayCounter=0;
		prevItem.hlsDelayCounter=0;
		if(tD.p7opt[1]==2){
			tD.curItem.style.top=vP.offsetHeight+'px';
			tD.curItem.offsetWidth=tD.curItem.offsetWidth;
			tD.curItem.style.top='0px';
			tD.curItem.style.opacity=1;
			prevItem.style.top=vP.offsetHeight+'px';
			prevItem.style.opacity=0;
		}
	}
}
function P7_HLSrsz(){
	var j,tD,vP,tB;
	for(j=0;j<p7HLS.ctl.length;j++){
		tD=document.getElementById(p7HLS.ctl[j][0]);
		if(tD && tD.hlsToolbar){
			tB=document.getElementById(tD.id.replace('_','tb_'));
			vP=document.getElementById(tD.id.replace('_','vp_'));
			if(tB && vP){
				tB.style.height=vP.offsetHeight+'px';
			}
		}
	}
}
function P7_HLSaddSheet(sh){
	var h,hd;
	h=document.createElement('style');
	h.type='text/css';
	h.appendChild(document.createTextNode(sh));
	hd=document.getElementsByTagName('head');
	hd[0].appendChild(h);
}
function P7_HLSgetCSSPre(){
	var i,dV,pre=['animationDuration','WebkitAnimationDuration'];
	var c='none',cssPre=['','-webkit-'];
	dV=document.createElement('div');
	for(i=0;i<pre.length;i++){
		if(dV.style[pre[i]]!==undefined){
			c=cssPre[i];
			break;
		}
	}
	return c;
}
function P7_HLSgetIEver(){
	var j,v=-1,nv,m=false;
	nv=navigator.userAgent.toLowerCase();
	j=nv.indexOf("msie");
	if(j>-1){
		v=parseFloat(nv.substring(j+4,j+8));
		if(document.documentMode){
			v=document.documentMode;
		}
	}
	return v;
}
function P7_HLSsetCC(dd,rp,ac){
	var d,tC;
	d=dd.replace('_',rp);
	tC=document.getElementById(d);
	if(tC){
		tC.onclick=function(){
			return P7_HLScontrol(dd,ac);
		};
	}
	return tC;
}
function P7_HLSsetClass(ob,cl){
	if(ob){
		var cc,nc,r=/\s+/g;
		cc=ob.className;
		nc=cl;
		if(cc&&cc.length>0){
			if(cc.indexOf(cl)==-1){
				nc=cc+' '+cl;
			}
			else{
				nc=cc;
			}
		}
		nc=nc.replace(r,' ');
		ob.className=nc;
	}
}
function P7_HLSremClass(ob,cl){
	if(ob){
		var cc,nc;
		cc=ob.className;
		if(cc&&cc.indexOf(cl>-1)){
			nc=cc.replace(cl,'');
			nc=nc.replace(/\s+/g,' ');
			nc=nc.replace(/\s$/,'');
			nc=nc.replace(/^\s/,'');
			ob.className=nc;
		}
	}
}
function P7_HLSgetItem(el,ps){
	var i,ob,cN;
	cN=el.childNodes;
	for(i=0;i<cN.length;i++){
		if(cN[i].nodeName=='DIV'){
			ob=cN[i];
			if(ps=='first'){
				break;
			}
		}
	}
	return ob;
}
