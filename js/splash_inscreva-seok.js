(function (lib, img, cjs, ss, an) {

var p; // shortcut to reference prototypes
lib.webFontTxtInst = {}; 
var loadedTypekitCount = 0;
var loadedGoogleCount = 0;
var gFontsUpdateCacheList = [];
var tFontsUpdateCacheList = [];
lib.ssMetadata = [
		{name:"splash_inscreva_seok_atlas_", frames: [[0,0,215,207],[0,209,215,207]]}
];



lib.updateListCache = function (cacheList) {		
	for(var i = 0; i < cacheList.length; i++) {		
		if(cacheList[i].cacheCanvas)		
			cacheList[i].updateCache();		
	}		
};		

lib.addElementsToCache = function (textInst, cacheList) {		
	var cur = textInst;		
	while(cur != null && cur != exportRoot) {		
		if(cacheList.indexOf(cur) != -1)		
			break;		
		cur = cur.parent;		
	}		
	if(cur != exportRoot) {		
		var cur2 = textInst;		
		var index = cacheList.indexOf(cur);		
		while(cur2 != null && cur2 != cur) {		
			cacheList.splice(index, 0, cur2);		
			cur2 = cur2.parent;		
			index++;		
		}		
	}		
	else {		
		cur = textInst;		
		while(cur != null && cur != exportRoot) {		
			cacheList.push(cur);		
			cur = cur.parent;		
		}		
	}		
};		

lib.gfontAvailable = function(family, totalGoogleCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], gFontsUpdateCacheList);		

	loadedGoogleCount++;		
	if(loadedGoogleCount == totalGoogleCount) {		
		lib.updateListCache(gFontsUpdateCacheList);		
	}		
};		

lib.tfontAvailable = function(family, totalTypekitCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], tFontsUpdateCacheList);		

	loadedTypekitCount++;		
	if(loadedTypekitCount == totalTypekitCount) {		
		lib.updateListCache(tFontsUpdateCacheList);		
	}		
};
// symbols:



(lib.inscreva = function() {
	this.spriteSheet = ss["splash_inscreva_seok_atlas_"];
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.saiba = function() {
	this.spriteSheet = ss["splash_inscreva_seok_atlas_"];
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Symbol4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.inscreva();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol4, new cjs.Rectangle(0,0,215,207), null);


(lib.Symbol3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.inscreva();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol3, new cjs.Rectangle(0,0,215,207), null);


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.saiba();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol2, new cjs.Rectangle(0,0,215,207), null);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.saiba();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol1, new cjs.Rectangle(0,0,215,207), null);


