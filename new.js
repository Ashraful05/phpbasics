var btnElement = document.getElementById('btn');
btnElement.onclick = function (){
   var height = document.getElementById('height').value;
   var width  = document.getElementById('weight').value;
   var color  = document.getElementById('color').value;
   var radius = document.getElementById('radius').value;

   var newElement = document.getElementById('newElement');
   newElement.style.height=height+'px';
   newElement.style.width=width+'px';
   newElement.style.backgroundColor=color;
   newElement.style.borderRadius=radius+'px';

   var givenText = document.getElementById('givenText');
   givenText.onfocus=function(){
       givenText.style.width='400px';
       givenText.style.height='50px';
       givenText.style.boxShadow='5 5 5 gray';
   };
   givenText.onblur=function(){
     givenText.style.width='200px';
     givenText.style.height='30px';
     givenText.style.boxShadow='5 5 5 gray';
   };
   givenText.onkeyup=function(){
     document.getElementById('result').innerHTML = givenText.value;
   };

};