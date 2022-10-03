let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
}

document.querySelectorAll('.about .video-container .controls .control-btn').forEach(btn =>{
    btn.onclick = () =>{
        let src = btn.getAttribute('data-src');
        document.querySelector('.about .video-container .video').src = src;
    }
})


function Find(){
    var sl = document.getElementById('sl').value;
    var n = document.getElementById('north').value;
    var e = document.getElementById('east').value;
    var w = document.getElementById('west').value;
    var s = document.getElementById('south').value;

    if(sl == "n"){
        if(document.getElementById('north').style.display='block'){
            document.getElementById('east').style.display='none';
            document.getElementById('west').style.display='none';
            document.getElementById('south').style.display='none';

        }else{
            document.getElementById('north').style.display='block';
        }
    }
    else if(sl == "e"){
        if(document.getElementById('east').style.display='block'){
            document.getElementById('north').style.display='none';
            document.getElementById('west').style.display='none';
            document.getElementById('south').style.display='none';
        }else{
            document.getElementById('east').style.display='block';
        }
    }
    else if(sl == "w"){
        if(document.getElementById('west').style.display='block'){
            document.getElementById('north').style.display='none';
            document.getElementById('east').style.display='none';
            document.getElementById('south').style.display='none';
        }
    }
    else if(sl == "s"){
        if(document.getElementById('south').style.display='block'){
            document.getElementById('north').style.display='none';
            document.getElementById('west').style.display='none';
            document.getElementById('east').style.display='none';
        }
    }
    else{
        Swal.fire({
            icon: 'error',
            title: 'Choose A Direction!',
            background : '#222222',
            color:'#fff'
        })
    }
}