// stage content:
(lib.splash_inscrevaseok = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// inscreva-se
	this.instance = new lib.Symbol3();
	this.instance.parent = this;
	this.instance.setTransform(104,103.5,0.028,1,0,0,0,105.8,103.5);
	this.instance._off = true;

	this.instance_1 = new lib.inscreva();
	this.instance_1.parent = this;
	this.instance_1.setTransform(-7,0);

	this.instance_2 = new lib.Symbol4();
	this.instance_2.parent = this;
	this.instance_2.setTransform(100.5,103.5,1,1,0,0,0,107.5,103.5);
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance}]},94).to({state:[{t:this.instance}]},1).to({state:[{t:this.instance}]},1).to({state:[{t:this.instance}]},1).to({state:[{t:this.instance}]},1).to({state:[{t:this.instance}]},1).to({state:[{t:this.instance}]},1).to({state:[{t:this.instance}]},1).to({state:[{t:this.instance}]},1).to({state:[{t:this.instance}]},1).to({state:[{t:this.instance_1}]},1).to({state:[{t:this.instance_2}]},82).to({state:[{t:this.instance_2}]},1).to({state:[{t:this.instance_2}]},1).to({state:[{t:this.instance_2}]},1).to({state:[{t:this.instance_2}]},1).to({state:[{t:this.instance_2}]},1).to({state:[{t:this.instance_2}]},1).to({state:[{t:this.instance_2}]},1).to({state:[{t:this.instance_2}]},1).to({state:[{t:this.instance_2}]},1).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.instance).wait(94).to({_off:false},0).wait(1).to({regX:107.5,scaleX:0.14,x:103.8},0).wait(1).to({scaleX:0.24,x:103.6},0).wait(1).to({scaleX:0.35,x:103.5},0).wait(1).to({scaleX:0.46,x:103.3},0).wait(1).to({scaleX:0.57,x:103},0).wait(1).to({scaleX:0.68,x:102.8},0).wait(1).to({scaleX:0.78,x:102.7},0).wait(1).to({scaleX:0.89,x:102.5},0).wait(1).to({scaleX:1,x:102.3},0).to({_off:true},1).wait(92));
	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(186).to({_off:false},0).wait(1).to({scaleX:0.89},0).wait(1).to({scaleX:0.78},0).wait(1).to({scaleX:0.67},0).wait(1).to({scaleX:0.56},0).wait(1).to({scaleX:0.46},0).wait(1).to({scaleX:0.35},0).wait(1).to({scaleX:0.24},0).wait(1).to({scaleX:0.13},0).wait(1).to({scaleX:0.02},0).wait(1));

	// Layer 1
	this.instance_3 = new lib.Symbol1();
	this.instance_3.parent = this;
	this.instance_3.setTransform(103.6,103.5,0.074,1,0,0,0,107.5,103.5);

	this.instance_4 = new lib.saiba();
	this.instance_4.parent = this;
	this.instance_4.setTransform(-4,0);

	this.instance_5 = new lib.Symbol2();
	this.instance_5.parent = this;
	this.instance_5.setTransform(103.5,103.5,1,1,0,0,0,107.5,103.5);
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_3}]}).to({state:[{t:this.instance_3}]},1).to({state:[{t:this.instance_3}]},1).to({state:[{t:this.instance_3}]},1).to({state:[{t:this.instance_3}]},1).to({state:[{t:this.instance_3}]},1).to({state:[{t:this.instance_3}]},1).to({state:[{t:this.instance_3}]},1).to({state:[{t:this.instance_3}]},1).to({state:[{t:this.instance_4}]},1).to({state:[{t:this.instance_5}]},75).to({state:[{t:this.instance_5}]},1).to({state:[{t:this.instance_5}]},1).to({state:[{t:this.instance_5}]},1).to({state:[{t:this.instance_5}]},1).to({state:[{t:this.instance_5}]},1).to({state:[{t:this.instance_5}]},1).to({state:[{t:this.instance_5}]},1).to({state:[{t:this.instance_5}]},1).to({state:[{t:this.instance_5}]},1).to({state:[{t:this.instance_5}]},1).to({state:[]},1).wait(101));
	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(1).to({scaleX:0.19},0).wait(1).to({scaleX:0.3,x:103.5},0).wait(1).to({scaleX:0.41,x:103.6},0).wait(1).to({scaleX:0.52,x:103.5},0).wait(1).to({scaleX:0.63,x:103.6},0).wait(1).to({scaleX:0.74,x:103.5},0).wait(1).to({scaleX:0.85,x:103.6},0).wait(1).to({scaleX:0.97},0).to({_off:true},1).wait(187));
	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(84).to({_off:false},0).wait(1).to({scaleX:0.9},0).wait(1).to({scaleX:0.8},0).wait(1).to({scaleX:0.71},0).wait(1).to({scaleX:0.61},0).wait(1).to({scaleX:0.51},0).wait(1).to({scaleX:0.41},0).wait(1).to({scaleX:0.31},0).wait(1).to({scaleX:0.22},0).wait(1).to({scaleX:0.12},0).wait(1).to({scaleX:0.02},0).to({_off:true},1).wait(101));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(195.6,105,16,207);
// library properties:
lib.properties = {
	width: 200,
	height: 210,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	webfonts: {},
	manifest: [
		{src:"http://cookloversleclub.com.br/images/splash_inscreva_seok_atlas_.png", id:"splash_inscreva_seok_atlas_"}
	],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;