var this_domain="pichunter.com";
var path="/nini/";
var cookie_name="ph";
var cookie_life_hours=1;
var blind_ratio=24; //24
var min_time_delay=5;
var first_time_delay=1;
var cron_update_delay=110;
var max_outs=10;
var offline_cookie_name="0";
var dat=new Date();
var last_clicked=dat.getTime();
var trades=new Array();
var loaded=false;
var current_trade_index=-1;
var cookies_allowed=true;
var mTimer;
var cookies_set=false;
var ip=null;
var cookie_processed=false;
var first_click=false;
var extra=false;
var last_gal_visited=0;
var iw_logged=false;
var ref=document.referrer;
ref=ref.match(/:\/\/(www\.)?([^\/:]+)/);
if(ref){
ref=ref[2]?ref[2]:"";
}else{
ref="noref";
}
ref=ref.toLowerCase();
var ref5=ref;
if(ref==this_domain){
ref="noref";
}
if(ref=="noref" || ref=="google.com"){
blind_ratio=17; //16
}
var visited=new Array();
var cookie_value=null;
function createCookie(_1,_2,_3){
var _4=null;
if(cookies_allowed){
if(_3){
var _5=new Date();
_5.setTime(_5.getTime()+(_3*60*60*1000));
_4="; expires="+_5.toGMTString();
}else{
_4="";
}
document.cookie=_1+"="+_2+_4+"; path=/";
}else{
}
}
function readCookie(_6){
if(cookies_allowed){
var _7=_6+"=";
var ca=document.cookie.split(";");
for(var i=0;i<ca.length;i++){
var c=ca[i];
while(c.charAt(0)==" "){
c=c.substring(1,c.length);
}
if(c.indexOf(_7)==0){
return c.substring(_7.length,c.length);
}
}
return null;
}else{
var _b=new Date();
_b=_b.getTime();
whttp.open("GET",path+"gcookie.php?ui="+offline_cookie_name+"&t="+_b,false);
whttp.send(null);
return ProcessOfflineCookie();
}
}
function eraseCookie(_c){
createCookie(_c,"",-1);
visited=new Array();
cookie_value="";
}
function ProcessOfflineCookie(){
if(whttp.readyState==4){
if(whttp.status==200){
return whttp.responseText;
}
}
return null;
}
function getXMLHTTPRequest(){
var _d=null;
try{
_d=new XMLHttpRequest();
}
catch(err1){
try{
_d=new ActiveXObject("Msxml2.XMLHTTP");
}
catch(err2){
try{
_d=new ActiveXObject("Microsoft.XMLHTTP");
}
catch(err3){
try{
_d=window.createRequest();
}
catch(err4){
_d=false;
}
}
}
}
return _d;
}
function Trade(id,_f,_10,_11){
this.id=id;
this.url=_f;
this.domain=_10;
this.weight=_11;
}
function ResponceHandle(){
if(xmlhttp.readyState==4){
var _12=xmlhttp.responseXML.documentElement;
if(!_12){
return;
}
trades=Array();
var _13=_12.getElementsByTagName("trade");
var _14=_13.length;
if(_14>1){
loaded=true;
}
for(i=0;i<_14;i++){
trade_id=parseInt((_13[i].getElementsByTagName("id")[0].firstChild.data));
trade_url=_13[i].getElementsByTagName("ur")[0].firstChild.data;
trade_domain=_13[i].getElementsByTagName("do")[0].firstChild.data;
trade_weight=Math.round((_13[i].getElementsByTagName("we")[0].firstChild.data));
if(!(trade_weight>0)){
continue;
}
trades.push(new Trade(trade_id,trade_url,trade_domain,trade_weight));
}
Shuffle();
mTimer=setInterval(function(){
LoadData();
},(1000*cron_update_delay));
if(!cookies_set){
StartCookies();
}
}
}
function LoadData(){
if(mTimer){
clearInterval(mTimer);
}
var tim=new Date();
tim=tim.getTime();
xmlhttp.open("GET",path+"outgoing.xml?"+tim,true);
xmlhttp.onreadystatechange=ResponceHandle;
xmlhttp.send(null);
}
function Shuffle(){
if(!loaded){
return;
}
var _16=new Array();
var _17=0;
var _18=trades.length;
for(i=0;i<_18;i++){
_17+=(trades[i].weight);
}
while(_18>0){
rand_num=Math.round(Math.random()*_17);
found=false;
for(i=0;i<_18;i++){
rand_num=rand_num-trades[i].weight;
if(rand_num<=0){
found=true;
break;
}
}
if(!found){
i--;
}
if(trades[i]==null){
break;
}
_17=_17-trades[i].weight;
_18--;
_16.push(new Trade(trades[i].id,trades[i].url,trades[i].domain,trades[i].weight));
trades.splice(i,1);
}
trades=_16;
current_trade_index=-1;
}
function FindByDomain(_19,_1a){
var id=null;
for(i=0;i<_19.length;i++){
if(_19[i].domain==_1a){
id=_19[i].id;
break;
}
}
return id;
}
function WhereToNext(_1c){
var url;
var id;
var _1f=false;
var _20=0;
while(_1f==false&&_20<trades.length){
_20++;
current_trade_index++;
if(current_trade_index>(trades.length-1)){
current_trade_index=0;
}
id=trades[current_trade_index].id;
was_visited=false;
for(i=0;i<visited.length;i++){
if(visited[i]==id){
was_visited=true;
break;
}
}
if(!was_visited){
_1f=true;
}
}
if(_1f){
url=trades[current_trade_index].url;
}else{
url=null;
return url;
}
visited.push(id);
cookie_value+="|"+id;
if(cookies_allowed){
createCookie(cookie_name,cookie_value,cookie_life_hours);
}
CallOut(id,url,_1c);
return url;
}
function CallOut(id,url,_23){
var tim=new Date();
tim=tim.getTime();
var _25=path+"out.php?ref="+ref+"&tid="+id+"&url="+escape(url)+"&t="+tim;
if(!cookies_allowed){
_25=_25+"&ui="+offline_cookie_name;
if(extra!=false){
_25+="&extra="+extra;
extra=false;
}
}
if(_23){
_25+="&id="+_23;
}
whttp.open("GET",_25,true);
whttp.setRequestHeader("Cache-Control","no-cache");
whttp.setRequestHeader("Pragma","no-cache");
whttp.send(null);
}
function StartCookies(){
var id=null;
var _27;
var _28=false;
cookies_set=true;
createCookie("test","1",1);
if(!readCookie("test")){
cookies_allowed=false;
}
cookie_value=readCookie(cookie_name);
if(ref!="noref"&&ref!=this_domain){
id=FindByDomain(trades,ref);
}
if(cookies_allowed==false&&id){
extra=id;
}
if(cookie_value){
_27=cookie_value.split("|");
ref=_27.shift();
for(i=0;i<_27.length;i++){
visited=push_unique(visited,parseInt(_27[i]));
if(id&&_27[i]==id){
_28=true;
}
}
if(!_28&&id){
cookie_value+="|"+id;
visited=push_unique(visited,id);
createCookie(cookie_name,cookie_value,cookie_life_hours);
}
return;
}
cookie_value=ref;
if(id){
cookie_value+="|"+id;
}
if(id){
visited.push(id);
}
if(cookies_allowed){
createCookie(cookie_name,cookie_value,cookie_life_hours);
}
}
function TimePassed(_29){
var _2a=new Date();
_2a=_2a.getTime();
return Math.floor((_2a-_29)/1000);
}
function cleanUp(){
clearInterval(mTimer);
}
function push_unique(_2b,val){
var _2d=false;
var i=0;
for(i=0;i<_2b.length;i++){
if(_2b[i]==val){
_2d=true;
break;
}
}
if(!_2d){
_2b.push(val);
}
return _2b;
}
function UserInfo(){
var _2f="qwertyuiop[];lkjhgfdsazxcvbnm,./1234567890-=";
var app,cpu,scre=null;
n=navigator.appVersion;
n=n.toLowerCase();
app=_2f.indexOf(n.charAt(n.length-2));
app=app+""+_2f.indexOf(n.charAt(0));
n=navigator.platform;
n=n.toLowerCase();
cpu=_2f.indexOf(n.charAt(0));
n=screen.availWidth+"";
scre=n.slice(0,2);
id=app+""+cpu+""+scre;
return id;
}
function CallIn(ref){
offline_cookie_name=UserInfo();
if(ref5!=this_domain){
var tim=new Date();
tim=tim.getTime();
whttp.open("GET",path+"in.php?ref="+ref+"&"+tim,true);
whttp.send(null);
}
}
function LogDomId(id){
if(id){
whttp.open("POST",path+"log_dom.php?id="+id,true);
whttp.setRequestHeader("Cache-Control","no-cache");
whttp.setRequestHeader("Pragma","no-cache");
whttp.send(null);
}
return;
}
function fixURL(_34,_35){
if(!_35||_35.length<1||!_34){
WriteDebug("error "+_34+" "+_35);
}
_34.href=_35;
}
var xmlhttp=getXMLHTTPRequest();
var whttp=getXMLHTTPRequest();
CallIn(ref);
mTimer=setTimeout(function(){
LoadData();
},(1000));

