<style>
    .div-one{
        height: 400px;
        width: 500px;
        background-color: #9acfea;
    }
</style>

<div class="div-one" id="divOne"></div>
<hr>
<button type="button" id="greenbutton">GreenButton</button>
<button type="button" id="redbutton">RedButton</button>
<button type="button" id="yellobutton">YellowButton</button>
<button type="button" id="bluebutton">BlueButton</button>
<button type="button" id="blackbutton">BlackButton</button>
<button type="button" id="openbutton">Open</button>
<button type="button" id="closebutton">Close</button>
<script>
    // var openbtn = document.getElementById('openbutton');
    // openbtn.onclick=function (){
    //     divOne.style.
    // }

    var greenbtn = document.getElementById('greenbutton');
    greenbtn.onclick=function(){
        divOne.style.backgroundColor='green';
        divOne.style.borderRadius='100px';
    }
    var redbtn = document.getElementById('redbutton');
    redbtn.onclick=function(){
        divOne.style.backgroundColor='red';
        divOne.style.borderRadius='100px';
    }
    var yellowbtn=document.getElementById('yellobutton');
    yellowbtn.onclick=function(){
        divOne.style.backgroundColor='yellow';
        divOne.style.borderRadius='100px';
    }
    var bluebtn=document.getElementById('bluebutton');
    bluebtn.onclick=function(){
        divOne.style.backgroundColor='blue';
        divOne.style.borderRadius='100px';
    }
    var blackbtn=document.getElementById('blackbutton');
    blackbtn.onclick=function(){
        divOne.style.backgroundColor='black';
        divOne.style.borderRadius='100px';
    }
</script>