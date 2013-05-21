
function openpopup(id){
      //Calculate Page width and height
      var pageWidth = window.innerWidth;
      var pageHeight = window.innerHeight;
      if (typeof pageWidth != "number"){
      if (document.compatMode == "CSS1Compat"){
            pageWidth = document.documentElement.clientWidth;
            pageHeight = document.documentElement.clientHeight;
      } else {
            pageWidth = document.body.clientWidth;
            pageHeight = document.body.clientHeight;
      }
      } 

      //Make the background div tag visible...
      var divbg = document.getElementById('bg');
      divbg.style.visibility = "visible";
      divbg.style.filter = 'alpha(opacity=50)'; 
      divbg.style.opacity = '0.5'; 
      divbg.style.transition = 'opacity 0.5s';

       
      var divobj = document.getElementById(id);
      divobj.style.visibility = "visible";
      divobj.style.height = '300px';
      divobj.style.width = '500px';
      divobj.style.transition = 'height 0.3s, width 0.3s';
      if (navigator.appName=="Microsoft Internet Explorer")
      computedStyle = divobj.currentStyle;
      else computedStyle = document.defaultView.getComputedStyle(divobj, null);
      //Get Div width and height from StyleSheet
      var divWidth = computedStyle.width.replace('px', '');
      var divHeight = computedStyle.height.replace('px', '');
      //Put a Close button for closing the popped up Div tag
      if(divobj.innerHTML.indexOf("closepopup('" + id +"')") < 0 )
      divobj.innerHTML = "<a href=\"#\" onclick=\"closepopup('" + id +"')\"><span class=\"close_button\">X</span></a>" + divobj.innerHTML;
}
function closepopup(id){
      var divbg = document.getElementById('bg');
      divbg.style.filter = 'alpha(opacity=10)'; 
      divbg.style.opacity = '0.1'; 
      divbg.style.visibility = "hidden";
      var divobj = document.getElementById(id);
      divobj.style.height = '0px';
      divobj.style.width = '0px';
      divobj.style.visibility = "hidden";
}






  function showMyPopup(id) {
    var mypopup = document.getElementById(id);
    mypopup.style.visibility = 'visible';
    mypopup.style.backgroundColor = 'yellow';
    mypopup.style.height = '500px';
    mypopup.style.width = '150px';
    mypopup.style.transition = 'height 0.3s, width 0s';
if(mypopup.innerHTML.indexOf("closeMyPopup('" + id +"')") < 0 )
mypopup.innerHTML = "<a href=\"#\" onclick=\"closeMyPopup('" + id +"')\"><span class=\"close_button\">X</span></a>" + mypopup.innerHTML;

}
function closeMyPopup(id){
      var mypopup = document.getElementById(id);
      mypopup.style.height = '0px';
      mypopup.style.width = '0px';
      mypopup.style.visibility = 'hidden';
}


function google(evt){

    var person = document.getElementById('person');
 var key = (evt.which) ? evt.which : event.keyCode;


if (String.fromCharCode(key)=="w"){

person.style.top=parseInt(person.style.top)-7+'px';
 
}


 if (String.fromCharCode(key)=="d"){

  person.style.left=parseInt(person.style.left)+7+'px';

  }

 if (String.fromCharCode(key)=="a"){

person.style.left=parseInt(person.style.left)+-7+'px';

  }

  if (String.fromCharCode(key)=="s"){

person.style.top=parseInt(person.style.top)+7+'px';

  }







}