function getQueryVariable(query) {
  var vars = query.split("gal=");
  if (vars.length<2) return query;
  var vars2 = vars[1].split("&p=");
  return vars2[0];
}


function test_tags(){
var x;
var new_url;
var _37=document.getElementsByTagName("a");
for(var i=0;i<_37.length;i++){
x=_37[i].getAttribute("x");
if(x){
if(x=="d"){
			if (_37[i].href.indexOf("o.php") > -1)
			{
				new_url=getQueryVariable(_37[i].href);
				_37[i].href=new_url;
			}
			_37[i].href = _37[i].href.replace(/%3F/,'?');
			_37[i].href = _37[i].href.replace(/%26/,'&');
			_37[i].onclick=d;
}
if(x=="h"){
_37[i].onclick=h;
}
}
}
}
function d(e){
if(iw_logged==true){
return;
}
if(!loaded){
WriteDebug("not loaded!!");
return;
}
if(window.event){
linkElement=window.event.srcElement;
}else{
linkElement=e.target;
}
if(window.event&&linkElement.parentElement.href){
linkElement=linkElement.parentElement;
}else{
if(linkElement.parentNode.href){
linkElement=linkElement.parentNode;
}
}
var _3a=true;
var id=linkElement.getAttribute("dom_id");
if(visited.length>max_outs){
WriteDebug("maximum reached");
_3a=false;
}
last_gal_visited=0;
if(_3a){
if (!first_click)
{
	first_click = true;
	LogDomId(id);
	return;	
}
rand_num=Math.round(Math.random()*100);
if(rand_num<blind_ratio){
WriteDebug("should go blind");
if(!first_click&&(TimePassed(last_clicked)<first_time_delay)){
LogDomId(id);
return;
}else{
if(TimePassed(last_clicked)<min_time_delay){
LogDomId(id);
return;
}else{
last_clicked=new Date();
last_clicked=last_clicked.getTime();
}
}
var url=linkElement.href;
var _3d=WhereToNext(id);
if(_3d){
first_click=true;
setTimeout(function(){
fixURL(linkElement,url);
},1000);
linkElement.href=_3d;
try{
last_gal_visited=linkElement.getAttribute("id");
}
catch(err1){
try{
last_gal_visited=linkElement.getAttribute("dom_id");
}
catch(err2){
last_gal_visited=0;
}
}
if(!last_gal_visited){
try{
last_gal_visited=linkElement.getAttribute("dom_id");
}
catch(err){
last_gal_visited=0;
}
}
}
}else{
LogDomId(id);
}
}else{
LogDomId(id);
}
return;
}
function h(e){
if(!loaded){
return;
}
if(window.event){
linkElement=window.event.srcElement;
}else{
linkElement=e.target;
}
var url=linkElement.href;
var _40=url.match(/:\/\/(www\.)?([^\/:]+)/);
if(_40){
_40=_40[2]?_40[2]:"";
}else{
return;
}
_40=_40.toLowerCase();
var _41=false;
var _42=false;
var id="";
for(i=0;i<trades.length;i++){
if(trades[i].domain==_40){
_41=true;
id=trades[i].id;
break;
}
}
if(_41){
var _44=cookie_value.split("|");
var ref=_44.shift();
for(i=0;i<_44.length;i++){
if(_44[i]==id){
_42=true;
break;
}
}
if(!_42){
cookie_value+="|"+id;
}
visited=push_unique(visited,id);
if(cookies_allowed){
createCookie(cookie_name,cookie_value,cookie_life_hours);
}
CallOut(id,url);
}
return;
}
function WriteDebug(_46){
}

