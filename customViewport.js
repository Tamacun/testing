var links = [
                "lirik",
                "shortyyguy",
                'timthetatman',
                'summit1g',
                'unitlost'
                ]


function randomlink(){
window.location= 'https://twitch.tv/' + links[Math.floor(Math.random()*links.length)]
}


function loadPages1(){
    var input = document.getElementById('userInput1').value;
    document.getElementById('onesource').setAttribute('src', 'http://player.twitch.tv/?channel='+ input +'&autoplay=true&muted=true');
}

function loadPages2(){
    var input = document.getElementById('userInput2').value;
    document.getElementById('twosource').setAttribute('src', 'http://player.twitch.tv/?channel='+ input +'&autoplay=true&muted=true');
}

function loadPages3(){
    var input = document.getElementById('userInput3').value;
    document.getElementById('threesource').setAttribute('src', 'http://player.twitch.tv/?channel='+ input +'&autoplay=true&muted=true');
}

function loadPages4(){
    var input = document.getElementById('userInput4').value;
    document.getElementById('foursource').setAttribute('src', 'http://player.twitch.tv/?channel='+ input +'&autoplay=true&muted=true');
}

function loadPages5(){
    var input = document.getElementById('userInput5').value;
    document.getElementById('fivesource').setAttribute('src', 'http://player.twitch.tv/?channel='+ input +'&autoplay=true&muted=true');
}

function loadPages6(){
    var input = document.getElementById('userInput6').value;
    document.getElementById('sixsource').setAttribute('src', 'http://player.twitch.tv/?channel='+ input +'&autoplay=true&muted=true');
}

function loadPages7(){
    var input = document.getElementById('userInput7').value;
    document.getElementById('sevensource').setAttribute('src', 'http://player.twitch.tv/?channel='+ input +'&autoplay=true&muted=true');
}

function loadPages8(){
    var input = document.getElementById('userInput8').value;
    document.getElementById('eightsource').setAttribute('src', 'http://player.twitch.tv/?channel='+ input +'&autoplay=true&muted=true');
}

function loadPages9(){
    var input = document.getElementById('userInput9').value;
    document.getElementById('ninesource').setAttribute('src', 'http://player.twitch.tv/?channel='+ input +'&autoplay=true&muted=true');
}

function loadPages10(){
    var input = document.getElementById('userInput10').value;
    document.getElementById('tensource').setAttribute('src', 'http://player.twitch.tv/?channel='+ input +'&autoplay=true&muted=true');
}

function loadPages11(){
    var input = document.getElementById('userInput11').value;
    document.getElementById('elevensource').setAttribute('src', 'http://player.twitch.tv/?channel='+ input +'&autoplay=true&muted=true');
}

function loadPages12(){
    var input = document.getElementById('userInput12').value;
    document.getElementById('twelvesource').setAttribute('src', 'http://player.twitch.tv/?channel='+ input +'&autoplay=true&muted=true');
}

$(document).ready(function(){
    $(".add-stream1").click(function(){
        $(".v1").show();
        $('#form1').show();
        $('.add-stream1').hide();
        $('.chat').show();
    })
})

$(document).ready(function(){
    $(".add-stream2").click(function(){
        $(".v2").show();
        $('#form2').show();
        $('.add-stream2').hide();
    })
})

$(document).ready(function(){
    $(".add-stream3").click(function(){
        $(".v3").show();
        $('#form3').show();
        $('.add-stream3').hide();
    })
})

$(document).ready(function(){
    $(".add-stream4").click(function(){
        $(".v4").show();
        $('#form4').show();
        $('.add-stream4').hide();
    })
})

$(document).ready(function(){
    $(".add-stream5").click(function(){
        $(".v5").show();
        $('#form5').show();
        $('.add-stream5').hide();
    })
})

$(document).ready(function(){
    $(".add-stream6").click(function(){
        $(".v6").show();
        $('#form6').show();
        $('.add-stream6').hide();
    })
})

$(document).ready(function(){
    $(".add-stream7").click(function(){
        $(".v7").show();
        $('#form7').show();
        $('.add-stream7').hide();
    })
})

$(document).ready(function(){
    $(".add-stream8").click(function(){
        $(".v8").show();
        $('#form8').show();
        $('.add-stream8').hide();
    })
})

$(document).ready(function(){
    $(".add-stream9").click(function(){
        $(".v9").show();
        $('#form9').show();
        $('.add-stream9').hide();
    })
})

$(document).ready(function(){
    $(".add-stream10").click(function(){
        $(".v10").show();
        $('#form10').show();
        $('.add-stream10').hide();
    })
})

$(document).ready(function(){
    $(".add-stream11").click(function(){
        $(".v11").show();
        $('#form11').show();
        $('.add-stream11').hide();
    })
})

$(document).ready(function(){
    $(".add-stream12").click(function(){
        $(".v12").show();
        $('#form12').show();
        $('.add-stream12').hide();
    })
})

/* chat pop */

function myFunction(){
    var input = document.getElementById('userInput1').value;
        document.getElementById('chat_embed').setAttribute('src', 'http://twitch.tv/'+ input +'/chat?popout=');
        document.getElementById('chatsubmit').setAttribute('value', 'Hide Chat');
        document.getElementById('chat-pop').setAttribute('display', 'none');
    }


/* toggle chatpop */