function openmypopup(id){
      //Calculate Page width and height
      var pageWidth = window.innerWidth;
      var pageHeight = window.innerHeight;
      if (typeof pageWidth != "number"){
      if (document.compatMode == "CSS1Compat"){
            pageWidth = document.documentElement.clientWidth;
            pageHeight = document.documentElement.clientHeight;
      } else {
            pageWidth = document.body.clientWidth;
            pageHeight = document.body.clientHeight;
      }
      } 

      //Make the background div tag visible...
      var divbg = document.getElementById('bg');
      divbg.style.visibility = "visible";
      divbg.style.filter = 'alpha(opacity=50)'; 
      divbg.style.opacity = '0.5'; 
      divbg.style.transition = 'opacity 0.5s';

       
      var divobj = document.getElementById(id);
      divobj.style.visibility = "visible";
      divobj.style.height = '700px';
      divobj.style.width = '960px';
      divobj.style.transition = 'height 0.3s, width 0.3s';
      if (navigator.appName=="Microsoft Internet Explorer")
      computedStyle = divobj.currentStyle;
      else computedStyle = document.defaultView.getComputedStyle(divobj, null);
      //Get Div width and height from StyleSheet
      var divWidth = computedStyle.width.replace('px', '');
      var divHeight = computedStyle.height.replace('px', '');
      //Put a Close button for closing the popped up Div tag
      if(divobj.innerHTML.indexOf("closepopup('" + id +"')") < 0 )
      divobj.innerHTML = "<a href=\"#\" onclick=\"closepopup('" + id +"')\"><span class=\"close_button\">X</span></a>" + divobj.innerHTML;
}
function closepopup(id){
      var divbg = document.getElementById('bg');
      divbg.style.filter = 'alpha(opacity=10)'; 
      divbg.style.opacity = '0.1'; 
      divbg.style.visibility = "hidden";
      var divobj = document.getElementById(id);
      divobj.style.height = '0px';
      divobj.style.width = '0px';
      divobj.style.visibility = "hidden";
}




document.body.addEventListener('click', function(e){
    var target = e.target;
    if(target.classList.contains('tile')) {
        target.classList.add('bounceout');
        setTimeout(function() {
            if(target.dataset) window.location = target.dataset.redirect;
            else window.location = target.getAttribute('data-redirect');
            }, 1000);
    }

}, false);



document.body.addEventListener('click', function(e){
    var target = e.target;
    if(target.classList.contains('tile2')) {
        target.classList.add('bounceout1');
        setTimeout(function() {
            if(target.dataset) window.location = target.dataset.redirect;
            else window.location = target.getAttribute('data-redirect');
            }, 1000);
    }

}, false);

document.body.addEventListener('click', function(e){
    var target = e.target;
    if(target.classList.contains('tile3')) {
        target.classList.add('bounceout3');
        setTimeout(function() {
            if(target.dataset) window.location = target.dataset.redirect;
            else window.location = target.getAttribute('data-redirect');
            }, 1000);
    }

}, false);




document.body.addEventListener('click', function(e){
    var target = e.target;
    if(target.classList.contains('tile4')) {
        target.classList.add('bounceout4');
        setTimeout(function() {
            if(target.dataset) window.location = target.dataset.redirect;
            else window.location = target.getAttribute('data-redirect');
            }, 1000);
    }

}, false);





document.body.addEventListener('click', function(e){
    var target = e.target;
    if(target.classList.contains('tile5')) {
        target.classList.add('bounceout5');
        setTimeout(function() {
            if(target.dataset) window.location = target.dataset.redirect;
            else window.location = target.getAttribute('data-redirect');
            }, 1000);
    }

}, false);





document.body.addEventListener('click', function(e){
    var target = e.target;
    if(target.classList.contains('tile6')) {
        target.classList.add('bounceout6');
        setTimeout(function() {
            if(target.dataset) window.location = target.dataset.redirect;
            else window.location = target.getAttribute('data-redirect');
            }, 1000);
    }

}, false);





document.body.addEventListener('click', function(e){
    var target = e.target;
    if(target.classList.contains('tile7')) {
        target.classList.add('bounceout7');
        setTimeout(function() {
            if(target.dataset) window.location = target.dataset.redirect;
            else window.location = target.getAttribute('data-redirect');
            }, 1000);
    }

}, false);








document.body.addEventListener('click', function(e){
    var target = e.target;
    if(target.classList.contains('tile8')) {
        target.classList.add('bounceout8');
        setTimeout(function() {
            if(target.dataset) window.location = target.dataset.redirect;
            else window.location = target.getAttribute('data-redirect');
            }, 1000);
    }

}, false);









document.body.addEventListener('click', function(e){
    var target = e.target;
    if(target.classList.contains('tile9')) {
        target.classList.add('bounceout9');
        setTimeout(function() {
            if(target.dataset) window.location = target.dataset.redirect;
            else window.location = target.getAttribute('data-redirect');
            }, 1000);
    }

}, false);







document.body.addEventListener('click', function(e){
    var target = e.target;
    if(target.classList.contains('tile10')) {
        target.classList.add('bounceout10');
        setTimeout(function() {
            if(target.dataset) window.location = target.dataset.redirect;
            else window.location = target.getAttribute('data-redirect');
            }, 1000);
    }

}, false);

